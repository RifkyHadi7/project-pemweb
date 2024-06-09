<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Slip Gaji</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Inter";
            background-color: #333;
            background-image: url("https://res.cloudinary.com/dq11ayv02/image/upload/v1716719875/project-pemweb/homeBG.png");
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
            padding: 10px 20px;
            flex-wrap: wrap;
        }

        .navbar a {
            color: #fff;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
            transition: color 0.3s ease, opacity 0.3s ease;
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
            justify-content: center;
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 10vh auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 41px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: 900;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .form-group label {
            font-weight: 400;
            font-family: "Inter";
            color: #fff;
            margin-bottom: 10px;
            text-align: left;
            width: 100%;
            max-width: 70%;
        }

        .form-group input,
        .form-group select {
            color: #f0f0f0;
            font-size: small;
            width: 70%;
            height: 35px;
            padding: 10px;
            border-radius: 15px;
            border: none;
            background: rgba(255, 255, 255, 0.1);
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #A41045;
            font-size: medium;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 27px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #E52996;
        }

        .h2heading {
            font-size: 4vw;
            font-weight: 800;
            line-height: 1;
            text-transform: capitalize;
            background: linear-gradient(180deg, #FFF 0.35%, rgba(255, 255, 255, 0.38) 122.8%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            margin-top: 20px;
        }

        @media only screen and (max-width: 1024px) {
            .container {
                max-width: 400px;
                margin: 10vh auto;
            }

            .form-group input,
            .form-group select {
                width: 80%;
            }
        }

        @media only screen and (max-width: 768px) {
            .container {
                max-width: 300px;
                margin: 10vh auto;
            }

            .form-group input,
            .form-group select {
                width: 90%;
            }
        }

        @media only screen and (max-width: 480px) {
            .container {
                max-width: 280px;
                margin: 10vh auto;
            }

            .form-group input,
            .form-group select {
                width: 100%;
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar .nav-links {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .navbar .nav-links a {
                padding: 10px 0;
                width: 100%;
                text-align: left;
                padding-left: 20px;
            }
        }

        @media only screen and (max-width: 320px) {
            .container {
                max-width: 220px;
                margin: 10vh auto;
            }

            .form-group input,
            .form-group select {
                width: 100%;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
                background-color: rgba(255, 255, 255, 0.1);
            }

            .font {
                font-weight: 400;
                font-family: "Inter";
                color: #fff;
                margin-bottom: 10px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
    <h1 class="h2heading">Kirim Slip Gaji</h1>
    <div class="container">
        <form action="{{ route('slipgaji.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Karyawan:</label>
                <select class="form-control select2-container-default" id="nama" name="nama">
                    <option value="" disabled selected hidden>Pilih Karyawan</option>
                    @foreach ($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="file_slip_gaji">Link Slip Gaji:</label>
                <input type="text" id="file_slip_gaji" name="file_slip_gaji" placeholder="Masukkan Link Slip Gaji">
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" placeholder="YYYY">
            </div>
            <div class="form-group">
                <label for="bulan">Bulan:</label>
                <input type="text" id="bulan" name="bulan" placeholder="MM">
            </div>
            <div class="form-group">
                <button type="submit" class="btn-primary">Kirim Slip →</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            $('#file_slip_gaji').blur(function() {
                var link = $(this).val();
                if (link.indexOf('https://drive.google.com/') === 0) {
                    $.ajax({
                        url: 'https://www.googleapis.com/drive/v3/files/' + link.split('d/')[1],
                        type: 'HEAD',
                        success: function() {
                            $('#file_slip_gaji').after('<span class="text-success">Link Google Drive valid.</span>');
                        },
                        error: function() {
                            $('#file_slip_gaji').after('<span class="text-danger">Link Google Drive tidak valid atau file tidak ditemukan.</span>');
                        }
                    });
                } else {
                    $('#file_slip_gaji').after('<span class="text-danger">Silakan masukkan link Google Drive untuk slip gaji.</span>');
                }
            });
        });
    </script>
</body>

</html>
