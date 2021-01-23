<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO barang (id,nama,id_kategori,id_satuan,id_merek) VALUES (NULL,'{$nama}','{$id_kategori}','{$id_satuan}','{$id_merek}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}

if ($submit == 'salin') {
	$sql = "INSERT INTO barang (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: '.index($mid));
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
	header('location: '.index($mid));
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM barang WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: '.index($mid));
}
