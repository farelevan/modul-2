<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
        body {
            font-family:sans-serif;
            background-color: #e4e4e4;
            margin: 0;
            padding: 20;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;

        }
        h2 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 5px 5px -9px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            background-color: #0c76ef;
            color: #fff;
            padding: 10px 120px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        form p {

        }
    </style>
</head>
<body>
    <div class="login-container">
        <a href="https://universitaspertamina.ac.id/"><img src="Logo-UP.png" alt="Logo" width="200" height="auto"></a>
        <form action="{{route('postlogin')}}" method="post">
         @csrf
            <input type="text" id="username" name="username" required placeholder="username"><br>
            <input type="password" id="password" name="password" required placeholder="password"><br><br>

            <button type="submit" class="btn btn-primary btn-block" >Login</button>
        </form>
    </div>
</body>
</html>
