<?php 
$tanggal=date("Y");
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo"$k_k[nama]";?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="tema/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="tema/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="tema/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="tema/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i><?php echo"$k_k[tahun]";?></a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i><?php echo"$k_k[alias]";?></a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<?php include"menu.php"?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To <?php echo"$k_k[nama]";?></h5>
                    <h1 class="display-1 text-white mb-md-4">Pendidikan Madrasah Siswa Islami, Berkulitas Global, Berkahlak Mulia</h1>
                    <div class="pt-2">
                        <a href="index.php#syarat" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Persyaratan</a>
                        <a href="index.php#daftar" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div id="tentang" class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-60 rounded" src="tema/img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tentang Kami</h5>
                        <h1 class="display-4"><?php echo"$k_k[nama]";?></h1>
                    </div>
                    <p><?php echo"$k_k[isi]";?></p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    


    <!-- Pricing Plan Start -->
    <div id="syarat" class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Persyaratan</h5>
                <h1 class="display-4">Berkas Persyaratan</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
            <?php  $tebaru=mysqli_query($koneksi," SELECT * FROM berita where jenis='halaman' ORDER BY id_berita DESC  LIMIT 4");
                        while ($t=mysqli_fetch_array($tebaru)){ ?>  
               <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="foto/data/<?php echo"$t[gambar]";?>" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white"><?php echo"$t[judul]";?></h3>
                            
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p><?php echo"$t[isi]";?></p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <?php } ?>
 
            
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
<!-- Appointment Start -->
<div id="daftar" class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Persyaratan Umum:</h5>
                    </div>
                  <li class="text-white  border-5">Scan Upload Pas foto terbaru</li>
                    <li class="text-white   border-5">Scan Upload Surat Keterangan Lulus / Ijazah SD/MI</li>
                    <li class="text-white  border-5">Scan Upload Kartu Keluarga</li>
                    <li class="text-white  border-5">Scan Upload Akta Kelahiran</li>
                    <li class="text-white  border-5">Scan Upload Scan Rapor (Kelas 4 – 6)</li>
                <br>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-dark rounded-pill py-3 px-5 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Alur Pendaftaran
</button>
                </div>
                <?php
$i = date("Ymd");
$j = gmdate('H:i:s', time() + 60 * 60 * 7);
$sql = mysqli_query($koneksi, 'SELECT RIGHT(id_daftar, 3) AS id_daftar FROM daftar ORDER BY id_daftar DESC LIMIT 1') or die('Error : ' . mysqli_error($koneksi));
$num = mysqli_num_rows($sql);
if ($num <> 0) {
    $data = mysqli_fetch_array($sql);
    $kode = $data['id_daftar'] + 1;
} else {
    $kode = 1;
}
// Mulai bikin kode
$bikin_kode = str_pad($kode, 3, "0", STR_PAD_LEFT);
$kode_jadi = "$bikin_kode";
?>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Daftar</h1>
                        <form method='post' action='int.php?m=daftar'>
                        <input type="hidden"  name="no_daftar" value="<?php echo"MTSN2/$i/$kode_jadi/$j"; ?>" placeholder="Email">
                                    <input type="hidden"  name="id_daftar" value="<?php echo"$i"; ?>" placeholder="Email">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name='program' style="height: 55px;">
                                        <option selected>Pilih Jalur</option>
                                        <option value="Reguler">Reguler</option>
                                        <option value="Prestasi Akademik">Prestasi Akademik</option>
                                        <option value="Prestasi Non Akademik">Prestasi Non Akademik</option>
                                        <option value="Prestasi Tahfizh Al-Qur’an">Prestasi Tahfizh Al-Qur’an</option>
                                    </select>
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="nama" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="Password Login" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="no_hp" class="form-control bg-light border-0" placeholder="Nomor HP/WA" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                <textarea class="form-control bg-light border-0" placeholder="alamat Lengkap" name='alamat' id="message" style="height: 100px" required></textarea>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Daftar</button>
                                </div>
                                <div class="col-12 col-sm-6">
                                <button type="button" class="btn btn-primary w-100 py-3"  data-bs-toggle="modal" data-bs-target="#login">
  login
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alur Pendaftaran <?php echo"$k_k[nama]";?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php echo"$tt[isi]";?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal login-->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">login sistem <?php echo"$k_k[nama]";?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method='post' action='int.php?aksi=login'>
                    <div class='row g-3'>
            
                        <div class='col-sm-12'>
                            <div class='form-floating'>
                                <input type='email' class='form-control' name='email' id='mail' placeholder='Email Anda'>
                                <label for='mail'>Email Anda</label>
                            </div>
                        </div>
                        <div class='col-sm-12'>
                            <div class='form-floating'>
                                <input type='password' class='form-control' name='password' placeholder='Password Anda'>
                                <label for='mobile'>Password Anda</label>
                            </div>
                        </div>
            
                        <div class='col-6 text-center'>
                            <button class='btn btn-primary w-100 py-3' type='submit'>Login Now</button>
                        </div>
                       <div class='col-6 text-center'>
                            <a class='btn btn-primary w-100 py-3' href='utama.php?aksi=lupapassword'>Lupa Password</a>
                        </div>
                    </div>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include "bawah.php"; ?>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="tema/lib/easing/easing.min.js"></script>
    <script src="tema/lib/waypoints/waypoints.min.js"></script>
    <script src="tema/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="tema/lib/tempusdominus/js/moment.min.js"></script>
    <script src="tema/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="tema/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="tema/js/main.js"></script>
</body>

</html>

