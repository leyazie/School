<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Pelajaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body, h1, h2, ul {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color:#4863A0;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        main {
            padding: 2rem;
        }

        .subjects h2 {
            color: #4863A0;
        }

        ul {
            list-style-type: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem; /* Jarak antar kotak */
        }

        li {
            background-color: #fff;
            margin: 0.5rem 0;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            display: flex;
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center;     /* Pusatkan secara vertikal */
            height: 90px;           /* Atur tinggi item jika perlu */
            text-align: center;      /* Pusatkan teks di dalam kotak */
            box-sizing: border-box;
        }

        footer {
            background-color: #4863A0;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
    <header>
        <h1>Daftar Mata Pelajaran</h1>
    </header>
    <main>
        <section class="subjects">
            <h2>Mata Pelajaran</h2>
            <ul>
            <li>Matematika</li>
                <li>Bahasa Indonesia</li>
                <li>Ilmu Pengetahuan Alam dan Sosial (IPAS)</li>
                <li>Agama</li>
                <li>PKKWU</li>
                <li>PJOK</li>
                <li>Seni Budaya</li>
                <li>Muatan Lokal (MuLok)</li>
                <li>Pendidikan Pancasila dan Kewarganegaraan (PPKN)</li>
                <li>Prakarya dan Kewirausahaan</li>
                <li>Mata Pelajaran Pilihan (MPP)</li>
                <li>Sejarah</li>
                <li>Bimbingan Konseling</li>
                <li>Informatika</li>
                <li>MKK</li>

            </ul>
        </section>
    </main>
    <footer>
        <p>Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</p>
    </footer>
</body>
</html>