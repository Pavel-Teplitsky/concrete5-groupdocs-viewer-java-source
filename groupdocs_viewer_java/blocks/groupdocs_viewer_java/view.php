<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

global $c;
$cmsName = "Concrete5";
$pluginVersion = "1.0";


if ($groupdocs_url) {
    if ($width == "") {
        $width = "650";
    }
    if ($height == "") {
        $height = "500";
    }
    // standard embedding 
    ?>
    <script type="text/javascript" src="<?php echo t($groupdocs_url) ?>assets/js/libs/jquery-ui-1.10.3.min.js"></script>
    <script type="text/javascript" src="<?php echo t($groupdocs_url) ?>assets/js/libs/knockout-2.2.1.js"></script>
    <script type="text/javascript" src="<?php echo t($groupdocs_url) ?>assets/js/libs/turn.min.js"></script>
    <script type="text/javascript" src="<?php echo t($groupdocs_url) ?>assets/js/libs/modernizr.2.6.2.Transform2d.min.js"></script>
    <script type="text/javascript" language="JavaScript">
        if (!window.Modernizr.csstransforms){
            var scriptLoad = document.createElement('script');
            scriptLoad.setAttribute("type","text/javascript");
            scriptLoad.setAttribute("src", '<?php echo t($groupdocs_url) ?>assets/js/libs/turn.html4.min.js');
            document.getElementsByTagName("head")[0].appendChild(scriptLoad);
        }
    </script>
    <script type="text/javascript" src="<?php echo t($groupdocs_url) ?>assets/js/installableViewer.min.js"></script>
    <script type="text/javascript">$.fn.groupdocsViewer.prototype.applicationPath = '<?php echo t($groupdocs_url) ?>';</script>
    <script type="text/javascript">$.fn.groupdocsViewer.prototype.useHttpHandlers = true;</script>
    <script type="text/javascript" src="<?php echo t($groupdocs_url) ?>assets/js/GroupdocsViewer.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo t($groupdocs_url) ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo t($groupdocs_url) ?>assets/css/GroupdocsViewer.all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo t($groupdocs_url) ?>assets/css/jquery-ui-1.10.3.dialog.min.css">
    <script type="text/javascript" language="JavaScript">
        $(function() {
            var localizedStrings = null;
            var thumbsImageBase64Encoded = null;
            $('#test').groupdocsViewer({ filePath: '', docViewerId: 'doc_viewer1', quality: 100, showHeader: true, showThumbnails: true, openThumbnails: false, initialZoom: 100,
                zoomToFitWidth: true, zoomToFitHeight: false, backgroundColor: '', showFolderBrowser: true, showPrint: true, showDownload: true, showZoom: true, showPaging: true,
                showViewerStyleControl: true, showSearch: true, preloadPagesCount: 0, viewerStyle: 1, supportTextSelection: true, localizedStrings: localizedStrings,
                thumbsImageBase64Encoded: thumbsImageBase64Encoded, showDownloadErrorsInPopup: true });
        });
    </script>
    <div id="test" style="width:<?php echo t($width)?>px;height:<?php echo t($height)?>px;overflow:hidden;position:relative;margin-bottom:20px;background-color:gray;border:1px solid #ccc;"></div>
    <?php
}