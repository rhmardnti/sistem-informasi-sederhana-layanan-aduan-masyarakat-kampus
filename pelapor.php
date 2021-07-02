<h1><b>Daftar Pelapor</b></h1><hr>
<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=pelapor_tambah"  target="_self"><img src="images/add.png">Tambah Pelapor</a></td>
  </tr>

  <tr>
    <td colspan="2"><table width="100%" border="0" class="daftar_tabel" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>User ID</b></th>
        <th><b>ID Aduan</b></th>
        <th><b>No KTP</b></th>
        <th><b>Nama</b> </th>
        <th><b>Jenis Kelamin</b> </th>
		<th><b>Alamat</b> </th>
		<th><b>No Hp</b> </th>
		<th><b>Status Pelapor</b></th>
		<th><b>Opsi</b></th>


      </tr>
    </td>
    <?php
	$pelaporSql = "SELECT * from pelapor";
	$pelaporQry = mysqli_query($koneksi, $pelaporSql)  or die ("Query Pelapor salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($pelaporQry as $pelaporRow) {
	$nomor++;
 
     ?>
     <tr>
		<td><?php echo $pelaporRow['id_pelapor']; ?></td>
        <td><?php echo $pelaporRow['id_pengaduan']; ?></td>
		<td><?php echo $pelaporRow['no_ktp']; ?></td>
        <td><?php echo $pelaporRow['nama']; ?></td>
		<td><?php echo $pelaporRow['jenis_kelamin']; ?></td>
        <td><?php echo $pelaporRow['alamat']; ?></td> 
		<td><?php echo $pelaporRow['no_hp']; ?></td>
        <td><?php echo $pelaporRow['status_pelapor']; ?></td> 

      </td>
    <td align="center"><a href="?page=pelapor_hapus&amp;Kode=<?php echo $pelaporRow['id_pelapor']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a><br>&nbsp;&nbsp;&nbsp;<a href="?page=pelapor_edit&amp;kode=<?php echo $pelaporRow['id_pelapor']; ?>" target="_self" ><img src="images/edit.png"></a>
    </td>
    </tr>
  <?php } ?>
</table></td>
</tr>
<tr>

</td>
</tr>
</table>
