<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

/*
 * Responsible for standard (Concrete5) block functionality
 */

class GroupDocsViewerJavaBlockController extends BlockController {

    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 410;
    protected $btTable = 'btGroupDocsViewerJava';

    public function getBlockTypeDescription() {
        return t("GroupDocs Word, Powerpoint, Excel and PDF Viewer for embedding documents into your Concrete5 website");
    }

    public function getBlockTypeName() {
        return t("GroupDocs Java Viewer");
    }

    public function on_page_view() {
        $html = Loader::helper('html');
        $this->addHeaderItem($html->css('jquery.ui.css'));
        $this->addHeaderItem($html->javascript('jquery.ui.js'));
    }

}

?>
