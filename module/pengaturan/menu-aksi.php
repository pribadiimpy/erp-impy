<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO menu (menu_id,nama,module,posisi_menu,urutan,aktif) VALUES ('{$menu_id}','{$nama}','{$module}','{$posisi_menu}','{$urutan}','{$aktif}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'salin') {
	$sql = "INSERT INTO menu (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'ubah') {
	$sql = "UPDATE menu SET menu_id='{$menu_id}',nama='{$nama}',module='{$module}',posisi_menu='{$posisi_menu}',urutan='{$urutan}',aktif='{$aktif}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM menu WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}
