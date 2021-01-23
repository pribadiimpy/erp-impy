<?php
$sql="SELECT id,menu_id,nama,module,posisi_menu,urutan,aktif FROM menu WHERE id = '{$id}'";
$rs=$db->query($sql);
$menu_id='';
$nama='';
$module='';
$posisi_menu='';
$urutan='';
$aktif='';
while ($row = $rs->fetch_object()) {
	$id=$row->id;
	$menu_id=$row->menu_id;
	$nama=$row->nama;
	$module=$row->module;
	$posisi_menu=$row->posisi_menu;
	$urutan=$row->urutan;
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
			<td>Menu Induk</td>
			<td>:</td>
			<td>
				<?php if ($action=='hapus') { ?>
					<?=$module?>
					<input type="hidden" name="menu_id" value="<?=$menu_id?>">
				<?php } else { ?>
					<input type="text" name="menu_id" value="<?=$menu_id?>">
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
					<select name="posisi_menu">
						<option value="">-PILIH-</option>
						<?php
						$sql="SELECT COLUMN_TYPE FROM information_schema.COLUMNS WHERE TABLE_SCHEMA='erp-impy' AND TABLE_NAME='menu' AND COLUMN_NAME='posisi_menu'";
						$rs=$db->query($sql);
						?>
						<?php while ($row = $rs->fetch_object()) { ?>
							<?php foreach(explode("','",substr($row->COLUMN_TYPE,6,-2)) as $option) { ?>
								<option value="<?=$option?>" <?=$option==$posisi_menu?'selected':''?>><?=$option?></option>
							<?php } ?>
						<?php } ?>
					</select>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Urutan</td>
			<td>:</td>
			<td>
				<?php if ($action=='hapus') { ?>
					<?=$module?>
					<input type="hidden" name="urutan" value="<?=$urutan?>">
				<?php } else { ?>
					<input type="text" name="urutan" value="<?=$urutan?>">
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
					<select name="aktif">
						<option value="">-PILIH-</option>
						<?php
						$sql="SELECT COLUMN_TYPE FROM information_schema.COLUMNS WHERE TABLE_SCHEMA='erp-impy' AND TABLE_NAME='menu' AND COLUMN_NAME='aktif'";
						$rs=$db->query($sql);
						?>
						<?php while ($row = $rs->fetch_object()) { ?>
							<?php foreach(explode("','",substr($row->COLUMN_TYPE,6,-2)) as $option) { ?>
								<option value="<?=$option?>" <?=$option==$aktif?'selected':''?>><?=$option?></option>
							<?php } ?>
						<?php } ?>
					</select>
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
