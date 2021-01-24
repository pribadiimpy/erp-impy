<?php $rs=tampilkanMenu($db,$mid,'menu_utama_kiri'); ?>
<?php if ($rs->num_rows > 0) { ?>
    <td width="20%">
        <ul>
            <?php while ($row=$rs->fetch_object()) { ?>
            <li>
                <a href="index.php?mid=<?=$row->id?>">
                    <?=$row->nama?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </td>
<?php } ?>
