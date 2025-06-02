<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php"); // Redirect ke halaman index jika sudah login
    exit();
}

$servername = "localhost";
$username = "root"; // username db
$password = ""; // password db
$dbname = "daftar_laisa"; // nama db

// Bikin koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tahap 1: Memverifikasi email
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    $stmt = $conn->prepare("SELECT * FROM data_db WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    // $stmt->bind_result($nisn);
    // die($stmt->fetch());
    // $stmt->fetch();
    $res = $stmt->get_result();
    $nisn = $res->fetch_assoc()['nisn'];
    $stmt->close();

    if ($nisn) {
        $_SESSION['reset_id'] = $nisn;
        $_SESSION['reset'] = 2; // Menandakan tahap reset password
    } else {
        ?>
        <script>
            alert("Email Tidak Ada");
        </script>
        <?php
    }
}

// Tahap 2: Memproses reset password
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
    if (isset($_SESSION['reset']) && $_SESSION['reset'] == 2) {
        $nisn = $_SESSION['reset_id'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        if ($password === $confirmpassword) {
            // Hash password dan update database
            // $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE data_db SET password=? WHERE nisn=?");
            $stmt->bind_param("si", $password, $nisn);
            if ($stmt->execute()) {
                ?>
                <script>
                    alert("Password Berhasil Direset");
                    window.location.href = "login_lah.php"
                </script>
                <?php
                session_unset();
                session_destroy();
            } else {
                ?>
                <script>
                    alert("Password Gagal Direset");
                </script>
                <?php
            }
            $stmt->close();
        } else {
            ?>
            <script>
                alert("Password Gagal Dikonfirmasi");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Sesi Gagal");
        </script>
        <?php
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
        background-image: url('sekolah71.jpg')
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(3px)
        }
    </style>
</head>
<body>
    <!-- Form Container -->
    <div class="container form-container">
        <h2 class="text-center mb-4"style="color:aliceblue; text-shadow: 2px 2px 4px black;">Lupa Password?</h2>
        <?php if (!isset($_SESSION['reset']) || $_SESSION['reset'] == 1) { ?>
            <!-- Form untuk memasukkan email -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Email:</label>
                    <input type="email" class="form-control" name="email" required placeholder="Masukkan email Anda">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-custom" style="color:aliceblue;">Kirim</button>
                </div>
            </form>
        <?php } elseif ($_SESSION['reset'] == 2) { ?>
            <!-- Form untuk reset password -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="mb-3">
                    <label for="password" class="form-label" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Password Baru:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirmpassword" class="form-label" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Konfirmasi Password:</label>
                    <input type="password" class="form-control" name="confirmpassword" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-custom" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Reset Password</button>
                </div>
            </form>
        <?php } ?>
        <?php 
        if (isset($_SERVER['REQUEST_METHOD'])=='POST' && isset($_POST['sesi1'])) {
            ?>
            <script>
                window.location.href = 'login_lah.php';
            </script>
            <?php
        } elseif (isset($_SERVER['REQUEST_METHOD'])=='POST' && isset($_POST['sesi2'])) {
            $_SESSION['reset']=1;
            ?>
            <script>
                window.location.href = 'login_lah.php';
            </script>
            <?php
        }
         ?>
        <form method="post">
            <button class="btn btn-back mt-3" type="submit"  name="<?php if (!isset($_SESSION['reset']) || $_SESSION['reset']==1) {
                echo "sesi1";
            } else {
                echo "sesi2";
            } ?>" style="color:aliceblue;" >Back</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


