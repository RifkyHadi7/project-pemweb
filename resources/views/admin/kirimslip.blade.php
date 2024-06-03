<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Slip Gaji</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
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
    </style>
</head>
<body>
    <div class="navbar">
        <img src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716717495/project-pemweb/wm1p31ly4jzn1xleizsp.png" alt="Logo" class="logo">
        <a href="/dashboard">Home</a>
        <a href="/kirimslip">Kirim Slip Gaji</a>
        <a href="/slipgaji">Slip Gaji</a>
        <a href="/profile">Profil Karyawan</a>
        <a href="/karyawan">Daftar Karyawan</a>
        <form method="POST" action="/logout">
        @csrf
            <button type="submit" class="fa fa-power-off"></button>
        </form>
    </div>
    <div class="container">
        <h1 class="mt-5 mb-3">Kirim Slip Gaji</h1>
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
                <label for="file_slip_gaji">File Slip Gaji:</label>
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
            $('.select2').select2();
        });
    </script>
</body>
</html>