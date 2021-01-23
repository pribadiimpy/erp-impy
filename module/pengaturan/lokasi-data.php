Data Lokasi
<hr>
<form action="<?=index($mid)?>&controller=form" method="post">
	<table width="100%" border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th width="1">Pilih</th>
			<th width="1">Id</th>
			<th>Lokasi</th>
		</tr>
		<?php
		$where = '';
		if (!empty($nama)) {
			$where = " AND nama LIKE '%{$nama}%'";
		}
		$sql = "SELECT id, nama FROM lokasi WHERE 1 = 1 {$where}";
		$rs = $db->query($sql);
		?>
		<?php while ($row = $rs->fetch_object()) { ?>
			<tr>
				<td><input type="radio" name="id" value="<?=$row->id?>"></td>
				<td><?=$row->id?></td>
				<td><?=$row->nama?></td>
			</tr>
		<?php } ?>
	</table>
	<br>
	Aksi
	<select name="action">
		<option value="">-PILIH-</option>
		<option value="tambah">Tambah Lokasi</option>
		<option value="salin">Salin Lokasi</option>
		<option value="ubah">Ubah Lokasi</option>
		<option value="hapus">Hapus Lokasi</option>
	</select>
	<button type="submit" name="submit" value="pilih">Pilih</button>
</form>
<hr>
