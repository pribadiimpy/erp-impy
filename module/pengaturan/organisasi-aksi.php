<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO organisasi (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'salin') {
	$sql = "INSERT INTO organisasi (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'ubah') {
	$sql = "UPDATE organisasi SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM organisasi WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}
