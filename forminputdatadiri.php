<body>
	
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>

<div id="divWrapper">
<div id="divHeader"> Formulir Pembelian Acsesoris </div>
<div id="divLine"></div>
<div id="divLinks">
<div id="divNav">
<ul>
	<li><a href="forminputdatadiri.php">Form Pengisian Data Diri</a></li>
</ul>
</div>
</div>
	
<div id="divKontenTabel">
<?php
	include "Koneksi.php";
?>
<form name="forminputdatadiri" method="post" action="prosesinputdatadiri.php">
<table>
	<tr>
		<td> Nama Lengkap </td>
		<td> :</td>
		<td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required></td>
	</tr>
	<tr>
		<td> Alamat </td>
		<td> :</td>
		<td><textarea name="alamat" placeholder="Alamat" required></textarea></td>
	</tr>
	<tr>
		<td> Nama Produk</td>
		<td> :</td>
		<td><input type="text" name="nama_produk" placeholder="Nama Produk" required></td>
		</td>
	</tr>
	<tr>
		<td> Jumlah Produk </td>
		<td> :</td>
		<td><input type="number" name="jumlah_produk" min="1" max="10" required></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="3"><input type="submit" value="Buy" name="submit"></td>
	</tr>
</table>
</form>
<br>
</table>
</div>
</body>
<div id="divLine"></div>
<div id="divFooter"> AlsyaCollection </div>