<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'CRUD Mahasiswa')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        html, body {
            height: 100%; /* Pastikan body dan html memenuhi tinggi viewport */
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Minimal setinggi viewport */
            padding-top: 20px;
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            color: #212529;
        }
        .container {
            max-width: 1140px;
            margin: 0 auto;
            flex: 1; /* Konten utama mengambil ruang yang tersedia */
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,.1);
            border-radius: 0.5rem;
        }
        .btn-action {
            margin-right: 5px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            /* Footer tidak perlu posisi fixed, karena flexbox sudah mendorong ke bawah */
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Sistem Informasi Mahasiswa. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
