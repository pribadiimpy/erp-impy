<?php
$sql="SELECT id,nama FROM menu WHERE menu_id='{$miduki}' AND posisi_menu='menu_isi_atas' AND aktif='Y'";
$rs=$db->query($sql);
?>
<?php if ($rs->num_rows > 0) { ?>
    <ul>
        <?php while ($row=$rs->fetch_object()) { ?>
        <li>
            <a href="index.php?midua=<?=$midua?>&miduki=<?=$miduki?>&midia=<?=$row->id?>">
                <?=$row->nama?>
            </a>
        </li>
        <?php } ?>
    </ul>
<?php } ?>
