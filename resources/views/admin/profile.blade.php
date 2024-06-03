<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAS - Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            background-color: #1a202c;
            color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background-color: #2c343f;
            border: none;
            border-radius: 10px;
        }

        .card-header {
            background-color: #1a202c;
            border-bottom: 1px solid #333;
            border-radius: 10px 10px 0 0;
            padding: 1rem;
        }

        .card-body {
            padding: 2rem;
        }

        .card-footer {
            background-color: #1a202c;
            border-top: 1px solid #333;
            border-radius: 0 0 10px 10px;
            padding: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .btn-primary {
            background-color: #4285f4;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
        }
        img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-img i {
            color: #333;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lihat Slip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Arsip Slip Gaji</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="profile-img">
                            <img src={{$user->foto}} alt=""></img>
                        </div>
                        <h5 class="card-title">{{$user->nama}}</h5>
                        <p class="card-text">ID Karyawan: {{$user->id}}</p>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nama Lengkap: {{$user->nama}}</p>
                        <p class="card-text">Tempat, Tanggal Lahir: {{$user->ttl}}</p>
                        <p class="card-text">Jabatan: {{$user->jabatan}}</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Lihat Arsip Gaji</p>
                        <a href="/slipgaji" class="btn btn-primary">Arsip Gaji</a>
                        <a href="#" class="btn btn-danger">Hapus Karyawan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>