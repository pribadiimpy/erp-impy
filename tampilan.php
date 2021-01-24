<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr valign="top">
            <td><?php include 'header.php'; ?></td>
        </tr>
    </table>
    <table>
        <tr valign="top">
            <td><?php include 'menu_utama_atas.php'; ?></td>
        </tr>
    </table>
    <table>
        <tr valign="top">
            <?php include 'menu_utama_kiri.php'; ?>
            <td width="100%"><?php include 'isi.php'; ?></td>
            <?php include 'menu_utama_kanan.php'; ?>
        </tr>
    </table>
    <table>
        <tr valign="top">
            <td colspan="3"><?php include 'menu_utama_bawah.php'; ?></td>
        </tr>
    </table>
    <table>
        <tr valign="top">
            <td colspan="3"><?php include 'footer.php'; ?></td>
        </tr>
    </table>
</body>
</html>
