<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));

$GroupDocsViewerJavaController = $controller;
$includeAssetLibrary = true;
$al = Loader::helper('concrete/asset_library');

$this->inc('form.php');