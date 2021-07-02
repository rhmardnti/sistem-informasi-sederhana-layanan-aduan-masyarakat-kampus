
<h3>Edit data</h3>
<hr>
<?php 
include "koneksi.php";
$id_aduan = $_GET['kode'];
$query_mysqli = $koneksi->query("SELECT * FROM pengaduan WHERE id_aduan='$id_aduan'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post">		
		<table>
			<tr>
				<td>ID Aduan</td>
				<td><input type="text" name="id_aduan" value="<?php echo $data['id_aduan'] ?>"></td>					
			</tr>	
			
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>"></td>					
			</tr>
			<tr>
				<td>Isi Aduan</td>
				<td><input type="text" name="isi_aduan" value="<?php echo $data['isi_aduan'] ?>"></td>					
			</tr>
			<tr>
				<td>Status</td>
				<td><select name="status_aduan" >
							<option><?php echo $data['status_aduan'] ?></option>
							<option><?php if ($data['status_aduan']=='Diproses') {
								echo "Diproses";
							} else {
								echo "Selesai";
							}
							?>
							</option>
						</select></td>					
			</tr>			
				<tr>

					<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
		<a href="?page=pengaduan">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
		$id_aduan = $_POST['id_aduan'];
		$tanggal = $_POST['tanggal'];
		$isi_aduan = $_POST['isi_aduan'];
		$status_aduan = $_POST['status_aduan'];

		mysqli_query($koneksi, "UPDATE pengaduan SET id_aduan='$id_aduan', tanggal='$tanggal', isi_aduan='$isi_aduan', status_aduan='$status_aduan', WHERE id_aduan='$id_aduan'");

	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=pengaduan';
	</script>";
	}catch(Exception $e){	
		echo $e->getMessage();
	}
}
?>