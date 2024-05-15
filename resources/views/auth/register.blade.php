<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 20px;
            border-radius: 10px;
            width: 400px; 
        }
        .form-group {
            margin-bottom: 20px; 
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            height: 40px;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            height: 40px;
        }
        .subtext {
            text-align: center;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">{{ __('Register') }}</div> 
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                        <input id="first_name" type="text" class="form-control" name="first_name" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                        <input id="last_name" type="text" class="form-control" name="last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="student_number" class="form-label">{{ __('Student Number') }}</label>
                        <input id="student_number" type="text" class="form-control" name="student_number" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
                <div class="subtext">Already registered? <a href="{{ route('login') }}">Login</a></div> 
            </div>
        </div>
    </div>
</body>
</html>
