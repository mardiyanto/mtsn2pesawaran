<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_or_phone = $_POST['email'];

    // Cek apakah input adalah email atau nomor HP
    $query = "SELECT * FROM daftar WHERE email = ? OR no_hp = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ss", $email_or_phone, $email_or_phone);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Buat token dan waktu kadaluarsa
        $token = bin2hex(random_bytes(16));
        $expiration = date("Y-m-d H:i:s", strtotime('+1 hour'));

        // Update token dan waktu kadaluarsa di database
        $update_query = "UPDATE daftar SET reset_token = ?, token_expiration = ? WHERE id = ?";
        $update_stmt = $koneksi->prepare($update_query);
        $update_stmt->bind_param("ssi", $token, $expiration, $user['id']);
        $update_stmt->execute();

        // Tampilkan token kepada pengguna (atau arahkan pengguna ke halaman reset password dengan token)
        echo "Token reset password Anda adalah: " . $token;
        echo "<br><a href='reset_password.php?token=$token'>Klik di sini untuk mereset password Anda</a>";
    } else {
        echo "Email atau nomor HP tidak ditemukan.";
    }
}
?>
