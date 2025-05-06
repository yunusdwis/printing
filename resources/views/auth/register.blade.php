<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="iofrm/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="iofrm/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="iofrm/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="iofrm/css/iofrm-theme20.css">
</head>

<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                   
                </div>
            </a>
        </div>
        <div class="iofrm-layout">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="iofrm/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register new account</h3>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required value="{{ old('name') }}">
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required value="{{ old('email') }}">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>

                        <div class="other-links social-with-title">
                            <div class="text">Or register with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a>
                        </div>
                        <div class="page-links">
                        <a href="{{ route('login') }}">Login to account</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="iofrm/js/jquery.min.js"></script>
    <script src="iofrm/js/popper.min.js"></script>
    <script src="iofrm/js/bootstrap.bundle.min.js"></script>
    <script src="iofrm/js/main.js"></script>
</body>

</html>
