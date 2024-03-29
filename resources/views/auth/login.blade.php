<!DOCTYPE html>
<html>

<head>
    <title>Silahkan Login</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('loginAsset/images/favicon.ico') }}">
    <!-- Icon Font -->
    <link rel="stylesheet" href="{{ asset('loginAsset/fonts/ionicons/css/ionicons.css') }}">
    <!-- Text Font -->
    <link rel="stylesheet" href="{{ asset('loginAsset/fonts/font.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('loginAsset/css/bootstrap.css') }}">
    <!-- Normal style CSS -->
    <link rel="stylesheet" href="{{ asset('loginAsset/css/style.css') }}">
    <!-- Normal media CSS -->
    <link rel="stylesheet" href="{{ asset('loginAsset/css/media.css') }}">
</head>

<body>

    <main class="cd-main">
        <section class="cd-section index3 visible">
            <div class="cd-content style3">
                <div class="login-box">
                    <div class="login-form-slider">
                        <!-- login slide start -->
                        <div class="login-slide slide">
                            <div class="d-flex height-100-percentage">
                                <div class="align-self-center width-100-percentage">
                                    <form class="floating-form" autocomplete="off" method="POST"
                                        action="{{ route('login') }}">
                                        @csrf
                                        <input type="hidden" name="hak" value="user">
                                        <div class="form-group">
                                            <input type="text" name="NIP" class="form-control">
                                            <label class="label">NIP</label>
                                        </div>
                                        @error('NIP')
                                            <p class="merah">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control">
                                            <label class="label">Password</label>
                                        </div>
                                        @error('password')
                                            <p class="merah">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <input type="submit" class="submit" value="Login">
                                        </div>
                                    </form>
                                    <a href="{{ url('/loginAdmin') }}" class=" btn btn-primary mt-3">Login Admin</a>
                                </div>
                            </div>
                        </div>
                        <!-- login slide end -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="cd-loading-bar" data-scale="1" class="index"></div>
    <!-- JS File -->
    <script src="{{ asset('loginAsset/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('loginAsset/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('loginAsset/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('loginAsset/js/bootstrap.js') }}"></script>
    <script src="{{ asset('loginAsset/js/velocity.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('loginAsset/js/script.js') }}"></script>
</body>

</html>
