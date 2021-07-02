<form method="POST">
<h2>Tambah Kasus</h2><hr>
	<table>
		<tr>
			<td>Tanggal Aduan:</td>
			<td><input type="text" name="tanggal_pengaduan"></td>
		</tr>
		<tr>
			<td>Nama:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jenis Kasus:</td>
			<td><input type="text" name="jenis_kasus"></td>
		</tr>
		<tr>
			<td>Kebutuhan Kasus:</td>
			<td><input type="text" name="kebutuhan_kasus"></td>
		</tr>
		<tr>
			<td>Tanggal Selesai:</td>
			<td><input type="date" name="tanggal_selesai"></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=kasus" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM kasus ORDER BY id_kasus DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_kasus	= '00'.($hasil['id_kasus'] + 1);
		$tanggal_aduan 	= $_POST['tanggal_pengaduan'];
		$nama 			= $_POST['nama'];
		$jenis_kasus 	= $_POST['jenis_kasus'];
		$kebutuhan_kasus= $_POST['kebutuhan_kasus'];
		$tanggal_selesai= $_POST['tanggal_selesai'];
			
		$query_simpan = $koneksi->prepare("INSERT INTO kasus (tanggal_pengaduan, nama, jenis_kasus, kebutuhan_kasus, tanggal_selesai) VALUES (?,?,?,?,?)");
		$query_simpan->bind_param('ssss', $tanggal_pengaduan, $nama, $jenis_kasus, $kebutuhan_kasus, $tanggal_selesai);
		$query_simpan->execute();
		$query_simpan->close();
		print "<script>alert('Berhasil menambah kasus')
		window.location = '?page=kasus';
		</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>