<?php
$sqlModule="SELECT module FROM menu WHERE id='{$mid}' AND aktif='Y'";
$rsModule=$db->query($sqlModule);
?>
<?php while ($rowModule=$rsModule->fetch_object()) { ?>
    <?php include FOLDER_MODULE.'/'.$rowModule->module ?>
<?php } ?>
