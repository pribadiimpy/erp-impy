<?php
$sql="SELECT id,nama FROM menu WHERE menu_id > '0' AND menu_id='{$midua}' AND posisi_menu='menu_utama_bawah' AND aktif='Y'";
$rs=$db->query($sql);
?>
<?php if ($rs->num_rows > 0) { ?>
    <td width="10%">
    <ul>
        <?php while ($row=$rs->fetch_object()) { ?>
        <li>
            <a href="index.php?midua=<?=$midua?>&miduki=<?=$row->id?>">
                <?=$row->nama?>
            </a>
        </li>
        <?php } ?>
    </ul>
    </td>
<?php } ?>
