Data Menu
<hr>
<form action="<?=index($mid)?>&controller=form" method="post">
	<table width="100%" border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th width="1">Pilih</th>
			<th width="1">Id</th>
			<th>Menu</th>
			<th>Module</th>
			<th>Posisi Menu</th>
			<th>Aktif</th>
		</tr>
		<?php
		$where='';
		if (!empty($nama)) {
			$where=" AND nama LIKE '%{$nama}%' ";
		}
		$sql="SELECT id,nama,module,posisi_menu,aktif FROM menu WHERE 1=1 {$where}";
		$rs= $db->query($sql);
		?>
		<?php while ($row=$rs->fetch_object()) { ?>
			<tr>
				<td><input type="radio" name="id" value="<?=$row->id?>"></td>
				<td><?=$row->id?></td>
				<td><?=$row->nama?></td>
				<td><?=$row->module?></td>
				<td><?=$row->posisi_menu?></td>
				<td><?=$row->aktif?></td>
			</tr>
		<?php } ?>
	</table>
	<br>
	Aksi
	<select name="action">
		<option value="">-PILIH-</option>
		<option value="tambah">Tambah Menu</option>
		<option value="salin">Salin Menu</option>
		<option value="ubah">Ubah Menu</option>
		<option value="hapus">Hapus Menu</option>
	</select>
	<button type="submit" name="submit" value="pilih">Pilih</button>
</form>
<hr>
