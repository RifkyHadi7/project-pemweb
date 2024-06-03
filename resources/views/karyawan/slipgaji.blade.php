<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <style>
        body {
            font-family: "Inter";
            background-image: url("https://res.cloudinary.com/dq11ayv02/image/upload/v1716719875/project-pemweb/homeBG.png");
            background-color: #333;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
        }
        table{
            width: 100%;
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
            padding:0%;
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
            justify-content: center;
            overflow: hidden;
            padding: 10px;
        }
        .navbar a {
            float: left;
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
            margin-right: 30vw;
            float: left;
            justify-self: start;
        }
        .fa{
            background: transparent;
            border: none;
            margin-left: 30vw;
            color: #fff;
        }
        .bglist{
            width: 739px;
            height: 365px;
            flex-shrink: 0;
            border-radius: 41px;
            background: var(--Card-highlighten-background, linear-gradient(180deg, rgba(255, 255, 255, 0.09) 0%, rgba(255, 255, 255, 0.03) 100%));
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        .scrolltabel{
            width: 674x;
            height: 300px;
            overflow-y: scroll;
            overflow-x: auto;
            margin: 30px;
            padding: 10px;
        }
        .styletable{
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding: 15px;
            overflow-x: auto;
        }
        .sticky{
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
        .wordbreak{
            word-break: break-all;
            position: relative;
        }
        .h2heading{
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
            line-height: 110%; /* 101.2px */
            text-transform: capitalize;
            background: var(--Gradient-Headings, linear-gradient(180deg, #FFF 0.35%, rgba(255, 255, 255, 0.38) 122.8%));background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;
        }
        .centered-text-container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            text-align: center;
            width: 100%; /* or a specific width, e.g., 649px */
            height: 100vh; /* or a specific height */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <div class="navbar">
        <img src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716717495/project-pemweb/wm1p31ly4jzn1xleizsp.png" alt="Logo" class="logo">
        <a href="/dashboard">Home</a>
        <a href="/slipgaji">Slip Gaji</a>
        <a href="/karyawan">Daftar Karyawan</a>
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
    <table class="table-sm table-dark  table-hover">
        <tr>
            <th class="sticky --bs-light-text-emphasis">Tahun</th>
            <th class="sticky --bs-light-text-emphasis">Bulan</th>
            <th class="sticky --bs-light-text-emphasis">Slip gaji</th>
        </tr>
        @foreach ($slipGajis as $slipGaji)
        <tr class="--bs-light-text-emphasis">
            <td>{{ $slipGaji->tahun }}</td>
            <td>{{ $slipGaji->bulan }}</td>
            <td><a href="{{ $slipGaji->slip_gaji }}" target="_blank">Lihat Slip Gaji</a></td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>      
    </div>
</body>
</html>