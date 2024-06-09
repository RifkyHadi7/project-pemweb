<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
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
        .header1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        h21 {
            font-size: 100px;
            padding: 10px;
            text-align: center;
        }
        h21 {
            font-size: 100px;
            padding: 0;
            font-weight: 900;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .content {
            padding: 20px;
            justify-content: center;
        }
        .btn1 {
            background-color: #A41045;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 27px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px; /* Add margin for spacing */
        }
        .center-btn {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .navbar1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: transparent;
            padding: 10px;
            flex-wrap: wrap;
        }
        .navbar1 a {
            color: #fff;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
        }
        .navbar1 a:hover {
            color: #E52996;
            opacity: 83%;
        }
        .logo1 {
            height: 30px;
        }
        .fa {
            background: transparent;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        .bgtabel {
            width: 739px;
            height: 365px;
            flex-shrink: 0;
            border-radius: 41px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.09) 0%, rgba(255, 255, 255, 0.03) 100%);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .h2heading {
            display: flex;
            padding: 20px;
            align-items: center;
            justify-content: center;
            text-align: center;
            white-space: nowrap;
            width: 100%;
            font-family: Inter;
            font-size: 92px;
            font-style: normal;
            font-weight: 800;
            line-height: 110%; /* 101.2px */
            text-transform: capitalize;
            background: linear-gradient(180deg, #FFF 0.35%, rgba(255, 255, 255, 0.38) 122.8%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bglist {
            width: 739px;
            height: 365px;
            flex-shrink: 0;
            border-radius: 41px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.09) 0%, rgba(255, 255, 255, 0.03) 100%);
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .scrolltabel {
            width: 674px;
            height: 300px;
            overflow-y: scroll;
            overflow-x: auto;
            margin: 30px;
            padding: 10px;
        }
        .styletable {
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding: 15px;
            overflow-x: auto;
        }
        .sticky {
            position: sticky;
            top: 0;
            z-index: 2;
        }
        .wordbreak {
            word-break: break-all;
            position: relative;
        }
        .typolihat {
            font-family: Inter;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 24px */
            text-decoration-line: underline;
            text-transform: capitalize;
            inline-size: auto;
        }
        .stylelihat {
            background: linear-gradient(180deg, #FFF 0.35%, rgba(255, 255, 255, 0.38) 122.8%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .typotd {
            color: #FFF;
            text-transform: capitalize;
        }
        .placeData {
            padding: 140px;
        }
        .typePt {
            color: #B9B9B9;
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 30px */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .logo {
            height: 30px;
            margin-right: 30vw;
            float: left;
            justify-self: start;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <div class="navbar1">
        <img src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716717495/project-pemweb/wm1p31ly4jzn1xleizsp.png" alt="Logo" class="logo1">
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
    <div class="container-fluid placeData">
        <h2 class="h2heading">Daftar Karyawan</h2>
    </div>
    <div class="bglist">
        <div class="scrolltabel">
            <div class="table-responsive-xl">
                <table class="table-sm table-dark table-hover">
                    <thead>
                        <tr>
                            <th class="sticky">ID</th>
                            <th class="sticky">Nama</th>
                            <th class="sticky">Jabatan</th>
                            <th class="sticky">TTL</th>
                            <th class="sticky"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($karyawans as $karyawan)
                        <tr>
                            <td class="align-top typotd">{{ $karyawan->id }}</td>
                            <td class="align-top typotd">{{ $karyawan->nama }}</td>
                            <td class="align-top typotd">{{ $karyawan->jabatan }}</td>
                            <td class="align-top typotd">{{ $karyawan->ttl }}</td>
                            <td>
                                <a class="typolihat stylelihat" href="{{ url('/profil/'. $karyawan->id) }}">Lihat Profil</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="center-btn">
            <a href="#" class="btn1">Tambah Karyawan +</a>
        </div>
    </div>
</body>
</html>
