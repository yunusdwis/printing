<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm/css/iofrm-theme20.css') }}">
</head>

<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="/">
                <div class="logo">
                   
                </div>
            </a>
        </div>
        <div class="iofrm-layout">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('iofrm/images/graphic3.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <form action="{{ route('otp.verify') }}" method="POST">
                            @csrf
                            <h3>Email Verification</h3>
                            <p>Please enter the 6-digit verification code sent to your email.</p>
                            <div class="form-group">
                                <input class="form-control" type="text" name="otp" maxlength="6" placeholder="Enter 6-digit OTP" required>
                            </div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Verify</button>
                            </div>
                        </form>
                        <div class="page-links">
                            <p>Didn't receive the code?
                                <form action="{{ route('otp.resend') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" style="background: none; border: none; color: #007bff; text-decoration: underline; cursor: pointer;">Resend Code</button>
                                </form>
                            </p>
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
