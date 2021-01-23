<?php
$sql =
"
SELECT
id,
nama,
id_kategori,
id_satuan,
id_merek
FROM
barang
WHERE
id = '{$id}'
";
$rs = $db->query($sql);
$nama = '';
$id_kategori = 0;
$id_satuan = 0;
$id_merek = 0;
while ($row = $rs->fetch_object()) {
	$id = $row->id;
	$nama = $row->nama;
	$id_kategori =  $row->id_kategori;
	$id_satuan =  $row->id_satuan;
	$id_merek =  $row->id_merek;
}
?>
Form <?=ucfirst($action)?> Barang
<hr>
<form action="barang.php?controller=aksi" method="post">
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
			<td>Kategori</td>
			<td>:</td>
			<td>
				<?php if ($action == 'hapus') { ?>
					<?=$nama?>
					<input type="hidden" name="id_kategori" value="<?=$id_kategori?>">
				<?php } else { ?>
					<select name="id_kategori">
						<option value="0">-PILIH-</option>
						<?php
						$sqlKategori =
						"
						SELECT
						id,
						nama
						FROM
						kategori
						ORDER BY
						nama
						";
						$rsKategori = $db->query($sqlKategori);
						?>
						<?php while ($rowKategori = $rsKategori->fetch_object()) { ?>
							<option value="<?=$rowKategori->id?>"><?=$rowKategori->nama?></option>
						<?php } ?>
					</select>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td>:</td>
			<td>
				<?php if ($action == 'hapus') { ?>
					<?=$nama?>
					<input type="hidden" name="id_satuan" value="<?=$id_satuan?>">
				<?php } else { ?>
					<select name="id_satuan">
						<option value="0">-PILIH-</option>
						<?php
						$sqlSatuan =
						"
						SELECT
						id,
						nama
						FROM
						satuan
						ORDER BY
						nama
						";
						$rsSatuan = $db->query($sqlSatuan);
						?>
						<?php while ($rowSatuan = $rsSatuan->fetch_object()) { ?>
							<option value="<?=$rowSatuan->id?>"><?=$rowSatuan->nama?></option>
						<?php } ?>
					</select>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Merek</td>
			<td>:</td>
			<td>
				<?php if ($action == 'hapus') { ?>
					<?=$nama?>
					<input type="hidden" name="id_merek" value="<?=$id_merek?>">
				<?php } else { ?>
					<select name="id_merek">
						<option value="0">-PILIH-</option>
						<?php
						$sqlMerek =
						"
						SELECT
						id,
						nama
						FROM
						merek
						ORDER BY
						nama
						";
						$rsMerek = $db->query($sqlMerek);
						?>
						<?php while ($rowMerek = $rsMerek->fetch_object()) { ?>
							<option value="<?=$rowMerek->id?>"><?=$rowMerek->nama?></option>
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
