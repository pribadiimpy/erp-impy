<?php $rs=tampilkanMenu($db,0,'menu_utama_atas'); ?>
<?php if ($rs->num_rows>0) { ?>
    <ul>
        <?php while ($row=$rs->fetch_object()) { ?>
        <li>
            <a href="index.php?mid=<?=$row->id?>">
                <?=$row->nama?>
            </a>
        </li>
        <?php } ?>
    </ul>
<?php } ?>
