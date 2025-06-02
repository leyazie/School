<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Sekolah</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Sekolah SMKN 71 Jakarta</h1>
    </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #4863A0;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 36px;
        }

        main {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
            background-color: #fff;
        }

        .sejarah {
            margin-bottom: 40px;
        }

        .sejarah h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 15px;
        }

        .sejarah p {
            font-size: 18px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        .galeri h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 15px;
        }

        .foto-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .foto-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .footer {
            background-color: #4863A0;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: relative;
            width: 1360px;
            left: 0;
            bottom: 0;
            margin-top: 40px;
        }

        .footer p {
            margin: 0;
            font-size: 16px;
        }

    </style>
    <main>
        <section class="sejarah">
            <h2>Tentang Sekolah SMKN 71 Jakarta</h2>
            <p>
            Sekolah ini merupakan salah satu Sekolah unit Baru (USB) yang memulai proses pembangunannya pada tahun 2019. 
            Selama proses pembangunan yang memakan waktu kurang lebih 1 (satu) tahun, kegiatan belajar mengajar dilaksanakan
             di SMK Negei 46 Jakarta yang terletak di Jl B7 Cipinang Pulo Jakarta Timur. Ibu Oom Siti Halimah, MM adalah Plt 
             kepala sekolah SMK Negeri 71 Jakarta yang mulai bertugas pada bulan Juli 2019 – Januari 2021. Diakhir bulan Agustus 
             2021, Bapak Drs Lambas Pakpahan,MM di tunjuk sebagai Kepala SMK Negeri 71 Jakarta sampai saat ini.
            </p>
            <p>
            SMK Negeri 71 Jakarta dengan luas bangunan 4000 m^2, memiliki 3 (tiga) Kompetensi Keahlian yaitu Kompetensi Keahlian
             Rekayasa Perangkat Lunak, Desain Komunikasi Visual dan Animasi serta dilengkapi dengan sarana prasarana untuk menunjang 
             proses pembelajaran. Sebagian siswa tamatan ini telah bekerja, melanjutkan pendidikan serta berwirausaha pada sebagian siswa lainnya.
            </p>
        </section>

        <section class="galeri">
            <h2>Galeri Foto</h2>
            <div class="foto-container">
                <img src="senam.JPG" alt="Foto Sekolah 1">
                <img src="upacara.JPG" alt="Foto Sekolah 2">
                <img src="job.JPG" alt="Foto Sekolah 3">
            </div>
        </section>
        <section class="contact">
            <h2>Contact Alamat</h2>
            <p>Alamat: Jl. Radjiman Widyodiningrat Pulo Jahe, Jatinegara, Kec. Cakung,  Jakarta Timur</p>
            <p>No. Telpon : 021 8614112</p>
            <p>Status : Negeri</p>
            <p>Akreditasi : A</p>
            <p>Kurikulum: Kurikulum Merdeka</p>
            <p>Email: smkntujuhsatu@gmail.com</p>
            <a href="https://maps.app.goo.gl/8dSzbME8yM1sqAXB6"><button style="padding:10px;" >Lihat di google maps</button></a>
        </section>
        
    </main>

    <footer class="footer">
        <p>Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</p>
    </footer>

</body>
</html>