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
            font-family: "Inter";
            background-image: url("https://res.cloudinary.com/dq11ayv02/image/upload/v1716719875/project-pemweb/homeBG.png");
            background-color: #333;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
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

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-img i {
            color: #333;
        }

        .profile-card {
            width: 739px;
            height: 365px;
            flex-shrink: 0;
            border-radius: 41px;
            background: var(--Card-highlighten-background, linear-gradient(180deg, rgba(255, 255, 255, 0.09) 0%, rgba(255, 255, 255, 0.03) 100%));
            margin: 40px auto 0 auto;
            /* Added margin-top */
            position: relative;
            padding: 20px;
        }

        .profile-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .profile-card h5 {
            margin-bottom: 1rem;
        }

        .profile-card p {
            margin: 0.5rem 0;
        }

        .profile-card .btn {
            margin-top: 1rem;
        }

        .profile-card .btn-danger {
            border-radius: 26px;
            background: var(--Primary-red, #A41045);
        }

        .profile-card .btn-primary {
            border-radius: 26px;
            background: var(--Tertiary-blue, #18457C);
            position: absolute;
            bottom: 20px;
            left: 20px;
        }

        .profile-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
            /* add some margin bottom to separate from the image */
        }

        .profile-info img {
            margin-right: 20px;
        }

        .profile-info div {
            flex: 1;
            /* make the div take up the remaining space */
            padding-left: 20px;
            /* add some padding to separate from the image */
        }

        .edit-link {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #4285f4;
            text-decoration: none;
        }

        .edit-link:hover {
            color: #18457C;
        }

        .profile-title {
            text-align: center;
            margin-top: 20px;
            font-size: 1.5rem;
        }

        .h2heading {
            display: flex;
            padding: 20px;
            align-items: center;
            justify-content: center;
            text-align: center;
            text-align: center;
            white-space: nowrap;
            width: 649px;
            font-family: Inter;
            font-size: 92px;
            font-style: normal;
            font-weight: 800;
            line-height: 110%;
            /* 101.2px */
            text-transform: capitalize;
            background: var(--Gradient-Headings, linear-gradient(180deg, #FFF 0.35%, rgba(255, 255, 255, 0.38) 122.8%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
    <h2 class="h2heading container-fluid">Profil</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-card">
                    <a href="{{ url('/profil/'. $user->id). '/edit' }}" class="edit-link">Edit</a>
                    <div class="profile-info">
                        <img src="{{$user->foto}}" alt="Profile Image">
                        <div>
                            <h5 class="card-title">{{$user->nama}}</h5>
                            <p class="card-text">ID Karyawan: {{$user->id}}</p>
                            <p class="card-text">Nama Lengkap: {{$user->nama}}</p>
                            <p class="card-text">Tempat, Tanggal Lahir: {{$user->ttl}}</p>
                            <p class="card-text">Jabatan: {{$user->jabatan}}</p>
                        </div>
                    </div>
                    <a href="{{ url('slipgaji/'. $user->id)}}" class="btn btn-primary">Arsip Gaji</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
