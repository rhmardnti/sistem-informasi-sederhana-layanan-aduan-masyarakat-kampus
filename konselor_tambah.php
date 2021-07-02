<form method="POST">
<h2>Tambah Profile</h2><hr>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text" name="jenis_kelamin"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><input type="text" name="no_hp"></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=konselor" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM konselor ORDER BY id_konselor DESC");
		$hasil = $cek_id->fetch_assoc();
		$nama	= $_POST['nama'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];
		$alamat	= $_POST['alamat'];
		$no_hp	= $_POST['no_hp'];
        
		$query_simpan = $koneksi->prepare("INSERT INTO konselor (nama, jenis_kelamin, alamat, no_hp) VALUES (?,?,?,?)");
		$query_simpan->bind_param('ssssss', $nama, $jenis_kelamin, $alamat, $no_hp);
		$query_simpan->execute();
		$query_simpan->close();
		//print "<script>alert('Berhasil menambah Data')
		//window.location = '?page=konselor';
		//</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>