<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO menu (id,nama,module,posisi_menu,aktif) VALUES (NULL,'{$nama}','{$module}','{$posisi_menu}','{$aktif}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'salin') {
	$sql = "INSERT INTO menu (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'ubah') {
	$sql = "UPDATE menu SET nama='{$nama}',module='{$module}',posisi_menu='{$posisi_menu}',aktif='{$aktif}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM menu WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}
