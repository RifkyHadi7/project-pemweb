<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-image: url('https://res.cloudinary.com/dq11ayv02/image/upload/v1716719875/project-pemweb/homeBG.png');
            background-color: #333;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            padding-top: 5vh;
            max-width: 50vw;
            padding-left: 7vw;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        h2 {
            font-size: 100px;
            padding: 0;
            font-weight: 900;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .content {
            padding: 20px;
        }
        .btn {
            background-color: #A41045;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 27px;
            text-decoration: none;
            display: inline-block;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: transparent;
            padding: 10px;
            flex-wrap: wrap;
        }
        .navbar a {
            color: #fff;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            color: #E52996;
            opacity: 83%;
        }
        .logo {
            height: 30px;
        }
        .fa {
            background: transparent;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            .navbar a, .fa {
                padding: 10px;
                width: 100%;
                text-align: left;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <div class="navbar">
        <img src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716717495/project-pemweb/wm1p31ly4jzn1xleizsp.png" alt="Logo" class="logo">
        <div class="navbar-links">
            <a href="/dashboard">Home</a>
            <a href="/kirimslip">Kirim Slip Gaji</a>
            <a href="/slipgaji">Slip Gaji</a>
            <a href="/profile">Profil Karyawan</a>
            <a href="/karyawan">Daftar Karyawan</a>
        </div>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="fa fa-power-off"></button>
        </form>
    </div>
    <div class="container">
        <div class="content">
            <h2>Selamat Datang, Admin {{ $user->nama }}!</h2>
            <p>Situs Slip Gaji PT. MAS Tours and Travel</p>
            <a href="#" class="btn">Lihat Slip</a>
        </div>
    </div>
</body>
</html>
