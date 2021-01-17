<h2>Master Pelanggan</h2>
<hr>
Pencarian Pelanggan
<hr>
<form action="pelanggan.php?controller=data" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?=$nama?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="submit" value="cari">Cari</button></td>
		</tr>
	</table>
</form>
<hr>
