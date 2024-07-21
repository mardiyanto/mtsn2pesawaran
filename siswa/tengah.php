<?php
///////////////////////////lihat/////////////////////////////////////////////
if($_GET['aksi']=='home'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM daftar WHERE id_daftar=$_SESSION[id_daftar] ");
    $t=mysqli_fetch_array($tebaru);
echo" 
<section class='content'>
<div class='row'>
  <div class='col-md-3'>

    <!-- Profile Image -->
    <div class='box box-primary'>
      <div class='box-body box-profile'>
        <img class='profile-user-img img-responsive img-circle' src='../uploads/foto/$t[foto]' alt='User profile picture'>
        <h3 class='profile-username text-center'>$t[nama_pegawai]</h3>
        <p class='text-muted text-center'>$t[jabatan_pegawai]</p>

        <ul class='list-group list-group-unbordered'>
          <li class='list-group-item'>
            <b>Nama Lengkap</b> <a class='pull-right'>$t[nama]</a>
          </li>
          <li class='list-group-item'>
            <b>Jenis Kelamin</b> <a class='pull-right'>$t[jenis_kelamin]</a>
          </li>
          <li class='list-group-item'>
            <b>No HP</b> <a class='pull-right'>$t[no_hp]</a>
          </li>
        </ul>"; if($t['status_data'] == 'proses') {
            echo"<a href='' class='btn btn-warning btn-block'><b>DATA BELUM LENGKAP</b></a>";
        } elseif($t['status_data'] == 'update') {
        echo"<a href='index.php?aksi=uploadbukti' class='btn btn-warning btn-block'><b>UPLOAD DOKUMEN</b></a>";
        }
        else {
            echo"<a class='btn btn-success btn-block'><b>DATA LENGKAP</b></a>";   
        }
        echo"</div><!-- /.box-body -->
    </div><!-- /.box -->

    <!-- About Me Box -->
    <div class='box box-primary'>
      <div class='box-header with-border'>
        <h3 class='box-title'>About Me</h3>
      </div><!-- /.box-header -->
      <div class='box-body'>
        <strong><i class='fa fa-map-marker margin-r-5'></i>  alamat</strong>
        <p class='text-muted'>
        $t[alamat]
        </p>

        <hr>
        <strong><i class='fa fa-pencil margin-r-5'></i> Data</strong>
        <p>
          <span class='label label-danger'> $t[email]</span>
          <span class='label label-success'> $t[nik]</span>
          <span class='label label-info'>$t[show_pass]</span>
          <span class='label label-warning'>tes</span>
        </p>

        <hr>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
  <div class='col-md-9'>
    <div class='nav-tabs-custom'>
      <ul class='nav nav-tabs'>
        <li class='active'><a href='#activity' data-toggle='tab'>Lengkapi Data</a></li>
      </ul>
      <div class='tab-content'>

        <div class='active tab-pane' id='activity'>
         <div class='row'>
                   
         <form method='post' action='input.php?aksi=inputbiodata&id_daftar=$t[id_daftar]'  enctype='multipart/form-data'>
         <div class='col-md-6'><h6 >A.Detail Pendaftar </h6>
                                        <label for='name'>Nama</label>
                                        <input type='text' class='form-control'  value='$t[nama]' ><br>
                                        <label >Jalur Pendaftaran</label>
                                        <select class='form-control select2' style='width: 100%;' name='program'>
                                            <option value='$t[program]'>$t[program]</option>
                                            <option value='Salafi'>Salafi</option>
                                            <option value='Tahfidzul Qur'an'>Tahfidzul Qur'an</option>
                                        </select></br>
                                        <label >Jenis Kelamin</label>
                                        <select class='form-control select2' style='width: 100%;' name='jenis_kelamin' required>
                                            <option value='$t[jenis_kelamin]'>$t[jenis_kelamin]</option>
                                            <option value='laki-laki'>Laki-Laki</option>
                                            <option value='perempuan'>Perempuan</option>
                                        </select><br>
                                        <label >Warga Negara</label>
                                         <select class='form-control select2' style='width: 100%;' name='warga_siswa' required>
                                             <option value='$t[warga_siswa]'>$t[warga_siswa]</option>
                                             <option value='WNI'>Warga Negara Indonesia</option>
                                             <option value='WNA'>Warga Negara Asing</option>
                                         </select><br>
                                         <label for='email'>NIK</label>
                                         <input type='number' class='form-control'  name='nik' placeholder='NIK' value='$t[nik]' required><br>
                                         <label for='email'>NISN</label>
                                         <input type='number' class='form-control'  name='nisn' placeholder='NISN' value='$t[nisn]' required><br>
                                         <label for='name'>Nomor WA/HP</label>
                                         <input type='number' class='form-control' name='no_hp' value='$t[no_hp]' placeholder='Nomor WA/HP' required><br>
                                         <label for='email'>Tempat Lahir</label>
                                         <input type='text' class='form-control' name='tempat_lahir' value='$t[tempat_lahir]' placeholder='Tempat Lahir' required><br>
                                        <label for='email'>Tanggal Lahir</label>
                                        <input type='date' class='form-control'  name='tgl_lahir' value='$t[tgl_lahir]' placeholder='Tanggal Lahir' required><br>
                                        <label for='email'>Asal Sekolah</label>
                                        <input type='text' class='form-control'  name='asal_sekolah' value='$t[asal_sekolah]' placeholder='asal sekolah' required><br>
       </div>
       <div class='col-md-6'>
       <h6 >B.Detail alamat Pendaftar </h6>
       <div class='row g-3'>
           
           <div class='col-md-6'>
              
               <label for='email'>Desa</label>
                   <input type='text' class='form-control'  name='desa' value='$t[desa]' placeholder='Desa' required>

           </div>
           <div class='col-md-6'>
               
               <label for='email'>RT</label>
                   <input type='text' class='form-control'  name='rt' value='$t[rt]' placeholder='RT' required>

           </div>
           <div class='col-md-6'>
               <div class='form-floating'>
               <label for='email'>RW</label>
                   <input type='text' class='form-control'  name='rw' value='$t[rw]' placeholder='RW' required>
                   
               </div>
           </div>
           <div class='col-md-6'>
               <div class='form-floating'>
               <label for='email'>Kecamatan</label>
                   <input type='text' class='form-control'  name='kecamatan' value='$t[kecamatan]' placeholder='Kecamatan' required>
                   
               </div>
           </div>
           <div class='col-md-6'>
               <div class='form-floating'>
               <label for='email'>Kabupaten/Kota</label>
                   <input type='text' class='form-control'  name='kota' value='$t[kota]' placeholder='Kabupaten/Kota' required>
                   
               </div>
           </div>
           <div class='col-md-6'>
               <div class='form-floating'>
               <label for='email'>Provinsi</label>
                   <input type='text' class='form-control'  name='provinsi' value='$t[provinsi]' placeholder='Provinsi' required>
                   
               </div>
           </div>
           <div class='col-md-6'>
               <div class='form-floating'>
               <label for='email'>Kode Pos</label>
                   <input type='text' class='form-control'  name='kode_pos' value='$t[kode_pos]' placeholder='Kode Pos' required>
                   
               </div>
           </div>
           <div class='col-md-6'>
               <div class='form-floating'>
               <label for='subject'>Pas Foto 3x4</label>
                   <input type='file' class='form-control' name='foto'>
                   
               </div>
           </div>
           <div class='col-md-12'>
               <div class='form-floating'>
               <label for='message'>Alamat Lengkap</label>
                   <textarea class='form-control' placeholder='Leave a message here' name='alamat' style='height: 150px' required>$t[alamat]</textarea><br>
                   
               </div>
           </div>
           <h6 >C.Detail Orang Tua Pendaftar </h6>
           <div class='col-md-6'>
                                    <div class='form-floating'>
                                    <label for='name'>Nama Ayah</label>
                                        <input type='text' class='form-control' name='nama_ayah' value='$t[nama_ayah]' placeholder='Nama Ayah' required>
                                        
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'>
                                    <label for='email'>Nama Ibu</label>
                                        <input type='text' class='form-control' name='nama_ibu' value='$t[nama_ibu]' placeholder='Nama Ibu' required>
                                        
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'><label for='subject'>Pendidikan Ayah</label>
                                        <input type='text' class='form-control' name='pendidikan_ayah' value='$t[pendidikan_ayah]' placeholder='Pendidikan Ayah' required>
                                        
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'><label for='subject'>Pendidikan Ibu</label>
                                        <input type='text' class='form-control' name='pendidikan_ibu' value='$t[pendidikan_ibu]' placeholder='Pendidikan Ibu' required>
                                        
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'><label for='subject'>Pekerjaan Ayah</label>
                                        <input type='text' class='form-control' name='pekerjaan_ayah' value='$t[pekerjaan_ayah]' placeholder='Pekerjaan Ayah' required>
                                        
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'><label for='subject'>Pekerjaan Ibu</label>
                                        <input type='text' class='form-control' name='pekerjaan_ibu' value='$t[pekerjaan_ibu]' placeholder='Pekerjaan Ibu' required>
                                        
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'><label for='subject'>Penghasilan Ayah</label>
                                        <input type='text' class='form-control' name='penghasilan_ayah' value='$t[penghasilan_ayah]' placeholder='Penghasilan Ayah' required>
                                        
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'> <label for='subject'>Penghasilan Ibu</label>
                                        <input type='text' class='form-control' name='penghasilan_ibu' value='$t[penghasilan_ibu]' placeholder='Penghasilan Ibu' required>
                                       
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'> <label for='subject'>HP/WA Ayah</label>
                                        <input type='number' class='form-control' name='no_hp_ayah' value='$t[no_hp_ayah]' placeholder='HP/WA Ayah' required>
                                       
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-floating'><label for='subject'>HP/WA Ibu</label>
                                        <input type='number' class='form-control' name='no_hp_ibu' value='$t[no_hp_ibu]' placeholder='HP/WA' required><br>
                                        
                                    </div>
                                </div>
                           
                                
                                <div class='col-12'>
                                    <button class='btn btn-primary w-100 py-3' type='submit'>SIMPAN</button>
                                </div>
       </div>
       
      </div>
      </form>
         </div>
        </div><!-- /.tab-pane -->

      </div><!-- /.tab-content -->

    </div><!-- /.nav-tabs-custom -->
  </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->


";
}
elseif($_GET['aksi']=='ikon'){
include "../ikon.php";
}

elseif($_GET['aksi']=='pegawai'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM daftar WHERE id_daftar=$_SESSION[id_daftar]");
    $t=mysqli_fetch_array($tebaru);
    echo"<div class='row'>
                    <div class='col-lg-12'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>INFORMASI 
                            </div>
                            <div class='panel-body'>	
                            <!-- Pricing Start -->
                            <div class='container-xxl py-5'>
                                        <div class='container px-lg-5'>
                                        <div class='text-center wow fadeInUp' data-wow-delay='0.1s'>
                                            <h6 class='section-title bg-white text-center text-primary px-3'>Biodata $t[nama] dengan nomor daftar $t[no_daftar] </h6>
                                            <h1 class='mb-5'>Biodata $t[nama] </h1>
                                        </div>
                                            <div class='row gy-5 gx-4'>
                                                <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.2s'>
                                                    <div class='position-relative shadow rounded border-top border-5 border-primary'>
                                                    
                                                        <div class='text-center border-bottom p-4 pt-5'>
                                                            <h4 class='fw-bold'>BIODATA</h4>
                                                            <p class='mb-0'>$t[nama]</p>
                                                        </div>
                                                          
                                                        
                                                        <div class='p-4'>
                                                        <img src='../uploads/foto/$t[foto]' width='321'   border='1'>
                                                        </div>
                                                        
                                                        <!-- <div class='text-center border-bottom p-4'>
                                                            <p class='text-primary mb-1'><strong>Biaya Kuliah Belum Termasuk: </strong></p>
                                                        </div>
                                                        <div class='p-4'>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Biaya Kunjungan Industri 1 X</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Biaya Kuliah Kerja Nyata 1 X</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Biaya Kuliah Kerja Praktik 1 X</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Biaya Jurnal 1 X</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Biaya Skripsi/Tugas Akhir 1 X</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Biaya Yudisium 1 X</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Biaya Wisuda 1 X</p>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.4s'>
                                                 <div class='position-relative shadow rounded border-top border-5 border-secondary'>
                                                     
                                                        <div class='text-center border-bottom p-4 pt-5'>
                                                            <h4 class='fw-bold'>DETAIL DATA :</h4>
                                                            <p class='mb-0'>$t[nama]</p>
                                                        </div>
                                                        <div class='p-4'>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Nama Lengkap : $t[nama]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>NIK : $t[nik]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>NISN : $t[nisn]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>WA/HP : $t[no_hp]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Nomor : $t[no_daftar]</p>
                                                      
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Program : $t[program]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>password : $t[show_pass]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Email : $t[email]</p>
                                                          
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Tempat Lahir : $t[tempat_lahir]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Tanggal Lahir : $t[tgl_lahir]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Jenis Kelamin : $t[jenis_kelamin]</p>
                                                            
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Warganegara : $t[warga_siswa]</p>
                                                           
                                                        </div>
                                            
                                                    </div>
                                                </div>
                                                <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.6s'>
                                                    <div class='position-relative shadow rounded border-top border-5 border-primary'>
                                                      
                                                        <div class='text-center border-bottom p-4 pt-5'>
                                                            <h4 class='fw-bold'>DETAIL ALAMAT DAN ORANG TUA</h4>
                                    
                                                        </div>
                                                        <div class='text-center border-bottom p-4'>
                                                            <a class='btn btn-primary px-4 py-2' href='../cetak_daftar.php?id=$t[id_sesi]' target='_blank'>CETAK PENDAFTARAN</a>
                                                            
                                                        </div>
                                                        <div class='p-4'>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>alamat : $t[alamat]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Desa :$t[desa] </p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Kota/Kab :$t[kota] </p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Kecamatan :$t[kecamatan] </p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Provinsi :$t[provinsi] </p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Nama Ayah :$t[nama_ayah] </p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Nama Ibu :$t[nama_ibu]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Pekerjaan Ayah:$t[pekerjaan_ayah]</p>
                                                            <p class='border-bottom pb-3'><i class='fa fa-check text-primary me-3'></i>Pekerjaan Ibu:$t[pekerjaan_ibu]</p>
                                                        </div>
                                                        <div class='text-center p-4'>
                                                            <a class='btn btn-primary px-4 py-2' href='index.php?aksi=home'>RUBAH DATA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pricing End -->
                            
                            </div>
                        </div>
                    </div>
                   </div>		
        
          ";			
}
     
elseif($_GET['aksi']=='uploadbukti'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM daftar WHERE id_daftar=$_SESSION[id_daftar]");
    $t=mysqli_fetch_array($tebaru);
        echo"			
    <div class='row'>
                    <div class='col-lg-6'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>upload syarat $_SESSION[nama]
                            </div>
                            <div class='panel-body'>
                  <form id='upload_form'>
                    <div class='form-group mb-5'>
                    <label>Nama Berkas</label><br/>
                    <input type='text' name='keterangan'   id='keterangan' class='form-control'>
                    <input type='hidden' name='id_pegawai'   id='id_daftar' value='$_SESSION[id_daftar]' class='form-control'>
                </div>
                <div class='form-group mb-5'>
                    <label>upload Berkas</label><br/>
                    <input type='file' name='file' id='file' class='form-control'>
                </div>
                
                <div class='form-group mb-5'>
                    <input type='button' id='upload' value='Upload File' class='btn btn-success'>
                    <a href='index.php?aksi=uploadbukti' class='btn btn-success'><b>Tambah data</b></a>
                </div>
            
                <progress id='progressBar' value='0' max='100' style='width:100%; display: none;'></progress>
                <h3 id='status'></h3>
                <p id='loaded_n_total'></p>
            </form>
                            </div> 
                        </div>
                    </div> 

                    <div class='col-lg-6'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>Syarat Umum
                            </div>
                            <div class='panel-body'>
                  $tt[isi]
                            </div> 
                        </div>
                    </div> 

    </div>		"; 			
}

elseif($_GET['aksi']=='dokumen'){
    echo"<div class='row'>
                    <div class='col-lg-12'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>INFORMASI 
                            </div>
                            
                            <div class='panel-body'>
                            <a class='btn btn-info' href='index.php?aksi=uploadbukti'>
                            upload data
                        </a> <br>
                            <table id='example1' class='table table-bordered table-striped'>
                            <thead>
                                <tr><th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>User</th>		  
                                </tr>
                            </thead>
            ";
    
$no=0;
$tebaru=mysqli_query($koneksi," SELECT * FROM dokumen WHERE id_daftar=$_SESSION[id_daftar]");
while ($t=mysqli_fetch_array($tebaru)){	
$no++;
                            echo"<tbody>
                                <tr><td>$no</td>
                                    <td>$t[ket_dokumen]</td>
                    <td><a href='input.php?aksi=hapusdokumen&id_dokumen=$t[id_dokumen]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[ket_dokumen] ?')\" title='Hapus'><i class='fa fa-remove'></i>hapus</li>
          </td>
                                </tr>
                            </tbody>";
}
                        echo"</table>
                            </div>
                        </div>
                    </div>
                   </div>		
        
          ";		
    }
elseif($_GET['aksi']=='statusdaftar'){
        echo"<div class='row'>
                        <div class='col-lg-12'>
                            <div class='panel panel-default'>
                                <div class='panel-heading'>INFORMASI 
                                </div>
                                <div class='panel-body'>	
                                    <div class='table-responsive'>
                                    <table id='example1' class='table table-bordered table-striped'>
        <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Nama</th>
                                                 <th>status</th>
                                                 <th>aksi</th>
                                             </tr>
                                         </thead>
                         ";
        $no=0;                 
        $tebaru=mysqli_query($koneksi," SELECT * FROM daftar WHERE id_daftar='$_SESSION[id_daftar]'");
        while ($t=mysqli_fetch_array($tebaru)){
        $no++;  
                                         echo"<tbody>
                                             <tr>
                                                 <td>$no</td>
                                                 <td>$t[nama]</td>
                                                 <td>"; if($t['status'] == '0') {
                                                    echo"<a href='' class='btn btn-warning '><b>Proses Daftar</b></a>";
                                                }
                                                else {
                                                    echo"<a href='cetak_daftar.php?id=$t[id_sesi]' target='_blank' class='btn btn-success'><b>Diterima</b></a>";   
                                                }
                                                echo"</td>
                                                 <td><a href='index.php?aksi=home' class='btn btn-info' >detail</a></td>
                                             </tr>                                      
                                         </tbody>
                                         
                                         ";
                                         
        }
                                    echo"</table>
                                 </div>
                                </div>
                            </div>
                        </div>
                       </div>";			
        
      
        }                              
?>