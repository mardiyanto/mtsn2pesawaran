<?php
require 'config.php';

$token = $_GET['token'];

$query = "SELECT * FROM daftar WHERE reset_token = ? AND token_expiration > NOW()";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_password = $_POST['password'];
        $password_hash = md5($new_password);

        // Update password dan hapus token
        $update_query = "UPDATE daftar SET password_hash = ?, reset_token = NULL, token_expiration = NULL WHERE reset_token = ?";
        $update_stmt = $koneksi->prepare($update_query);
        $update_stmt->bind_param("ss", $password_hash, $token);
        $update_stmt->execute();

        echo "Password Anda telah diubah.";
    }
} else {
    echo "Link reset password tidak valid atau telah kadaluarsa.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <form action="reset_password.php?token=<?php echo htmlspecialchars($token); ?>" method="post">
        <label for="password">Password Baru:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Ganti Password</button>
    </form>
</body>
</html>
