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
                <div class="logo"></div>
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
                        <h3>Login to account</h3>

                        <!-- Menampilkan alert error jika ada -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                                <a href="{{ route('password.request') }}">Forget password?</a>

                            </div>
                        </form>

                        <div class="other-links social-with-title">
                            <div class="text">Or login with</div>
                            <a href="{{ route('google.login') }}"><i class="fab fa-google"></i>Google</a>
                        </div>
                        <div class="page-links">
                            <a href="{{ route('register') }}">Register new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL UNTUK NOTIFIKASI LOGIN GAGAL -->
    <div class="modal fade" id="loginErrorModal" tabindex="-1" role="dialog" aria-labelledby="loginErrorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="loginErrorLabel">Login Gagal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session('error') ?? 'Akun belum terdaftar atau data tidak valid.' }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pastikan jQuery dan Bootstrap loaded dengan benar -->
    <script src="iofrm/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="iofrm/js/main.js"></script>

    <!-- SCRIPT UNTUK TAMPILKAN MODAL JIKA ADA ERROR -->
    @if(session('error'))
    <script>
        $(document).ready(function () {
            $('#loginErrorModal').modal('show');
        });
    </script>
    @endif
</body>
</html>
