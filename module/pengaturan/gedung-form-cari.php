<h2>Master Gedung</h2>
<hr>
Pencarian Gedung
<hr>
<form action="gedung.php?controller=data" method="post">
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