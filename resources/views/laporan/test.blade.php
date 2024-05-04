<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <style>
        /* CSS styles can go here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, nav, section, article, aside, footer {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <h1>Details Laporan Kegiatan</h1>
        <nav>
            <ul>
                <li>ID Pelanggan : {{$laporan->idpel}}</li>
                <li>Nama : {{$laporan->name}}</li>
                <li>Keterangan : {{$laporan->keterangan}}</li>
            </ul>
        </nav>
    </header>
    <section>
        <article>
            <h3>Bukti Foto</h3>
            <p><img src="{{ asset($laporan->bukti) }}" alt="Bukti Foto" class="img-thumbnail" style="width:500px" /></p>
        </article>
    </section>
</body>
</html>