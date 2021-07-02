<h1><b>Daftar Konselor</b></h1><hr>
<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=konselor_tambah"  target="_self"><img src="images/add.png">Tambah Data</a></td>
  </tr>

  <tr>
    <td colspan="2"><table width="100%" border="0" class="daftar_tabel" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>ID</b></th>
        <th><b>Nama</b> </th>
        <th><b>Jenis Kelamin</b> </th>
		<th><b>Alamat</b> </th>
		<th><b>No Hp</b> </th>
		<th><b>Opsi</b></th>

      </tr>
    </td>
    <?php
	$konselorSql = "SELECT * from konselor";
	$konselorQry = mysqli_query($koneksi, $konselorSql)  or die ("Query konselor salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($konselorQry as $konselorRow) {
	$nomor++;
 
     ?>
     <tr>
		<td><?php echo $konselorRow['id_konselor']; ?></td>
        <td><?php echo $konselorRow['nama']; ?></td>
		<td><?php echo $konselorRow['jenis_kelamin']; ?></td>
        <td><?php echo $konselorRow['alamat']; ?></td> 
		<td><?php echo $konselorRow['no_hp']; ?></td>
        
      </td>
    <td align="center"><a href="?page=konselor_hapus&amp;Kode=<?php echo $konselorRow['id_konselor']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a><br>&nbsp;&nbsp;&nbsp;<a href="?page=konselor_edit&amp;kode=<?php echo $konselorRow['id_konselor']; ?>" target="_self" ><img src="images/edit.png"></a>
    </td>
    </tr>
  <?php } ?>
</table></td>
</tr>
<tr>

</td>
</tr>
</table>
