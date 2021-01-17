<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO barang (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: barang.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO barang (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: barang.php');
}

if ($submit == 'ubah') {
	$sql =
	"
	UPDATE
	barang
	SET
	nama = '{$nama}',
	id_kategori = '{$id_kategori}',
	id_satuan = '{$id_satuan}',
	id_merek = '{$id_merek}'
	WHERE
	id = '{$id}'
	";
	$rs = $db->query($sql);
	header('location: barang.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM barang WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: barang.php');
}
