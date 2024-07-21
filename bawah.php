
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Tentang Kami</h4>
                    <p class="mb-4">Pendidikan Madrasah Siswa Islami, Berkulitas Global, Berkahlak Mulia</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i><?php echo"$k_k[alamat]";?></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i><?php echo"$k_k[alias]";?></p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i><?php echo"$k_k[tahun]";?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Link</h4>
                    <div class="d-flex flex-column justify-content-start">
                    <a href="index.php" class=""><i class="fas fa-angle-right me-2"></i> Beranda</a>
                            <a href="utama.php?aksi=tentang" class=""><i class="fas fa-angle-right me-2"></i> tentang kami</a>
                            <a href="utama.php?aksi=daftar" class=""><i class="fas fa-angle-right me-2"></i> daftar</a>
                            <a href="utama.php?aksi=hubungi" class=""><i class="fas fa-angle-right me-2"></i> Hubungi</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Jam Kantor</h4>
                    <div class="d-flex flex-column justify-content-start">
              
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Seni - Jum'at</h6>
                                <p class="text-white mb-0">08.00 am - 14.00 pm</p>
                            </div>
                       
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Berita Terbaru</h4>
                   
                    <?php  $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='informasi' ORDER BY id_berita DESC LIMIT 1");              
while ($t=mysqli_fetch_array($tebaru)){ ?>
                            <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">by admin</p>
                                <a href="utama.php?aksi=detailberita&id_berita=<?php echo"$t[id_berita]";?>" class="text-body"><?php echo"$t[judul]";?></a>
                            </div>
                            <?php } ?>
                </div> -->
            </div>
        </div>
    </div>
        