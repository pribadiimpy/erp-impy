<?php
$sql = "SELECT id, nama FROM ruangan WHERE id = '{$id}'";
$rs = $db->query($sql);
$nama = '';
while ($row = $rs->fetch_object()) {
	$id = $row->id;
	$nama = $row->nama;
}
?>
Form <?=ucfirst($action)?> Ruangan
<hr>
<form action="<?=index($mid)?>&controller=aksi" method="post">
	<table>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td>
				<?=$id?>
				<input type="hidden" name="id" value="<?=$id?>">
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<?php if ($action == 'hapus') { ?>
					<?=$nama?>
					<input type="hidden" name="nama" value="<?=$nama?>">
				<?php } else { ?>
					<input type="text" name="nama" value="<?=$nama?>">
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="submit" value="<?=$action?>"><?=ucfirst($action)?></button></td>
		</tr>
	</table>
</form>
<hr>
