<h1><b>Daftar Korban</b></h1><hr>
<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=korban_tambah"  target="_self"><img src="images/add.png">Tambah Profile</a></td>
  </tr>

  <tr>
    <td colspan="2"><table width="100%" border="0" class="daftar_tabel" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>ID Korban</b></th>
        <th><b>No KTP</b></th>
        <th><b>Nama</b> </th>
        <th><b>Jenis Kelamin</b> </th>
		<th><b>Alamat</b> </th>
		<th><b>No Hp</b> </th>
		<th><b>Usia</b></th>
		<th><b>Opsi</b></th>


      </tr>
    </td>
    <?php
	$korbanSql = "SELECT * from korban";
	$korbanQry = mysqli_query($koneksi, $korbanSql)  or die ("Query Korban salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($korbanQry as $korbanRow) {
	$nomor++;
 
     ?>
     <tr>
		<td><?php echo $korbanRow['id_korban']; ?></td>
		<td><?php echo $korbanRow['no_ktp']; ?></td>
        <td><?php echo $korbanRow['nama']; ?></td>
		<td><?php echo $korbanRow['jenis_kelamin']; ?></td>
        <td><?php echo $korbanRow['alamat']; ?></td>
		<td><?php echo $korbanRow['no_hp']; ?></td>		
		<td><?php echo $korbanRow['umur']; ?></td>

      </td>
    <td align="center"><a href="?page=korban_hapus&amp;Kode=<?php echo $korbanRow['id_korban']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a><br>&nbsp;&nbsp;&nbsp;<a href="?page=korban_edit&amp;kode=<?php echo $korbanRow['id_korban']; ?>" target="_self" ><img src="images/edit.png"></a>
    </td>
    </tr>
  <?php } ?>
</table></td>
</tr>
<tr>

</td>
</tr>
</table>
