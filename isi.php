<?php
$sqlModule="SELECT module FROM menu WHERE id='{$mid}' AND module > '' AND aktif='Y'";
$rsModule=$db->query($sqlModule);
?>
<?php while ($rowModule=$rsModule->fetch_object()) { ?>
    <?php if (file_exists(FOLDER_MODULE.'/'.$rowModule->module)) { ?>
        <?php include FOLDER_MODULE.'/'.$rowModule->module ?>
    <?php } ?>
<?php } ?>
