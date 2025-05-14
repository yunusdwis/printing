<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/iofrm-theme20.css') }}">
</head>

<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="">
                <div class="logo">
                    <!-- Optional logo can be added here -->
                </div>
            </a>
        </div>
        <div class="iofrm-layout">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('iofrm/images/graphic3.svg') }}" alt="Illustration">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Forget Password</h3>
                        <p>Please enter your email address:</p>
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input class="form-control" type="password" name="password" placeholder="New Password" required>
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm New Password" required>
                            <div class="form-button">
                                <button type="submit" class="ibtn">Reset Password</button>
                            </div>
                        </form>

                        <div class="page-links" style="margin-top: 20px;">
                            <a href="{{ route('login') }}">Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('iofrm/js/jquery.min.js') }}"></script>
    <script src="{{ asset('iofrm/js/popper.min.js') }}"></script>
    <script src="{{ asset('iofrm/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('iofrm/js/main.js') }}"></script>
</body>

</html>
