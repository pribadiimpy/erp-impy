Data Lantai
<hr>
<form action="<?=index($mid)?>&controller=form" method="post">
	<table width="100%" border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th width="1">Pilih</th>
			<th width="1">Id</th>
			<th>Lantai</th>
		</tr>
		<?php
		$where = '';
		if (!empty($nama)) {
			$where = " AND nama LIKE '%{$nama}%'";
		}
		$sql = "SELECT id, nama FROM lantai WHERE 1 = 1 {$where}";
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
		<option value="tambah">Tambah Lantai</option>
		<option value="salin">Salin Lantai</option>
		<option value="ubah">Ubah Lantai</option>
		<option value="hapus">Hapus Lantai</option>
	</select>
	<button type="submit" name="submit" value="pilih">Pilih</button>
</form>
<hr>
