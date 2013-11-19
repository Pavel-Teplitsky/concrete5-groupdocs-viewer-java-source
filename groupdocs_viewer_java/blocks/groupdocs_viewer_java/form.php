<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div id="addfile_container">
    <?php  echo t('URL of installed GroupDocs Viewer Java'); ?>:<br>
    <input type="text" name="groupdocs_url" value="<?php echo t($groupdocs_url) ?>">
    <br>
    <?php  echo t('Height: (Default 100px)')?><br>
    <input type="text" name="height" value="<?php  echo t($height)?>">
    <br>
    <?php  echo t('Width: (Default 100px)')?><br>
    <input type="text" name="width" value="<?php  echo t($width)?>">
    <br>
    <a target="blank" href="http://groupdocs.com/docs/display/gendoc/FAQs">See our FAQ</a>
</div>