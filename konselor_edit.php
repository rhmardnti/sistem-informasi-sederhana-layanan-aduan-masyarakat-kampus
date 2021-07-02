
<h3>Edit Profile</h3>
<hr>
<?php 
include "koneksi.php";
$id_konselor = $_GET['kode'];
$query_mysqli = $koneksi->query("SELECT * FROM konselor WHERE id_konselor='$id_konselor'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
?>
	<form  method="post">		
		<table>
			<tr>
				<td>ID Konselor</td>
				<td><input type="text" name="id_konselor" value="<?php echo $data['id_konselor'] ?>"></td>					
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

					<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
		<a href="?page=konselor">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
		$id_konselor = $_POST['id_konselor'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		
		mysqli_query($koneksi, "UPDATE konselor SET id_konselor='$id_konselor', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp' WHERE id_konselor='$id_konselor'");

	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=konselor';
	</script>";
	}catch(Exception $e){	
		echo $e->getMessage();
	}
}
?>