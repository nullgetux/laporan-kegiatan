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
        <h2>Evidence PRR</h2>
        <nav>
            <ul>
                <li style="font-size:20px">Nama Pelanggan: {{$laporan->name}}</li>
                <li style="font-size:20px">ID Pelanggan : {{$laporan->idpel}}</li>
                <li style="font-size:20px">Keterangan : {{$laporan->keterangan}}</li>
            </ul>
        </nav>
    </header>
    <section>
        <article>
            <h3>Bukti Foto</h3>
            <p class="text-muted"><img src="{{ public_path($laporan->bukti) }}" class="img-thumbnail" style="width:750px" /></p>
        </article>
    </section>
</body>
</html>