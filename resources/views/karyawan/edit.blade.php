<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAS - Edit Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <style>
        body {
            font-family: "Inter";
            background-image: url("https://res.cloudinary.com/dq11ayv02/image/upload/v1716719875/project-pemweb/homeBG.png");
            background-color: #333;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
            margin: 0; /* Add to reset default margin */
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
            margin-right: 30px; /* Adjust margin */
        }

        .fa {
            background: transparent;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        .container {
            justify-content: center;
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 20vh auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 41px;
        }

        .card {
            background-color: transparent;
            border: none;
            border-radius: 10px;
        }

        .card-header {
            background-color: transparent;
            border-bottom: 1px solid transparent;
            border-radius: 10px 10px 0 0;
            padding: 1rem;
        }

        .card-body {
            padding: 2rem;
        }

        .card-footer {
            background-color: transparent;
            border-top: 1px solid ;
            border-radius: 0 0 10px 10px;
            padding: 1rem;
        }

        .form-control {
            color: #f0f0f0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            border: none;
        }

        .btn-primary {
            background-color: #4285f4;
            border: none;
            cursor: pointer;
        }

        img.profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-img i {
            color: #333;
        }

        @media only screen and (max-width: 768px) {
            .container {
                max-width: 400px;
                margin: 10vh auto;
            }
        }

        @media only screen and (max-width: 480px) {
            .container {
                max-width: 300px;
                margin: 5vh auto;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <img src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716717495/project-pemweb/wm1p31ly4jzn1xleizsp.png" alt="Logo" class="logo">
        <div class="nav-links">
            <a href="/dashboard">Home</a>
            <a href="/kirimslip">Kirim Slip Gaji</a>
            <a href="/slipgaji">Slip Gaji</a>
            <a href="/profile">Profil Karyawan</a>
            <a href="/karyawan">Daftar Karyawan</a>
        </div>
        <form method="POST" action="/logout" class="logout-form">
            @csrf
            <button type="submit" class="fa fa-power-off"></button>
        </form>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Karyawan</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" value="{{$karyawan->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control" id="ttl" value="{{$karyawan->ttl}}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" value="{{$karyawan->jabatan}}">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="text" class="form-control" id="foto" value="{{$karyawan->foto}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
