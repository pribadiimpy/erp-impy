<?php
$sql="SELECT id,nama,module,posisi_menu,aktif FROM menu WHERE id = '{$id}'";
$rs=$db->query($sql);
$nama='';
$module='';
$posisi_menu='';
$aktif='';
while ($row = $rs->fetch_object()) {
	$id=$row->id;
	$nama=$row->nama;
	$module=$row->module;
	$posisi_menu=$row->posisi_menu;
	$aktif=$row->aktif;
}
?>
Form <?=ucfirst($action)?> Menu
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
				<?php if ($action=='hapus') { ?>
					<?=$nama?>
					<input type="hidden" name="nama" value="<?=$nama?>">
				<?php } else { ?>
					<input type="text" name="nama" value="<?=$nama?>">
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Module</td>
			<td>:</td>
			<td>
				<?php if ($action=='hapus') { ?>
					<?=$module?>
					<input type="hidden" name="module" value="<?=$module?>">
				<?php } else { ?>
					<input type="text" name="module" value="<?=$module?>">
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Posisi Menu</td>
			<td>:</td>
			<td>
				<?php if ($action=='hapus') { ?>
					<?=$posisi_menu?>
					<input type="hidden" name="posisi_menu" value="<?=$posisi_menu?>">
				<?php } else { ?>
					<input type="text" name="posisi_menu" value="<?=$posisi_menu?>">
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Aktif</td>
			<td>:</td>
			<td>
				<?php if ($action=='hapus') { ?>
					<?=$aktif?>
					<input type="hidden" name="aktif" value="<?=$aktif?>">
				<?php } else { ?>
					<input type="text" name="aktif" value="<?=$aktif?>">
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
