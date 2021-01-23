<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO pegawai (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: pegawai.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO pegawai (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: pegawai.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE pegawai SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: pegawai.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM pegawai WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: pegawai.php');
}
