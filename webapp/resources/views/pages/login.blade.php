<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/vendor.css">
    <!-- Theme initialization -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
        var themeName = themeSettings.themeName || '';
        if (themeName)
        {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
        }
        else
        {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
        }
    </script>
</head>
<body>
<div class="auth">
    <div class="auth-container">
        <div class="card">
            <header class="auth-header">
                <h1 class="auth-title">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div> ModularAdmin </h1>
            </header>
            @if (count($errors))
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="auth-content">
                <p class="text-center">INICIE SESION PARA CONTINUAR</p>
                {!! Form::open(['url' => '/authenticate', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Correo Electronico'); !!}
                        {!! Form::text('email', '', ['class' => 'form-control underlined', 'placeholder' => 'Ingrese su Email']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña'); !!}
                        {!! Form::password('password', ['class' => 'form-control underlined', 'placeholder' => 'Ingrese su Contraseña']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Iniciar Sesión', ['class' => 'btn btn-block btn-primary']); !!}
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-center">¿No tiene una cuenta?
                            <a href="signup.html">Crear cuenta nueva</a>
                        </p>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
            <a href="index.html" class="btn btn-secondary btn-sm">
                <i class="fa fa-arrow-left"></i> Volver a la página principal </a>
        </div>
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script>
    (function(i, s, o, g, r, a, m)
    {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-80463319-4', 'auto');
    ga('send', 'pageview');
</script>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>
</html>