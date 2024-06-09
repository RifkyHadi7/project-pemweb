<!DOCTYPE html>
<html>
<head>
    <title>Slip Gaji</title>
    <style>
        body {
            font-family: "Inter", sans-serif;
            background-image: url("https://res.cloudinary.com/dq11ayv02/image/upload/v1716719875/project-pemweb/homeBG.png");
            background-color: #333;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
            margin: 0;
            padding: 0;
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
        .container {
            padding-top: 5vh;
            max-width: 50vw;
            padding-left: 7vw;
        }
        h2 {
            font-size: 6vw;
            padding: 0;
            font-weight: 900;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
        .bglist {
            width: 80%;
            max-width: 600px;
            height: 60vh;
            border-radius: 20px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.09) 0%, rgba(255, 255, 255, 0.03) 100%);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            box-sizing: border-box;
        }
        .scrolltabel {
            height: 80%;
            overflow-y: auto;
            margin: 30px 0;
        }
        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        th.sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: transparent;
            color: #fff;
        }
        .centered-text-container {
            text-align: center;
            width: 100%;
            height: 20vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .h2heading {
            font-size: 10vw;
            font-weight: 800;
            line-height: 1;
            text-transform: capitalize;
            background: linear-gradient(180deg, #FFF 0.35%, rgba(255, 255, 255, 0.38) 122.8%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @media screen and (min-width: 768px) {
            .h2heading {
                font-size: 4rem; /* Adjust the maximum font size for larger screens */
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <div class="navbar">
        <img src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716717495/project-pemweb/wm1p31ly4jzn1xleizsp.png" alt="Logo" class="logo">
        <div>
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
    <div class="centered-text-container">
        <h2 class="h2heading">Slip Gaji</h2>
    </div>
    <div class="bglist">
        <div class="scrolltabel">
            <div class="table-responsive-md">
                <table class="table-sm table-dark table-hover">
                    <thead>
                        <tr>
                            <th class="sticky">Tahun</th>
                            <th class="sticky">Bulan</th>
                            <th class="sticky">Slip gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slipGajis as $slipGaji)
                        <tr>
                            <td>{{ $slipGaji->tahun }}</td>
                            <td>{{ $slipGaji->bulan }}</td>
                            <td><a href="{{ $slipGaji->slip_gaji }}" target="_blank">Lihat Slip Gaji</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>      
    </div>
</body>
</html>
