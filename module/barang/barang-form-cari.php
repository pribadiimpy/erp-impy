<h2>Master Barang</h2>
<hr>
Pencarian Barang
<hr>
<form action="<?=index($mid)?>&controller=data" method="post">
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
