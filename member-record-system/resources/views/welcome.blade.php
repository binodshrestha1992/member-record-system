<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>Member Record System</title>

        <!-- Fonts -->
    </head>
    <body class="antialiased">
    <div class="login-container">
        <div class="left-container">
            <img src="{{asset('images/event.png')}}" alt="createuser">
        </div>
        <div class="right-container">
        <h2>Login </h2>
        <form class='login-form' action="/login" method="POST">
            @csrf
            @method('POST')
            <label for="foremail">Email</label>
            <input type="text" name="email" placeholder="Enter Email" required>
            <label for="forpassword">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" value="Login">
            <a href="/forgotpassword">Forgot Password?</a>
            <p>Don't have an account ? <a href="/create">Create one</a></p>
        </form>
        </div>
    </div>
          </body>
</html>
