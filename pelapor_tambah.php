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
			<td>Status Pelapor</td>
			<td><input type="text" name="status_pelapor"></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=pelapor" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM pelapor ORDER BY id_pelapor DESC");
		$hasil = $cek_id->fetch_assoc();
		$no_ktp	= '00'.($hasil['no_ktp'] + 1);
		$nama	= $_POST['nama'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];
		$alamat	= $_POST['alamat'];
		$no_hp	= $_POST['no_hp'];
		$status_pelapor	= $_POST['status_pelapor'];
        
		$query_simpan = $koneksi->prepare("INSERT INTO pelapor (no_ktp, nama, jenis_kelamin, alamat, no_hp, status_pelapor) VALUES (?,?,?,?,?)");
		$query_simpan->bind_param('ssssss', $no_ktp, $nama, $jenis_kelamin, $alamat, $no_hp, $status_pelapor);
		$query_simpan->execute();
		$query_simpan->close();
		//print "<script>alert('Berhasil menambah Data')
		//window.location = '?page=pelapor';
		//</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>