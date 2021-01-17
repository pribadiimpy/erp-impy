<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO penjual (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: penjual.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO penjual (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: penjual.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE penjual SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: penjual.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM penjual WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: penjual.php');
}
