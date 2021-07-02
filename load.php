<?php
if($_GET){
	switch ($_GET['page']) {
		case '':
			if(!file_exists("main.php")) die ("Empty Main Page!");
			include "Main.php";
			break;
		case 'HalamanUtama':
			if(!file_exists("main.php")) die ("Sorry Empty Page!");
			include "Main.php";
			break;
		case 'home':
			if(!file_exists("home.php")) die ("Sorry Empty Page!");
			include "home.php";
			break;
		case 'Logout':
			if(!file_exists("logout.php")) die ("Sorry Empty Page!");
			include "logout.php";
			break;
		case 'kasus':
			if(!file_exists("kasus.php")) die ("Sorry Empty Page!");
			include "kasus.php";
			break;
		case 'pengaduan':
			if(!file_exists("pengaduan.php")) die ("Sorry Empty Page!");
			include "pengaduan.php";
			break;
		case 'pengaduan_tambah':
			if(!file_exists("pengaduan_tambah.php")) die ("Sorry Empty Page!");
			include "pengaduan_tambah.php";
			break;
		case 'pengaduan_hapus':
			if(!file_exists("pengaduan_hapus.php")) die ("Sorry Empty Page!");
			include "pengaduan_hapus.php";
			break;
		case 'kasus_tambah':
			if(!file_exists("kasus_tambah.php")) die ("Sorry Empty Page!");
			include "kasus_tambah.php";
			break;
		case 'konseling_hapus':
			if(!file_exists("konseling_hapus.php")) die ("Sorry Empty Page!");
			include "konseling_hapus.php";
			break;	
		case 'konseling_tambah':
			if(!file_exists("konseling_tambah.php")) die ("Sorry Empty Page!");
			include "konseling_tambah.php";
			break;	
		case 'kasus_hapus':
			if(!file_exists("kasus_hapus.php")) die ("Sorry Empty Page!");
			include "kasus_hapus.php";
			break;
		case 'pelapor':
			if(!file_exists("pelapor.php")) die ("Sorry Empty Page!");
			include "pelapor.php";
			break;
		case 'pelapor_tambah':
			if(!file_exists("pelapor_tambah.php")) die ("Sorry Empty Page!");
			include "pelapor_tambah.php";
			break;
		case 'pelapor_hapus':
			if(!file_exists("pelapor_hapus.php")) die ("Sorry Empty Page!");
			include "pelapor_hapus.php";
			break;
		case 'konseling':
			if(!file_exists("konseling.php")) die ("Sorry Empty Page!");
			include "konseling.php";
			break;
		case 'konseling_edit':
			if(!file_exists("konseling_edit.php")) die ("Sorry Empty Page!");
			include "konseling_edit.php";
			break;
		case 'pengaduan_edit':
			if(!file_exists("pengaduan_edit.php")) die ("Sorry Empty Page!");
			include "pengaduan_edit.php";
			break;
		case 'kasus_edit':
			if(!file_exists("kasus_edit.php")) die ("Sorry Empty Page!");
			include "kasus_edit.php";		
			break;
		case 'pelapor_edit':
			if(!file_exists("pelapor_edit.php")) die ("Sorry Empty Page!");
			include "pelapor_edit.php";
			break;
		case 'korban':
			if(!file_exists("korban.php")) die ("Sorry Empty Page!");
			include "korban.php";
			break;
		case 'korban_edit':
			if(!file_exists("korban_edit.php")) die ("Sorry Empty Page!");
			include "korban_edit.php";
			break;
		case 'korban_tambah':
			if(!file_exists("korban_tambah.php")) die ("Sorry Empty Page!");
			include "korban_tambah.php";
			break;
		case 'konselor':
			if(!file_exists("konselor.php")) die ("Sorry Empty Page!");
			include "konselor.php";
			break;
		case 'konselor_tambah':
			if(!file_exists("konselor_tambah.php")) die ("Sorry Empty Page!");
			include "konselor_tambah.php";
			break;
		case 'konselor_hapus':
			if(!file_exists("konselor_hapus.php")) die ("Sorry Empty Page!");
			include "konselor_hapus.php";
			break;
		case 'konselor_edit':
			if(!file_exists("konselor_edit.php")) die ("Sorry Empty Page!");
			include "konselor_edit.php";
			break;
		
			
		default:
			if(!file_exists("main.php")) die ("Empty Page!");
			include "main.php";
			break;
	}
}
?>