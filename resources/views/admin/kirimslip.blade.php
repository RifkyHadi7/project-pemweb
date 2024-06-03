<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Slip Gaji</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
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