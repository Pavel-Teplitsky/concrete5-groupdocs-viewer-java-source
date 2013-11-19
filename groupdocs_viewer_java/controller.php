<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class GroupDocsViewerJavaPackage extends Package {

	protected $pkgHandle = 'groupdocs_viewer_java';
	protected $appVersionRequired = '5.3.0';
	protected $pkgVersion = '1.0.0';

	public function getPackageDescription() {
		return t("GroupDocs Word, Powerpoint, Excel and PDF Viewer for embedding documents into your Concrete5 website");
	}

	public function getPackageName() {
		return t("GroupDocs Viewer Java");
	}

	public function install() {
		$pkg = parent::install();

		// install block
		BlockType::installBlockTypeFromPackage('groupdocs_viewer_java', $pkg);

	}

	public function uninstall() {
		parent::uninstall();
		$db = Loader::db();
	    $db->Execute('drop table btGroupDocsViewerJava');
	}





}
