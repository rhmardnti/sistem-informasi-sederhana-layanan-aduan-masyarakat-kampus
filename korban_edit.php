
<h3>Edit Profile</h3>
<hr>
<?php 
include "koneksi.php";
$id_korban = $_GET['kode'];
$query_mysqli = $koneksi->query("SELECT * FROM korban WHERE id_korban='$id_korban'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
?>
	<form  method="post">		
		<table>
			<tr>
				<td>User ID</td>
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
				<td>Usia</td>
				<td><input type="text" name="umur" value="<?php echo $data['umur'] ?>"></td>				
			</tr>	
				<tr>

					<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
		<a href="?page=korban">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
		$id_korban = $_POST['id_korban'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$usia = $_POST['umur'];

		mysqli_query($koneksi, "UPDATE korban SET id_korban='$id_korban', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', usia='$usia' WHERE id_korban='$id_korban'");

	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=korban';
	</script>";
	}catch(Exception $e){	
		echo $e->getMessage();
	}
}
?>