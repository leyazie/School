<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi_lah.php';

if (isset($_SESSION['nama'])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM data_db WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        error_log("Query Error: " . mysqli_error($conn)); // Log error ke server
        die("Terjadi kesalahan, silakan coba lagi nanti.");
    }

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        // Gunakan password_verify untuk memeriksa password
        if ($password == $row['password']) {
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['loggedin'] = true;

            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Password salah. Silakan coba lagi.";
        }
    } else {
        $error = "Email tidak ditemukan. Silakan periksa kembali.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('sekolah71.jpg');
            background-size: cover;
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5" style="color:black;">Login</h2>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="email">Gmail Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
            <a href="buat_akun.php" class="d-block text-center mt-3">Belum membuat akun?</a>
            <a href="lupa_pw.php" class="d-block text-center mt-2">Lupa Password?</a>
        </form>
    </div>
</body>
</html>
