<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{!! asset('css/inps/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('/fonts/inps/font-awesome/css/font-awesome.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/inps/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/inps/style.css') !!}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form  method="POST" action="{{ route('login') }}" class="m-t"  role="form" >
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                </div>
                <input type="submit" class="btn btn-primary block full-width m-b" value="Ingresar">

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{!! asset('js/inps/jquery-3.1.1.min.js') !!}"></script>
    <script src="{!! asset('js/inps/popper.min.js') !!}"></script>
    <script src="{!! asset('js/inps/bootstrap.js') !!}"></script>

</body>

</html>
