<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <h1>Data Karyawan</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
        </tr>
        @foreach ($karyawans as $karyawan)
        <tr>
            <td>{{ $karyawan->id }}</td>
            <td>{{ $karyawan->nama }}</td>
            <td>{{ $karyawan->jabatan }}</td>
            <td>{{ $karyawan->ttl }}</td>
            <td>{{ $karyawan->foto }}</td>
            <td>{{ $karyawan->admin }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
