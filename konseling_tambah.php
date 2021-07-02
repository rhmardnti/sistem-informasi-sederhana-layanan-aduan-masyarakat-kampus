<form method="POST">

<h2>Ajukan Konseling</h2><hr>
	<table>
		<tr>
			<td>ID Korban</td>
			<td><input type="text" name="id_korban"></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="tanggal_konseling"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama_korban"></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=konseling" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM konseling ORDER BY id_konseling DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_korban	= '00'.($hasil['id_korban'] + 1);
		$tanggal           = date('Y-m-d');
		$nama_korban 	= $_POST['nama_korban'];
        
		$query_simpan = $koneksi->prepare("INSERT INTO konseling (id_korban, tanggal, nama_korban) VALUES (?,?,?)");
		$query_simpan->bind_param('sssss', $id_korban, $tanggal, $nama_korban);
		$query_simpan->execute();
		$query_simpan->close();

		//print "<script>alert('Berhasil mengajukan konseling')
		//window.location = '?page=konseling';
		//</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>