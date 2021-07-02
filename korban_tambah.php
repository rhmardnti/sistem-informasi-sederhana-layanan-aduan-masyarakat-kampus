<form method="POST">
<h2>Tambah Profile</h2><hr>
	<table>
		<tr>
			<td>No KTP</td>
			<td><input type="text" name="no_ktp"></td>
		</tr>
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
		<tr>
			<td>Usia</td>
			<td><input type="text" name="umur"></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=korban" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM korban ORDER BY id_korban DESC");
		$hasil = $cek_id->fetch_assoc();
		$no_ktp	= '00'.($hasil['no_ktp'] + 1);
		$nama	= $_POST['nama'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];
		$alamat	= $_POST['alamat'];
		$no_hp	= $_POST['no_hp'];
		$umur	= $_POST['umur'];
        
		$query_simpan = $koneksi->prepare("INSERT INTO korban (no_ktp, nama, jenis_kelamin, alamat, no_hp, umur) VALUES (?,?,?,?,?)");
		$query_simpan->bind_param('ssssss', $no_ktp, $nama, $jenis_kelamin, $alamat, $no_hp, $umur);
		$query_simpan->execute();
		$query_simpan->close();
		//print "<script>alert('Berhasil menambah Data')
		//window.location = '?page=korban';
		//</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>