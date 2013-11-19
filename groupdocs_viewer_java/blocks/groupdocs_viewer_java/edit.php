<?php     
defined('C5_EXECUTE') or die(_("Access Denied."));

$GroupDocsViewerJavaController = $controller;

$height = $controller->height;
$width = $controller->width;
$path = $controller->path;
$includeAssetLibrary = true;
$al = Loader::helper('concrete/asset_library');

$bf = null;
if (File::getByID($fID) > 0) { 
	$bf = File::getByID($fID);
}

$this->inc('form.php');