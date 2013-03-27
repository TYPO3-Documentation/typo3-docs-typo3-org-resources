<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Claus Due <claus@wildside.dk>, Wildside A/S
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Image ViewHelper
 *
 * In addition to doing all that f:image does, this ViewHelper supports:
 *
 * - multi-image rendering using wildcard filenames, path + CSV-of-filenames or
 *   array of files.
 * - automatic click-enlarge version of multiple images through a single tag.
 * - use of alternative image (for all images) if "src" is not a file
 *
 *
 *
 *
 * @author Claus Due, Wildside A/S
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @package Fed
 * @subpackage ViewHelpers
 *
 */
class Tx_T3orgTemplate_ViewHelpers_ImageViewHelper extends Tx_Fed_ViewHelpers_ImageViewHelper {

	/**
	 * Render the image(s) to HTML
	 *
	 * @return string
	 */
	public function render() {
		$image = '';
		try {
			$image = parent::render();
		} catch (Tx_Fluid_Core_ViewHelper_Exception $e) {}
		return $image;
	}
}

?>
