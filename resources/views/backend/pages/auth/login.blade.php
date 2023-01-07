{{-- Login HTML --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('/login/signup.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>
        <form>
            <label>Email</label>
            <input type="email" placeholder="" />
            <label>Password</label>
            <input type="password" placeholder="" />
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
