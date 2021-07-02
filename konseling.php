<h1><b>Data Konseling</b></h1>
<hr>

<table class="33" width="700"  border="0" cellpadding="2" cellspacing="1" >
  <tr>
    <td colspan="2"><a href="?page=konseling_tambah" target="_self"><img src="images/add.png"> Ajukan Konseling</a></td>
  </tr>

  <tr>
    <td colspan="2"><table class="daftar_tabel" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>ID Konseling</b></th>
        <th><b>ID Korban</b></th>
        <th><b>Tanggal</b> </th>
		<th><b>Total Konseling</b> </th>
		<th><b>Nama Korban</b></th>
        <th><b>Nama Konselor</b> </th>
		<th><b>Hasil Konseling</b> </th>
		<th><b>Opsi</b> </th>

      </tr>
	  </td>
      <?php
	$konselingSql = "SELECT * from konseling";
	$konselingQry = mysqli_query($koneksi, $konselingSql)  or die ("Query Konseling salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($konselingQry as $konselingRow) {
	$nomor++;

	?>
      <tr>
 
		<td><?php echo $konselingRow['id_konseling']; ?></td>
		<td><?php echo $konselingRow['id_korban']; ?></td>
		<td><?php echo $konselingRow['tanggal_konseling']; ?></td>
		<td><?php echo $konselingRow['jumlah_konseling']; ?></td>
		<td><?php echo $konselingRow['nama_korban']; ?></td>
		<td><?php echo $konselingRow['nama_konselor']; ?></td>
		<td><?php echo $konselingRow['hasil_konseling']; ?></td>
		
		 <td align="center"><a href="?page=konseling_hapus&amp;Kode=<?php echo $konselingRow['id_konseling']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a>
      <a href="?page=konseling_edit&amp;kode=<?php echo $konselingRow['id_konseling']; ?>" target="_self" ><img src="images/edit.png"></a>
     </td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
