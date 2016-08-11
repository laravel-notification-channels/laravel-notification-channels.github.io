<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.1.2/css/bulma.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

<nav class="nav">
    <div class="nav-left">
        <a class="nav-item is-brand" href="#">
            <img src="https://avatars1.githubusercontent.com/u/20937037?v=3&s=200" alt="Laravel Notification Channels">
        </a>
    </div>

    <span class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
    </span>

    <div class="nav-center">
        <h1 class="nav-item title is-4">Laravel Notification Channels</h1>
    </div>

    <div class="nav-right nav-menu">
        <span class="nav-item">
          <a class="button">
            <span class="icon"><i class="fa fa-github"></i></span>
            <span>Github</span>
          </a>
        </span>
        <span class="nav-item">
          <a class="button">
            <span class="icon"><i class="fa fa-archive"></i></span>
            <span>Packagist</span>
          </a>
        </span>

    </div>
</nav>

@yield('body')

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            &copy; Copyright {{date('Y')}} Laravel Notification Channels
        </div>
    </div>
</footer>

</body>
</html>
