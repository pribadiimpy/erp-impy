<table width="100%" cellpadding="0" cellspacing="0">
    <tr valign="top">
        <td colspan="3"><?php include 'header_isi.php'; ?></td>
    </tr>
    <tr valign="top">
        <td colspan="3"><?php include 'menu_isi_atas.php'; ?></td>
    </tr>
    <tr valign="top">
        <?php include 'menu_isi_kiri.php'; ?>
        <td>
            <?php
            $sqlModule=
            "
            SELECT
            id,
            module
            FROM menu
            WHERE
            id='{$mid}'
            AND module>''
            AND aktif='Y'
            ";
            $rsModule=$db->query($sqlModule);
            ?>
            <?php while ($rowModule=$rsModule->fetch_object()) { ?>
                <?php $module = FOLDER_MODULE.'/'.$rowModule->module; ?>
                <?php if (file_exists($module)) { ?>
                    <?php $mid=$rowModule->id ?>
                    <?php include($module) ?>
                <?php } ?>
            <?php } ?>
        </td>
        <?php include 'menu_isi_kanan.php'; ?>
    </tr>
    <tr valign="top">
        <td colspan="3"><?php include 'menu_isi_bawah.php'; ?></td>
    </tr>
    <tr valign="top">
        <td colspan="3"><?php include 'footer_isi.php'; ?></td>
    </tr>
</table>
