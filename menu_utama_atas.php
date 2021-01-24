<?php
$sql="SELECT id,nama FROM menu WHERE menu_id='0' AND posisi_menu='menu_utama_atas' AND aktif='Y' ORDER BY urutan,nama";
$rs=$db->query($sql);
?>
<?php if ($rs->num_rows > 0) { ?>
    <ul>
        <?php while ($row=$rs->fetch_object()) { ?>
        <li>
            <a href="index.php?midua=<?=$row->id?>">
                <?=$row->nama?>
            </a>
        </li>
        <?php } ?>
    </ul>
<?php } ?>
