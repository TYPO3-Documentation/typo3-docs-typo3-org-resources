﻿.. ==================================================
.. FOR YOUR INFORMATION 
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.  ÄÖÜäöüß

.. include:: ../../Includes.txt

=================================
CSS
=================================

Most of the css files of pages at http://docs.typo3.org are exactly 
those being used on http://typo3.org. The following css files are 
specific for documentation pages::

    <link rel="stylesheet" href="http://docs.typo3.org/css/t3_org_doc_main.css" type="text/css" />
    <link rel="stylesheet" href="http://docs.typo3.org/css/t3_to_be_integrated.css" type="text/css" />
    <link rel="stylesheet" href="../../_static/pygments.css" type="text/css" />
    <link rel="alternate stylesheet" href="http://docs.typo3.org/css/t3_org_doc_main_alt_0.css" type="text/css" title="Fixed width" />
    <link rel="alternate stylesheet" href="http://docs.typo3.org/css/t3_org_doc_main_alt_1.css" type="text/css" title="Adaptive width" />
    <link rel="alternate stylesheet" href="http://docs.typo3.org/css/t3_org_doc_main_alt_2.css" type="text/css" title="Style 2" />
    <link rel="alternate stylesheet" href="http://docs.typo3.org/css/t3_org_doc_main_alt_3.css" type="text/css" title="Style 3" />


The ./css folder
================

Learn about the contents of the css folder at 
http://docs.typo3.org/css\. This css folder is a symlink from 
``/home/mbless/public_html/css`` to
``/home/mbless/HTDOCS/github.com/marble/typo3-docs-typo3-org-resources/css``.

Learn about the history of changes at 
https://github.com/marble/typo3-docs-typo3-org-resources/tree/master/webroot/css\.

On srv123 the repository resides at 
``/home/mbless/HTDOCS/github.com/marble/typo3-docs-typo3-org-resources``. 


t3_org_doc_main.css
-------------------
This is the main css file for the documentation specific css.


t3_to_be_integrated.css
-----------------------
This file shouldn't exist. It holds only a few styles that should go 
into :file:`t3_org_doc_main.css`.


pygments.css
------------
This file is included by the Sphinx documentation builder.


t3_org_doc_main_alt_0.css
-------------------------

These files are alternate stylesheets. Only one of them is active at a
time. They work in conjunction with the Javascript style switcher on 
the page:

.. code-block:: text

    t3_org_doc_main_alt_0.css
    t3_org_doc_main_alt_1.css
    t3_org_doc_main_alt_2.css
    t3_org_doc_main_alt_3.css


.. toctree: :
   :maxdepth: 5
   :glob:
   :titlesonly:

   *
