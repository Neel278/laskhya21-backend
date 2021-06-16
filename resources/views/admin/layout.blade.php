<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        @yield('head')
</head>
<body>
    @if (auth()->user())
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">
            <a href="/admin/dashboard" class="navbar-brand">Dashboard</a>
        </span>
        <a type="button" class="btn btn-primary my-2 my-sm-0" href="/admin/logout">Logout</a>
    </nav>
    @endif
    @yield('body')
</body>
</html>
