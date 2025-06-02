<?php
session_start(); // Mulai sesi

// Cek apakah user sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika belum login, redirect ke halaman login
    header("Location: login_lah.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Nilai MKK</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
</head>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    display: flex;
}

.sidebar {
    width: 250px;
    background: #4863A0;
    color: #ffffff;
    padding: 20px;
}

.sidebar h2 {
    margin: 0 0 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin: 10px 0;
}

.sidebar ul li a {
    color: #ffffff;
    text-decoration: none;
}

.sidebar ul li a:hover {
    text-decoration: underline;
}

.main-content {
    flex: 1;
    padding: 20px;
}

header {
    background: #4863A0;
    color: #ffffff;
    padding: 10px 0;
    text-align: center;
}

h1 {
    margin: 0;
}

.form-section, .guru-section, .mkk-section {
    background: #ffffff;
    padding: 20px;
    margin: 20px 0;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin: 10px 0 5px;
}

input[type="text"],
input[type="number"],
select {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background: #4863A0;
    color: #ffffff;
    border: none;
    padding: 10px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #434f58;
}

.guru-list, .mkk-list {
    display: flex;
    flex-wrap: wrap;
}

.guru-item, .mkk-item {
    background: #e9ecef;
    border-radius: 5px;
    padding: 10px;
    margin: 10px;
    width: calc(33% - 20px);
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

.guru-foto {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.mkk-item {
    width: calc(100% - 20px);
}
</style>

<body>
    <div class="container">
        <aside class="sidebar">
            <h2 style="text-shadow: 2px 2px 4px black;">SMKN 71 JAKARTA</h2>
            <ul>
                <li><a href="dashboard.php">Daftar Nilai</a></li>
                <li><a href="profile_guru.php" style="margin-top: 10px;">Profile Guru Management</a></li>
                <li><a href="profile_guru_umum.php">Profile Guru Umum</a></li>
                <li><a href="mapel.php">Mata Pelajaran</a></li>
                <li class="nav-item"><a class="nav-link" style="margin-top: 10px; margin-right: 70px; width: 150%; display: block; border: none; padding: 20px;" href="logout.php">Logout</a></li>
                
            </ul>
        </aside>

        <main class="main-content">
            <header>
                <h1 style="text-shadow: 2px 2px 4px black;">Nilai MKK</h1>
            </header>
            
            <section class="form-section">
                <h2>Input Nilai MKK</h2>
                <form action="proses_input.php" method="POST">
                    <label for="nisn">nisn</label>
                    <input type="text" name="nisn" placeholder="Enter nisn" required>
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                    <label for="Kelas">Kelas:</label>
                    <select name="Kelas" placeholder="Enter Kelas" required> 
                            <option>XI RPL 1</option>
                            <option>XI RPL 2</option>
                        </select>   
                        <label for="Nilai">Nilai</label>
                        <input type="number" name="Nilai" placeholder="Enter Nilai" required>
                        <div class="form-submit-btn" style=" margin-top: 10px; margin-right: 70px; width: 150%; display: block; color: rgba(0, 0, 0, 1.0); border: none; padding: 20px;">
                        <td><input type="Submit" name="simpan" value="Input"></td>
                    </div>
    <?php
        session_start();
        include 'koneksi_nilai.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_mahasiswa = $_POST['Nisn'];
            $id_mkk = $_POST['Nama'];
            $id_guru = $_POST['kelas'];
            $nilai = $_POST['Nilai'];

            $stmt = $conn->prepare("INSERT INTO nilai_mkk (Nisn, Nama, Kelas, Nilai) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("siii", $Nisn, $Nama, $Kelas, $Nilai);

            if ($stmt->execute()) {
                // Menyimpan hanya nilai ke sesi
                $_SESSION['input_nilai'] = $Nilai;
                header('Location: dashboard.php'); // Arahkan kembali ke dashboard
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $conn->close();
?>    
        </main>
    </div>
</body>
<!-- auto logout -->
<script>
        let idleTime = 0;

        function resetIdleTime() {
            idleTime = 0;
        }

        setInterval(function() {
            idleTime++;
            if (idleTime >= 30) {
                window.location.href = 'logout.php';
            }
        }, 1000);

        window.onload = function() {
            document.body.addEventListener('mousemove',resetIdleTime);
            document.body.addEventListener('keypress',resetIdleTime);
        };
    </script>

       
        
</html>
