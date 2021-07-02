<h1><b>Data Kasus Ditangani</b></h1>
<hr>

<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=kasus_tambah" target="_self"><img src="images/add.png">Tambah Kasus</a></td>
  </tr>
  
  <tr>
    <td colspan="2"><table class="daftar_tabel" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>ID Kasus</b></th>
		<th><b>Tanggal Pengaduan</b></th>
        <th><b>ID Korban</b></th>
        <th><b>Nama Korban</b> </th>
		<th><b>Jenis Kasus</b> </th>
		<th><b>Kebutuhan Kasus</b> </th>
		<th><b>Tanggal Selesai</b> </th>
		<th><b>Edit</b> </th>

      </tr>
	  </td>
      <?php
	$kasusSql = "SELECT * from kasus";
	$barangQry = mysqli_query($koneksi, $kasusSql)  or die ("Query barang salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($barangQry as $kasusRow) {
	$nomor++;
	$Kode = $kasusRow['id_kasus'];
	?>
      <tr>
        <td><?php echo $Kode; ?></td>
		<td><?php echo $kasusRow['tanggal_pengaduan']; ?></td>
        <td><?php echo $kasusRow['id_korban']; ?></td>
		<td><?php echo $kasusRow['nama']; ?></td>
        <td><?php echo $kasusRow['jenis_kasus']; ?></td>
		<td><?php echo $kasusRow['kebutuhan_kasus']; ?></td>
        <td><?php echo $kasusRow['tanggal_selesai']; ?></td> 
	

		</td>
		 <td align="center"><a href="?page=kasus_hapus&amp;Kode=<?php echo $Kode ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a>
      <a href="?page=kasus_edit&amp;kode=<?php echo $Kode ?>" target="_self" alt="Edit Data" ><img src="images/edit.png"></a></td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
