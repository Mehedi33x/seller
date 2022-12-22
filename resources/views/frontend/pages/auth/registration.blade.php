<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up | By Code Info</title>
    <link rel="stylesheet" href="{{ url('/login/signup.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <form action="{{ route('signup') }}" method="post">
            @csrf
            <div class="signup-box">
                <h1>Sign Up</h1>
                <h4>It's free and only takes a minute</h4>
                <form>
                    <label>Name</label>
                    <input type="text" placeholder="" name="name" />

                    <label>Email</label>
                    <input type="email" placeholder="" name="email" />

                    <label>Password</label>
                    <input type="password" placeholder="" name="password" />

                    <label>Contact</label>
                    <input type="tel" placeholder="" name="contact" />

                    <label>Address</label>
                    <input type="text" placeholder="" name="address" />

                    <label for="Inputselect" name="designation">Please choose your role</label>
                    <select name='designation' class="form-control">
                        <option value="Customer">Customer</option>
                        <option value="Seller">Seller</option>
                    </select>
                    <button type="submit">Register</button>
                </form> <br>
                <p class="para-2">
                    Already have an account?<a href="{{ route('login') }}"> Login here</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>
