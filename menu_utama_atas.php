menu_utama_atas
<?php
$sql="SELECT id,nama FROM menu WHERE menu_id='0' AND posisi_menu='menu_utama_atas' AND aktif='Y' ORDER BY urutan,nama";
$rs=$db->query($sql);
?>
<ul>
    <?php while ($row=$rs->fetch_object()) { ?>
    <li>
        <a href="index.php?mid=<?=$row->id?>">
            <?=$row->nama?>
        </a>
    </li>
    <?php } ?>
</ul>
