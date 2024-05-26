<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>CMAS</h1>
        </div>
        <div class="content">
            <h2>Selamat Datang, {{ $user->nama }}!</h2>
            <p>Home | fours & travel</p>
            <a href="#" class="btn">Lihat Slip</a>
            <p>Situs Slip Gaji PT. MAS Tours and Travel</p>
            <p>IDN | Profil Karyawan</p>
        </div>
    </div>
</body>
</html>