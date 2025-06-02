<?php

include 'koneksi_lah.php';
 
if (isset($_POST['submit'])) {
    $nisn = $_POST['nisn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
 
    // $sql = "SELECT * FROM data_db WHERE email='$email' AND password='$password'";
    $sql = "INSERT INTO data_db VALUES('$nisn', '$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Selamat, registasi berhasil!')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
        header("Location: login_lah.php");
        exit();
    } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }

    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email1 = $_POST['email1'];
        $email2 = $_POST['email2'];

        if ($email1 === $email2) {
            echo "<script>alert('Email sama!');</script>";
        } else {
            echo "<script>alert('Email berbeda.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container">
        
        <h2 class="text-center mt-5" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Buat Akun</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <label for="text" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Nisn</label>
                <input type="text" class="form-control" id="number" name="nisn" required>
            </div>
                <div class="form-group">
                <label for="text" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Gmail Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password" style="color:aliceblue; text-shadow: 2px 2px 4px black;">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Create</button>
           
            
    </div>
</body>
</html>