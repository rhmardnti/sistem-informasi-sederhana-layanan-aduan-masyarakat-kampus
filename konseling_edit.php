
	<h3>Edit Data</h3>
	<hr>
	<?php 
	include "koneksi.php";
	$id_konseling = $_GET['kode'];
	$query_mysqli = $koneksi->query("SELECT * FROM konseling WHERE id_konseling='$id_konseling'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post">		
		<table>
			<tr>
				<td>ID Konseling</td>
				<td><input type="text" name="id_konseling" value="<?php echo $data['id_konseling'] ?>"></td>				
			</tr>	
			<tr>
				<td>ID Korban</td>
				<td><input type="text" name="id_korban" value="<?php echo $data['id_korban'] ?>"></td>								
			</tr>	
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal_konseling" value="<?php echo $data['tanggal_konseling'] ?>"></td>					
			</tr>
			<tr>
				<td>Total Konseling</td>
				<td><input type="text" name="jumlah_konseling" value="<?php echo $data['jumlah_konseling'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama Korban</td>
				<td><input type="text" name="nama_korban" value="<?php echo $data['nama_korban'] ?>"></td>								
			</tr>	
			<tr>
				<td>Nama Konselor</td>
				<td><input type="text" name="nama_konselor" value="<?php echo $data['nama_konselor'] ?>"></td>					
			</tr>
			<tr>
				<td>Hasil Konseling</td>
				<td><input type="textppp" name="hasil_konseling" value="<?php echo $data['hasil_konseling'] ?>"></td>					
			</tr>
			<tr>
			
				<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<a href="?page=konseling">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
$id_konseling = $_POST['id_konseling'];
$id_korban = $_POST['id_korban'];
$tanggal = $_POST['tanggal'];
$jumlah_konseling = $_POST['jumlah_konseling'];
$nama_korban = $_POST['nama_korban'];
$nama_konselor = $_POST['nama_konselor'];
$hasil_konseling = $_POST['hasil_konseling'];
 
mysqli_query($koneksi, "UPDATE konseling SET id_konseling='$id_konseling', id_korban='$id_korban', tanggal='$tanggal', jumlah_konseling='$jumlah_konseling', nama_korban='$nama_korban', nama_konselor='$nama_konselor', hasil_konseling='$hasil_konseling' WHERE id_konseling='$id_konseling'");
 
	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=konseling';
	</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>