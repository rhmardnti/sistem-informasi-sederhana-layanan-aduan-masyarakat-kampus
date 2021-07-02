<form method="POST">
<h2>Tambah Aduan</h2><hr>
	<table>
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="tanggal"></td>
		</tr>
		<tr>
			<td>Isi Aduan</td>
			<td><textarea name="isi_aduan"></textarea></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=pengaduan" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM pengaduan ORDER BY id_aduan DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_aduan	= '00'.($hasil['id_aduan'] + 1);
		$tanggal = date('Y-m-d');
		$isi_aduan	= $_POST['isi_aduan'];
		$status_aduan	= $_POST['status_aduan'];
        
		$query_simpan = $koneksi->prepare("INSERT INTO pengaduan (tanggal, isi_aduan) VALUES (?,?)");
		$query_simpan->bind_param('ssssss', $tanggal, $isi_aduan);
		$query_simpan->execute();
		$query_simpan->close();
		//print "<script>alert('Berhasil menambah Transaksi')
		//window.location = '?page=pengaduan';
		//</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>