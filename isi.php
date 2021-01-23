<?php
$sql="SELECT module FROM menu WHERE id='{$mid}' AND aktif='Y'";
$rs=$db->query($sql);
?>
<?php while ($row=$rs->fetch_object()) { ?>
    <?php include FOLDER_MODULE.'/'.$row->module ?>
<?php } ?>
