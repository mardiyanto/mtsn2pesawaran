<?php
  include '../koneksi.php';
  date_default_timezone_set('Asia/Jakarta');
  session_start();
  if($_SESSION['status'] != "siswa"){
    header("location:../login.php?alert=belum_login");
  }
  $date=date ('d/m/Y');
$time=date ('h:i A');
if($_GET['aksi']=='inputriwayat'){
	mysqli_query($koneksi,"insert into riwayat (id_pegawai,ket_riwayat,jenis_riwayat) values ('$_POST[id_pegawai]','$_POST[ket_riwayat]','$_POST[jenis_riwayat]')");  
echo "<script>window.location=('index.php?aksi=detailpegawai&id_pegawai=$_POST[id_pegawai]')</script>";
}
elseif($_GET['aksi']=='inputlaporan'){
	mysqli_query($koneksi,"insert into laporan (id_daftar,id_berita,tgl_laporan,jam_laporan,ket_kehilangan,tempat_hilang,status_lapor) 
	values ('$_POST[id_daftar]','$_POST[id_berita]','$_POST[tgl_laporan]','$_POST[jam_laporan]','$_POST[ket_kehilangan]','$_POST[tempat_hilang]','pengajuan')");  
	$id_laporan = mysqli_insert_id($koneksi);
echo "<script>window.location=('index.php?aksi=uploadbukti&id_laporan=$id_laporan')</script>";
}
elseif ($_GET['aksi'] == 'prosesuploaddokumen') {
	$fileName = $_FILES["file"]["name"]; // Nama File asli
	$fileTmp = $_FILES["file"]["tmp_name"]; // File di folder tmp PHP
	
	// Generate nama file unik dengan menambahkan timestamp
	$unikFileName = time() . '_' . $fileName;
	
	// Jika belum ada folder upload, maka buat folder upload
	$temp = "../foto/dokumen/";
	if (!file_exists($temp)) {
		mkdir($temp);
	}
	
	if (move_uploaded_file($fileTmp, $temp . $unikFileName)) {
		echo "$unikFileName berhasil diupload";
	
		if (!$koneksi) {
			die("Koneksi gagal: " . mysqli_connect_error());
		}
	
		$keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);
		$id_daftar = mysqli_real_escape_string($koneksi, $_POST['id_daftar']);

	
		$query = "INSERT INTO dokumen (id_daftar,file_dokumen, ket_dokumen) VALUES ('$id_daftar', '$unikFileName', '$keterangan')";
	
		$result = mysqli_query($koneksi, $query);
	
		if ($result) {
			echo " dan data berhasil disimpan ke database.";

		} else {
			echo " dan terjadi kesalahan dalam menyimpan data ke database: " . mysqli_error($koneksi);
		}
	
		mysqli_close($koneksi);
	} else {
		echo "Upload gagal";
	}
}
elseif($_GET['aksi']=='hapusdokumen'){
	$data = mysqli_query($koneksi, "select * from dokumen where id_dokumen='$_GET[id_dokumen]'");
	$d = mysqli_fetch_assoc($data);
	$data = $d['file_dokumen'];
	unlink("../foto/dokumen/$data");
	mysqli_query($koneksi, "delete from dokumen where id_dokumen='$_GET[id_dokumen]'");
	echo "<script>window.location=('index.php?aksi=dokumen')</script>";
}
elseif($_GET['aksi']=='inputkerja'){
	$password = md5($_POST['kode_pegawai']);
	if (empty($_POST[ket_uraiankerja])){
		echo "<script>window.alert('Data yang Anda isikan belum lengkap');
			   window.location=('javascript:history.go(-1)')</script>";
			}else{
			
	   $lokasi_file=$_FILES[gambar][tmp_name];
	   if(empty($lokasi_file)){
	   echo "<script>window.alert('File gambar masih kosong');
			   window.location=('javascript:history.go(-1)')</script>";
	   }else{
	   $tanggal=date("dmYhis");
	   $file=$_FILES['gambar']['tmp_name'];
	   $file_name=$_FILES['gambar']['name'];
	   $target_path = "../foto/kerja/" . $tanggal . ".jpg";

	   // Pastikan direktori tujuan ada
	   if (!file_exists(dirname($target_path))) {
	       mkdir(dirname($target_path), 0777, true);
	   }

	   // Gunakan fungsi copy() untuk memindahkan file
	   if (copy($file, $target_path)) {
	       $id_pegawai = mysqli_real_escape_string($koneksi, $_POST['id_pegawai']);
	       $ket_uraiankerja = mysqli_real_escape_string($koneksi, $_POST['ket_uraiankerja']);
	       $query = "INSERT INTO uraiankerja (id_pegawai, ket_uraiankerja, foto_uraiankerja) VALUES ('$id_pegawai', '$ket_uraiankerja', '$tanggal.jpg')";
	       $result = mysqli_query($koneksi, $query);

	       if ($result) {
	           echo "<script>window.location=('index.php?aksi=kerja')</script>";
	       } else {
	           echo "Terjadi kesalahan dalam menyimpan data: " . mysqli_error($koneksi);
	       }
	   } else {
	       echo "Gagal mengunggah file.";
	   }
		  }
		 } 
}
elseif($_GET['aksi']=='inputcuti'){
    $id_pegawai = mysqli_real_escape_string($koneksi, $_POST['id_pegawai']);
    $lama_cuti = mysqli_real_escape_string($koneksi, $_POST['lama_cuti']);
    $tgl_awal = mysqli_real_escape_string($koneksi, $_POST['tgl_awal']);
    $tgl_akhir = mysqli_real_escape_string($koneksi, $_POST['tgl_akhir']);
    $ket_cuti = mysqli_real_escape_string($koneksi, $_POST['ket_cuti']);

    // Validasi input
    if (empty($id_pegawai) || empty($lama_cuti) || empty($tgl_awal) || empty($tgl_akhir) || empty($ket_cuti)) {
        echo "<script>alert('Semua field harus diisi.'); window.location=('javascript:history.go(-1)');</script>";
    } else {
        $query = "INSERT INTO cuti_pegawai (id_pegawai, lama_cuti, tgl_awal, tgl_akhir, ket_cuti, status_cuti) 
        VALUES ('$id_pegawai', '$lama_cuti', '$tgl_awal', '$tgl_akhir', '$ket_cuti', 'pengajuan')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>window.location=('index.php?aksi=cuti')</script>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
    
    echo "<script>window.location=('index.php?aksi=cuti')</script>";
}
elseif ($_GET['aksi'] == 'inputbiodata') {   
    // Mengambil id_daftar dari parameter GET
$id_daftar = mysqli_real_escape_string($koneksi, $_GET['id_daftar']);
// Mengambil data dari POST dan melakukan sanitasi input
$program = mysqli_real_escape_string($koneksi, $_POST['program']);
$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
$nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$warga_siswa = mysqli_real_escape_string($koneksi, $_POST['warga_siswa']);
$jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
$tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
$asal_sekolah = mysqli_real_escape_string($koneksi, $_POST['asal_sekolah']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$rt = mysqli_real_escape_string($koneksi, $_POST['rt']);
$rw = mysqli_real_escape_string($koneksi, $_POST['rw']);
$desa = mysqli_real_escape_string($koneksi, $_POST['desa']);
$kecamatan = mysqli_real_escape_string($koneksi, $_POST['kecamatan']);
$kota = mysqli_real_escape_string($koneksi, $_POST['kota']);
$provinsi = mysqli_real_escape_string($koneksi, $_POST['provinsi']);
$kode_pos = mysqli_real_escape_string($koneksi, $_POST['kode_pos']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$nama_ayah = mysqli_real_escape_string($koneksi, $_POST['nama_ayah']);
$pendidikan_ayah = mysqli_real_escape_string($koneksi, $_POST['pendidikan_ayah']);
$pekerjaan_ayah = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ayah']);
$penghasilan_ayah = mysqli_real_escape_string($koneksi, $_POST['penghasilan_ayah']);
$no_hp_ayah = mysqli_real_escape_string($koneksi, $_POST['no_hp_ayah']);
$nama_ibu = mysqli_real_escape_string($koneksi, $_POST['nama_ibu']);
$pendidikan_ibu = mysqli_real_escape_string($koneksi, $_POST['pendidikan_ibu']);
$pekerjaan_ibu = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ibu']);
$penghasilan_ibu = mysqli_real_escape_string($koneksi, $_POST['penghasilan_ibu']);
$no_hp_ibu = mysqli_real_escape_string($koneksi, $_POST['no_hp_ibu']);

// Mengunggah foto jika ada
if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_name = $_FILES['foto']['name'];
    $foto_ext = strtolower(pathinfo($foto_name, PATHINFO_EXTENSION));

    // Hanya izinkan tipe file tertentu
    $allowed_extensions = ['jpg', 'jpeg', 'png'];
    if (in_array($foto_ext, $allowed_extensions)) {
        $randomName = uniqid() . '.' . $foto_ext;
        $foto_path = '../uploads/foto/' . $randomName;
        move_uploaded_file($foto_tmp, $foto_path);
    } else {
        echo "<script>
                window.alert('Hanya file dengan format JPG, JPEG, dan PNG yang diperbolehkan.');
                window.history.back();
              </script>";
        exit;
    }
} else {
    $randomName = ''; // Atau tambahkan logika jika foto wajib
}

// Query untuk memperbarui data di tabel daftar
$query = "UPDATE daftar SET 
    program='$program', 
    nik='$nik', 
    nisn='$nisn', 
    warga_siswa='$warga_siswa', 
    jenis_kelamin='$jenis_kelamin', 
    tempat_lahir='$tempat_lahir', 
    tgl_lahir='$tgl_lahir', 
    asal_sekolah='$asal_sekolah', 
    alamat='$alamat', 
    rt='$rt', 
    rw='$rw', 
    desa='$desa', 
    kecamatan='$kecamatan', 
    kota='$kota', 
    provinsi='$provinsi', 
    kode_pos='$kode_pos', 
    no_hp='$no_hp', 
    nama_ayah='$nama_ayah', 
    pendidikan_ayah='$pendidikan_ayah', 
    pekerjaan_ayah='$pekerjaan_ayah', 
    penghasilan_ayah='$penghasilan_ayah', 
    no_hp_ayah='$no_hp_ayah', 
    nama_ibu='$nama_ibu', 
    pendidikan_ibu='$pendidikan_ibu', 
    pekerjaan_ibu='$pekerjaan_ibu', 
    penghasilan_ibu='$penghasilan_ibu', 
	status_data='update',
    no_hp_ibu='$no_hp_ibu'";

// Jika ada foto, tambahkan ke query
if ($randomName != '') {
    $query .= ", foto='$randomName'";
}

$query .= " WHERE id_daftar='$id_daftar'";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "<script>
            window.alert('Data berhasil diperbarui');
            window.location.href = 'index.php?aksi=home';
          </script>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
}
?>
