Data Barang
<hr>
<form action="barang.php?controller=form" method="post">
	<table width="100%" border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th width="1">Pilih</th>
			<th width="1">Id</th>
			<th>Barang</th>
			<th>Kategori</th>
			<th>Satuan</th>
			<th>Merek</th>
		</tr>
		<?php
		$where = '';
		if (!empty($nama)) {
			$where = " AND nama LIKE '%{$nama}%'";
		}
		$sql =
		"
		SELECT
		t1.id,
		t1.nama,
		t2.nama AS kategori,
		t3.nama AS satuan,
		t4.nama AS merek
		FROM
		barang AS t1
		LEFT JOIN kategori AS t2 ON t2.id = t1.id_kategori
		LEFT JOIN satuan AS t3 ON t3.id = t1.id_satuan
		LEFT JOIN merek AS t4 ON t4.id = t1.id_merek
		WHERE
		1 = 1
		{$where}
		";
		$rs = $db->query($sql);
		?>
		<?php while ($row = $rs->fetch_object()) { ?>
			<tr>
				<td><input type="radio" name="id" value="<?=$row->id?>"></td>
				<td><?=$row->id?></td>
				<td><?=$row->nama?></td>
				<td><?=$row->kategori?></td>
				<td><?=$row->satuan?></td>
				<td><?=$row->merek?></td>
			</tr>
		<?php } ?>
	</table>
	<br>
	Aksi
	<select name="action">
		<option value="">-PILIH-</option>
		<option value="tambah">Tambah Barang</option>
		<option value="salin">Salin Barang</option>
		<option value="ubah">Ubah Barang</option>
		<option value="hapus">Hapus Barang</option>
	</select>
	<button type="submit" name="submit" value="pilih">Pilih</button>
</form>
<hr>
