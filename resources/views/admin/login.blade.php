<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login-admin.css')}}">
    <title>Login</title>
</head>
<body>
<form action="{{route('login.admin')}}" method="post">
    @csrf
<div class="container" onclick="onclick">
    <div class="top"></div>
    <div class="bottom"></div>
    <div class="center">
        <h2>Please Sign In</h2>
        <input type="email" name="username" placeholder="Email"/>
        <input type="password" name="password" placeholder="Password"/>
        <button type="submit">Login</button>
        <h2>&nbsp;</h2>
    </div>
</div>
</form>
</body>
</html>
