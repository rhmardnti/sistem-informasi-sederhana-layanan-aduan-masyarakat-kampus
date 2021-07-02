<h3>Welcome!</h3><hr><p align="left">Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>. <br></p>
<img style="padding-left: 30%" src="images/tw.png">

                                                <!-- STAT -->
                                                <div class="row list-separated profile-stat">
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"> <?php 
$sql = "SELECT * FROM pengaduan";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?></div>
                                                        <div class="uppercase profile-stat-text"> Aduan </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"><?php 
$sql = "SELECT * FROM pelapor";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?></div>
                                                        <div class="uppercase profile-stat-text"> Data Pelapor </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"> <?php 
$sql = "SELECT * FROM kasus";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?> </div>
                                                        <div class="uppercase profile-stat-text"> Data Kasus </div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"><?php 
$sql = "SELECT * FROM korban";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?></div>
                                                        <div class="uppercase profile-stat-text"> Data Korban </div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"><?php 
$sql = "SELECT * FROM konseling";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?></div>
                                                        <div class="uppercase profile-stat-text"> Konseling </div>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"><?php 
$sql = "SELECT * FROM konselor";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?></div>
                                                        <div class="uppercase profile-stat-text"> Data Konselor </div>
                                                    </div>
                                                </div>
                                                <!-- END STAT -->