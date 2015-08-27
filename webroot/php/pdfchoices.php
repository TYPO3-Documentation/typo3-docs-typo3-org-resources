<?php

/* mb, 2013-8-18, 2013-08-19 */

/**
 * This class creates a link based on a requested URL.
 * This link either points to a folder with a PDF file or - if the file does not exist -
 * to a documentation page with instructions on how to set up PDF creation.
 */
class PdfMatcher {

    protected $webRootPath = '/home/mbless/public_html';
    /**
     * @var boolean TRUE, if the current page is a glue page, false otherwise
     */
    protected $currentProjectIsGluePage = FALSE;
    /**
     * @var string URL to the folder of the PDF file; .htaccess in there will redirect to actual filename
     */
    protected $pdfUrl = '';
    /**
     * @var string URL to the page with docs on how to set up rendering.
     * Do not change unless the page is moved accordingly!
     */
    protected $pdfDocumentationUrl = 'https://docs.typo3.org/Overview/PdfFiles.html';
    protected $knownPathBeginnings = array(
        // longest paths first!
        '/typo3cms/drafts/github/*/',
        '/typo3cms/drafts/',
        '/typo3cms/extensions/',
        '/typo3cms/',
    );
    protected $cont               = true;    // continue?
    protected $url                = '';      // 'https://docs.typo3.org/typo3cms/TyposcriptReference/en-us/4.7/Setup/Page/Index.html?id=3#abc'
    protected $urlPart1           = '';      // 'https://docs.typo3.org'
    protected $urlPart2           = '';      // '/typo3cms/'
    protected $urlPart3           = '';      // 'TyposcriptReference/4.7/Setup/Page/Index.html?id=3#abc'

    protected $baseFolder         = '';      // 'TyposcriptReference'
    protected $localePath         = '';      // 'en-us'
    protected $versionPath        = '';      // '4.7'
    protected $relativePath       = '';      // 'Setup/Page'
    protected $htmlFile           = '';      // 'Index.html'
    protected $query              = '';      //  '?id=3'
    protected $fragment           = '';      //  '#abc'

    protected $parsedUrl;                    // array

    /** @var boolean Information, whether the PDF file exists or not */
    protected $pdfExists          = true;
    /** @var string The resulting HTML code of the link */
    protected $htmlResult         = '';

    public function __construct() {
        // pass
    }

    protected function isValidVersionFolderName($filename) {
        $isValid = false;
        if (!$isValid) { // named versions
            if (in_array( $filename, array('latest', 'stable'))) {
                $isValid = true;
            }
        }
        if (!$isValid) { // numbered versions (like 1.2[.3[.4[.nnn]]])
            $pattern = '~\d+\.\d+(\.\d+)*~is';
            $subpattern = array();
            $result = preg_match($pattern, $filename, $subpattern);
            if ($result and ($subpattern[0] === $filename)) {
                $isValid = true;
            }
        }
        return $isValid;
    }

    protected function isValidLocaleFolderName($segment) {
        $isValid = false;
        if (!$isValid) { // xx-xx)
            $pattern = '~[a-z][a-z]-[a-z][a-z]~';
            $result = preg_match($pattern, $segment);
            if ($result) {
                $isValid = true;
            }
        }
        return $isValid;
    }

    protected function parseUrl() {
        $this->parsedUrl = parse_url($this->url);
        $this->urlPart1 = '';
        $this->urlPart1 .= isset($this->parsedUrl['scheme'  ]) ?       $this->parsedUrl['scheme'  ] . '://' : '';
        $this->urlPart1 .= isset($this->parsedUrl['host'    ]) ?       $this->parsedUrl['host'    ]         : '';
        $this->query     = isset($this->parsedUrl['query'   ]) ? '?' . $this->parsedUrl['query'   ]         : '';
        $this->fragment  = isset($this->parsedUrl['fragment']) ? '#' . $this->parsedUrl['fragment']         : '';

        // urlpart1: 'https://docs.typo3.org'
        // urlpart2: '/typo3cms/'
        // urlpart3: 'TyposcriptReference/4.7/Setup/Page/Index.html'

        // Step 1: find urlPart2 and urlPart3
        $found = false;
        foreach ($this->knownPathBeginnings as $this->urlPart2) {
            if ($this->startsWith($this->parsedUrl['path'], $this->urlPart2)) {
                $found = true;
                break;
            }
        }
        if ($found) {
            $this->urlPart3 = substr($this->parsedUrl['path'], strlen($this->urlPart2));
            $this->urlPart3PathSegments = explode('/', $this->urlPart3);
        } else {
            $this->cont = false;
        }

        /* Check, if we are on a glue page. On these pages, count($this->urlPart3PathSegments) is 0 or 1. */
        if (count($this->urlPart3PathSegments) < 2) {
            $this->currentProjectIsGluePage = TRUE;
            $this->pdfExists = FALSE;
            $this->cont = FALSE;
        }

        # urlPart3PathSegments: array('TyposcriptReference', 'en-us', '4.7', 'Setup', 'Page', 'Index.html');
        if ($this->cont and (count($this->urlPart3PathSegments) < 2)) {
            $this->cont = false;
        }
        $i = 0;
        if ($this->cont) {
            $this->baseFolder = $this->urlPart3PathSegments[$i]; // 'TyposcriptReference'
            $i += 1;
        }
        if ($this->cont) {
            $segment = $this->urlPart3PathSegments[$i];
            if ($this->isValidLocaleFolderName($segment)) {
                $i += 1;
                $this->localePath = $segment;   // 'en-us'
            }
        }
        if ($this->cont) {
            $segment = $this->urlPart3PathSegments[$i];
            if ($this->isValidVersionFolderName($segment)) {
                $this->versionPath = $segment; // '4.7'
                $i += 1;
            }
        }
        if ($this->cont) {
            $this->relativePath = array_slice($this->urlPart3PathSegments, $i); // array('Setup', 'Page','Index.html')
            $this->htmlFile = array_pop($this->relativePath);                   // 'Index.html'
            $this->relativePath = implode('/', $this->relativePath);            // 'Setup/Page'
        }
        return;
    }

    protected function startsWith($haystack, $needle) {
        return substr($haystack, 0, strlen($needle)) === $needle;
    }

    /**
     * Creates the HTML output, which should be inserted into the page.
     *
     * @return $result string HTML code of the link
     */
    protected function generateOutput() {
        $result = '';
        // Only show link, if this is a normal documentation project. Do not show it on the glue pages.
        if (!$this->currentProjectIsGluePage) {
            if ($this->pdfExists) {
                $linkUrl = $this->pdfUrl;
            } else {
                $linkUrl = $this->pdfDocumentationUrl;
            }
            $result = '<li><a href="' . $linkUrl . '">PDF</a></li>';
        }
        return $result;
    }

    protected function findPdf() {
        if (!$this->cont) {
            return;
        }
        $this->pdfUrl = '';
        $this->pdfUrl .= $this->urlPart1;     // 'https://docs.typo3.org'
        $this->pdfUrl .= $this->urlPart2;     // '/typo3cms/'
        $this->pdfUrl .= $this->baseFolder;   // 'TyposcriptReference'
        $this->pdfUrl .= strlen($this->localePath)  ? '/' . $this->localePath  : '';    // 'en-us'
        $this->pdfUrl .= strlen($this->versionPath) ? '/' . $this->versionPath : '';    // '4.7'
        $this->pdfUrl .= '/_pdf/';

        /* Let's check for the existence of a PDF file. We're reading HEAD of the URL and thereby follow redirects.
         * At the shell:
         *      $cmd = 'curl --location --silent --output /dev/null/ --fail --head ' . $pdfUrl
         *      # Exitcode 0: success
         *      # Exitcode 22: No pdf found
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->pdfUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $this->curlResult = curl_exec($ch);
        $this->curl_errno = curl_errno($ch);
        $this->pdf_http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($this->curl_errno) {
            // Needs CURLOPT_FAILONERROR.
            // On error, most likely ends up with 22 as the exitcode == curl_errno.
            $this->pdfExists = False;
        }
    }

    /**
     * Main logic of the class.
     *
     * Generates the link to the PDF file in HTML format.
     * @param $url string The complete URL as it was requested by the website visitor
     * @param $webRootPath mixed Internal server path to the main folder, which contains the different rendered projects
     * @return string The HTML code with the link
     */
    public function processTheUrl($url, $webRootPath=NULL) {
        $this->url = $url;
        if (!is_null($webRootPath)) {
            $this->webRootPath = $webRootPath;
        }
        $this->parseUrl();
        $this->findPdf();
        $this->htmlResult = $this->generateOutput();
        return $this->htmlResult;
    }
}

$pm = new PdfMatcher();

$url = $_GET['url'];
$htmlResult = $pm->processTheUrl($url);

echo $htmlResult;

?>