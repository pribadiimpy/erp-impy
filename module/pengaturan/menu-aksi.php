<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO menu (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'salin') {
	$sql = "INSERT INTO menu (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'ubah') {
	$sql = "UPDATE menu SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM menu WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}
