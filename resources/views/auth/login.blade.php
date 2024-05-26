<!DOCTYPE html>
<html>
<head>
    <title>Login Karyawan</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <style>
        body {
            font-family: "Inter";
            background-color: #f0f0f0;
            background-image: url("https://res.cloudinary.com/dq11ayv02/image/upload/v1716716656/project-pemweb/bvq3ur5ssuk8dz74r26m.png");
        }
        h1{
            color: #f0f0f0;
            align-self: center;
        }
        .navbar {
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar img {
            height: 40px;
            margin-right: 10px;
        }
        .container {
            justify-content: center;
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 20vh 33vw;
            padding: 20px;
            background-color: transparent;
        }
        input{
            border-radius: 27px;
        }
        .form-group input::placeholder{
            font-size: small;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 0 5px;
        }
        .form-group {
            margin-bottom: 20px;
            justify-content: center;
            display: flex;
            color: red;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
        }
        .form-group input[type="text"], .form-group input[type="password"] {
            color: #f0f0f0;
            font-size: small;
            width: 70%;
            height: 25px;
            padding: 10px;
            border-radius: 15px;
            border: none;
            background: rgba(255, 255, 255, .1) 
        }
        .form-group button[type="submit"] {
            background-color: #A41045;
            font-size: medium;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            display: inline-block;
        }
        .form-group button[type="submit"]:hover {
            background-color: #444;
        }
        .logo{
            align-self: center;
            height: 103px;
            width: 106px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <img src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716717495/project-pemweb/wm1p31ly4jzn1xleizsp.png" alt="Logo">
        <span class="fa fa-power-off"></span>
    </nav>
    <div class="container">
        <img class="logo" src="https://res.cloudinary.com/dq11ayv02/image/upload/v1716725390/project-pemweb/logo.png" alt="Logo">
        <h1>Login Karyawan</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="text" id="nama" name="nama" placeholder="Username" value="{{ old('nama') }}" required>
            </div>
            <div class="form-group">
                <input type="password" id="id" name="id" placeholder="Password" value="{{ old('id') }}" required>
            </div>
            @error('nama')
                <div  class="form-group">{{ $message }}</div>
            @enderror
            @error('id')
                <div  class="form-group">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
</body>
</html>