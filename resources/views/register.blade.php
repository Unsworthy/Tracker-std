<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/smk-pi.png') }}" alt="Logo SMK PI" class="logo"> 
        </div>
    </header>

    <div class="container">
        <div class="signup-section">
            <h2>WELCOME BACK!</h2>
            <p>To keep connected with us please login with your personal info</p>
            <a href="{{ route('login') }}"><button class="signup-btn">Sign In</button></a>
        </div>

        <div class="login-section">
            <h1>CREATE YOUR ACCOUNT</h1>
            <div class="social-login">
                <a href="#" class="sosial-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="sosial-icon"><i class="fab fa-google"></i></a>
            </div>
            <p>or</p>

            <!-- Form Register -->
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <input type="hidden" name="roles_id" value="3">

                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                @error('username')
                    <small class="error">{{ $message }}</small>
                @enderror

                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <small class="error">{{ $message }}</small>
                @enderror

                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <small class="error">{{ $message }}</small>
                @enderror

                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

                <button type="submit" class="signup-btn2">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
