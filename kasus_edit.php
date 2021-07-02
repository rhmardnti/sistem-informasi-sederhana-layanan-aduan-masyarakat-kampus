
	<h3>Edit data</h3>
	<hr>
	<?php 
	include "koneksi.php";
	$id_kasus = $_GET['kode'];
	$query_mysqli = $koneksi->query("SELECT * FROM kasus WHERE id_kasus='$id_kasus'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post">		
		<table>
			<tr>
				<td>Tanggal Aduan</td>
				<td>
					<input type="date" name="tanggal_pengaduan" value="<?php echo $data['tanggal_pengaduan'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>	
			<tr>
				<td>Jenis_Kasus</td>
				<td><input type="text" name="jenis_kasus" value="<?php echo $data['jenis_kasus'] ?>"></td>					
			</tr>
			<tr>
				<td>Kebutuhan_Kasus</td>
				<td><input type="text" name="kebutuhan_kasus" value="<?php echo $data['kebutuhan_kasus'] ?>"></td>					
			</tr>	

			<tr>
			
				<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<a href="?page=kasus">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
$tanggal_pengaduan = $_POST['tanggal_pengaduan'];
$nama = $_POST['nama'];
$jenis_kasus = $_POST['jenis_kasus'];
$kebutuhan_kasus = $_POST['kebutuhan_kasus'];

 
mysqli_query($koneksi, "UPDATE kasus SET tanggal_pengaduan='$tanggal_pengaduan', nama='$nama', jenis_kasus='$jenis_kasus', kebutuhan_kasus='$kebutuhan_kasus' WHERE id_kasus='$id_kasus'");
 
	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=kasus';
	</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>