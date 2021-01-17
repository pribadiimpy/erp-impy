<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO pembeli (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: pembeli.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO pembeli (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: pembeli.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE pembeli SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: pembeli.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM pembeli WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: pembeli.php');
}
