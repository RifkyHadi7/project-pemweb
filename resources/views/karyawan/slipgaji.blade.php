<!DOCTYPE html>
<html>

<head>
    <title>Data Karyawan</title>
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

        .container {
            padding-top: 5vh;
            max-width: 50vw;
            margin: 0 auto;
            /* Center the container */
            padding: 0 15px;
            /* Add some horizontal padding */
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h2 {
            font-size: 8vw;
            /* Adjust font size */
            padding: 0;
            font-weight: 900;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            /* Center the heading */
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
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
            position: fixed;
            /* Fixed navbar */
            top: 0;
            /* Stick to the top */
            width: 100%;
            /* Full width */
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

        .navbar form {
            margin: 0;
        }

        .logo {
            height: 30px;
        }

        .fa {
            background: transparent;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 20px;
        }

        .bglist {
            width: 90%;
            max-width: 739px;
            height: auto;
            margin: 20px auto;
            padding: 20px;
            overflow: hidden;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.09) 0%, rgba(255, 255, 255, 0.03) 100%);
            border-radius: 41px;
        }

        .scrolltabel {
            width: 100%;
            height: 300px;
            overflow-y: auto;
            overflow-x: auto;
            margin: 30px 0;
            padding: 10px;
        }

        .table-sm th,
        .table-sm td {
            padding: .5rem;
            /* Adjust table cell padding */
        }

        .table-sm th.sticky {
            position: sticky;
            /* Make the header sticky */
            top: 0;
            /* Stick to the top */
            background-color: #333;
            /* Match background color with navbar */
            z-index: 1;
            /* Ensure the header is above other elements */
        }

        .table-sm th.sticky a {
            color: #fff;
            /* Match link color with navbar */
        }

        .wordbreak {
            word-break: break-all;
            position: relative;
        }

        .h2heading {
            font-size: 8vw;
            /* Adjust font size */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            white-space: nowrap;
            width: 100%;
            font-family: Inter;
            font-weight: 800;
            line-height: 110%;
            text-transform: capitalize;
            background: linear-gradient(180deg, #FFF 0.35%, rgba(255, 255, 255, 0.38) 122.8%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 20px 0;
        }

        .centered-text-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
            height: 100vh;
            flex-direction: column;
            padding-top: 5vh;
        }

        @media (max-width: 768px) {
            h2 {
                font-size: 7vw;
            }

            .h2heading {
                font-size: 8vw;
            }

            .navbar {
                flex-direction: column;
            }

            .navbar a {
                padding: 5px;
            }

            .logo {
                margin: 0 auto 10px auto;
            }

            .fa {
                margin: 10px auto 0 auto;
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
    <div class="centered-text-container">
        <h2 class="h2heading">Slip Gaji</h2>
    </div>
    <div class="bglist">
        <div class="scrolltabel">
            <div class="table-responsive-md">
                <table class="table-sm table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="sticky">Tahun</th>
                            <th class="sticky">Bulan</th>
                            <th class="sticky">Slip gaji</th>
                            <th class="sticky">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slipGajis as $slipGaji)
                        <tr>
                            <td>{{ $slipGaji->tahun }}</td>
                            <td>{{ $slipGaji->bulan }}</td>
                            <td><a href="{{ $slipGaji->slip_gaji }}" target="_blank">Lihat Slip Gaji</a></td>
                            <td>
                                <form method="POST" action="/slipgaji/{{$id}}/{{ $slipGaji->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>