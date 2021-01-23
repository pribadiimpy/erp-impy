<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO kategori (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'salin') {
	$sql = "INSERT INTO kategori (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'ubah') {
	$sql = "UPDATE kategori SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM kategori WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}
