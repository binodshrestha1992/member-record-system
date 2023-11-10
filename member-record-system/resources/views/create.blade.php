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

    <div class="main-update-content">
            <div class="left-update-content">
                <img src="{{asset('images/create_admin1.png')}}" alt="create_user">
            </div>
            <div class="middle-update-content">
                <h2 class='create_user'>Create an Account</h2>
                <form class='login-form' action="/adduser" method="POST">
            @csrf
            @method('POST')
            <label for="forname">Name</label>
            <input type="name" name="name" placeholder="Enter Name" required>
            <label for="foremail">Email</label>
            <input type="text" name="email" placeholder="Enter Email" required>
            <label for="forpassword">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" value="Create an Account">
            <p>Go back to <a href="/">login</a></p>
        </form>
            </div>
            <div class="right-update-content">
                <img src="{{asset('images/adduser.png')}}" alt="create_user">
            </div>
        </div>
          </body>
</html>
