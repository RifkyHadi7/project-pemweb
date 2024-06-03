<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Slip Gaji</title>

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
            align-items: center;
            justify-content: space-between;
            padding: 10px 30px;
            background-color: rgba(0, 0, 0, 0.7);
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
        }

       .container {
            padding-top: 70px; /* added 70px to move the container down */
            max-width: 50vw;
            flex-shrink: 0;
            border-radius: 41px;
            background: var(--Card-highlighten-background, linear-gradient(180deg, rgba(255, 255, 255, 0.09) 0%, rgba(255, 255, 255, 0.03) 100%));
            padding: 30px;
            margin: auto;
        }

        h1 {
            font-size: 36px;
            font-weight: 900;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

       .form-group label {
            font-weight: 400;
            font-family: "Inter"; /* added font family to match navbar */
            color: #fff; /* added color to match navbar */
        }

       .btn-primary {
            background-color: #A41045;
            border: none;
            border-radius: 27px;
        }

       .btn-primary:hover {
            background-color: #E52996;
        }

       .select2-container.select2-selection--single {
            height: 38px;
            background-color: #333;
            color: #fff;
        }

       .select2-container--default.select2-selection--single.select2-selection__rendered {
            color: #fff;
        }

       .select2-container--default.select2-selection--single.select2-selection__arrow b {
            border-color: #fff transparent transparent transparent;
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
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
    <h2 class="h2heading container-fluid placeData">Kirim Slip Gaji</h2>
    <div class="container">
        <form action="{{ route('slipgaji.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Karyawan:</label>
                <select class="form-control select2" id="nama" name="nama">
                    <option value="">Pilih Karyawan</option>
                    @foreach ($karyawans as $karyawan)
                        <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="file_slip_gaji">Link Slip Gaji:</label>
                <input type="text" class="form-control" id="file_slip_gaji" name="file_slip_gaji">
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="YYYY">
            </div>
            <div class="form-group">
                <label for="bulan">Bulan:</label>
                <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Month">
            </div>
            <button type="submit" class="btn btn-primary">Kirim Slip →</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
$(document).ready(function() {
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