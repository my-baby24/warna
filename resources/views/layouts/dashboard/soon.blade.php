<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin: 30px;
        }

        h1 {
            font-size: 10rem;
            margin: 0;
            color: #333;
        }

        p {
            font-size: 1.5rem;
            color: #777;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .circle {
            animation: bounce 2s ease infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="circle">
            <h1>404</h1>
        </div>
        <p>Halaman yang Anda cari tidak ditemukan.</p>
        <p><a href="{{route('wlcm')}}">Kembali ke Halaman Utama</a></p>
    </div>
</body>
</html>
