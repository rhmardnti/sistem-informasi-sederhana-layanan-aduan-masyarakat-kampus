
<h3>Edit Profile</h3>
<hr>
<?php 
include "koneksi.php";
$id_pelapor = $_GET['kode'];
$query_mysqli = $koneksi->query("SELECT * FROM pelapor WHERE id_pelapor='$id_pelapor'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
?>
	<form  method="post">		
		<table>
			<tr>
				<td>ID Pelapor</td>
				<td><input type="text" name="id_pelapor" value="<?php echo $data['id_pelapor'] ?>"></td>					
			</tr>	
			<tr>
				<td>No KTP</td>
				<td><input type="text" name="no_ktp" value="<?php echo $data['no_ktp'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"></td>				
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>				
			</tr>	
			<tr>
				<td>No HP</td>
				<td><input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>				
			</tr>	
			<tr>
				<td>Status Pelapor</td>
				<td><input type="text" name="status_pelapor" value="<?php echo $data['status_pelapor'] ?>"></td>				
			</tr>	
				<tr>

					<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
		<a href="?page=pelapor">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
		$id_pelapor = $_POST['id_pelapor'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$status_pelapor = $_POST['status_pelapor'];

		mysqli_query($koneksi, "UPDATE pelapor SET id_pelapor='$id_pelapor', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', status_pelapor='$status_pelapor' WHERE id_pelapor='$id_pelapor'");

	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=pelapor';
	</script>";
	}catch(Exception $e){	
		echo $e->getMessage();
	}
}
?>