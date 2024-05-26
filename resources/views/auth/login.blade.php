<!DOCTYPE html>
<html>
<head>
    <title>Login Karyawan</title>
</head>
<body>
    <h1>Login Karyawan</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="nama">Nama Karyawan:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>
        <div>
            <label for="id">ID Karyawan:</label>
            <input type="password" id="id" name="id" value="{{ old('id') }}" required>
            
        </div>
        @error('nama')
                <div>{{ $message }}</div>
        @enderror
        @error('id')
                <div>{{ $message }}</div>
            @enderror
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
