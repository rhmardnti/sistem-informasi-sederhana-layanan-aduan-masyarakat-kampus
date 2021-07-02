<h1><b>Daftar Aduan</b></h1><hr>
<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=pengaduan_tambah"target="_self"><img src="images/add.png"> Tambah Aduan</a></td>
  </tr>

  <tr>
    <td colspan="2"><table width="100%" class="daftar_tabel" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <th><b>ID Aduan</b></th>
        <th><b>Tanggal</b></th>
        <th><b>Isi Aduan</b> </th>
		<th><b>Status</b> </th>
		<th><b>Opsi</b> </th>

      </tr>
	  </td>
      <?php
	$pengaduanSql = "SELECT * from pengaduan";
	$pengaduanQry = mysqli_query($koneksi, $pengaduanSql)  or die ("Query Aduan salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($pengaduanQry as $pengaduanRow) {
	$nomor++;

	?>
      <tr>
 
		<td><?php echo $pengaduanRow['id_aduan']; ?></td>
		<td><?php echo $pengaduanRow['tanggal']; ?></td>
		<td><?php echo $pengaduanRow['isi_aduan']; ?></td>
		<td><?php 
          if ($pengaduanRow['status_aduan']=='Diproses') {
            echo "<p style='color:red;'><b>Diproses<b></p>";
          } else {
            echo "<p class='btn btn-success btn-sm'>Selesai</p>";
          }
          ?></td>
		 <td align="center"><a href="?page=pengaduan_hapus&amp;Kode=<?php echo $pengaduanRow['id_aduan']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a><br>&nbsp;&nbsp;&nbsp;<a href="?page=pengaduan_edit&amp;kode=<?php echo $pengaduanRow['id_aduan']; ?>" target="_self" ><img src="images/edit.png"></a>
     </td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
