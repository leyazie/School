<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler Sekolah</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
    }

    header {
        background-color: #4863A0;
        color: white;
        text-align: center;
        padding: 1rem;
    }

    main {
        padding: 2rem;
        overflow: auto; 
        min-height: 100vh;
    }

    .activities {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .activity {
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        flex: 1 1 calc(33% - 1rem);
        display: flex;
        flex-direction: column;
    }

    .activity img {
        width: 100%;
        height: auto;
    }

    .text {
        padding: 1rem;
    }

    .text h2 {
        color: #4863A0;
        margin-top: 0;
        align-items: center;   
        text-align: center;
    }

    .text p {
        margin: 0;
    }

    footer {
        background-color: #4863A0;
        color: white;
        text-align: center;
        padding: 1rem;
        position: relative;
        width: 100%;
        bottom: 0;
    }
</style>
    <header>
        <h1>Ekstrakurikuler Sekolah</h1>
    </header>
    <main>
        <section class="activities">
            <article class="activity">
                <img src="gambar-ekskul1.jpg" alt="Gambar Ekstrakurikuler 1">
                <div class="text">
                    <h2>Paskibra</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul2.jpg" alt="Gambar Ekstrakurikuler 2">
                <div class="text">
                    <h2>Pramuka</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>PMR</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>Basktet</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>Futsal</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>Teater</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>Fotografi</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>English Club</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>tari Tradisional</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>Saman</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>Moderen Dance</h2>
                </div>
            </article>
            <article class="activity">
                <img src="gambar-ekskul3.jpg" alt="Gambar Ekstrakurikuler 3">
                <div class="text">
                    <h2>Bulu Tangkis</h2>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <p>Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</p>
    </footer>
</body>
</html>