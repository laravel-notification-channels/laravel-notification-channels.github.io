<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/prism.css">
    <link rel="stylesheet" href="/assets/css/all.css">
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P62952"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P62952');</script>
<!-- End Google Tag Manager -->

@if($currentUrlPath == '/')
    <div class="wow">
        <h1>Laravel Notification Channels</h1>
        <h2>A collection of custom drivers for Laravel 5.3</h2>
        <a href="https://github.com/laravel-notification-channels">
            GitHub
        </a>
        <i>&nbsp&nbsp.&nbsp&nbsp</i>
        <a href="https://packagist.org/packages/laravel-notification-channels">
            Packagist
        </a>
    </div>
@else
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://avatars1.githubusercontent.com/u/20937037?v=3&s=200"
                         alt="Laravel Notification Channels">

                    <h3>Laravel Notification Channels</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-default" href="https://github.com/laravel-notification-channels">
                        <span class="icon"><i class="fa fa-fw fa-github"></i></span>
                        <span>GitHub</span>
                    </a>

                    <a class="btn btn-default" href="https://packagist.org/packages/laravel-notification-channels/">
                        <span class="icon"><i class="fa fa-fw fa-archive"></i></span>
                        <span>Packagist</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="container">

    <div class="row">
        <div class="col-md-2">
            @include('_includes.sidebar')
        </div>
        <div class="col-md-10 realContent">
            @yield('body')
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="content">
            &copy; Copyright {{date('Y')}} Laravel Notification Channels
        </div>
    </div>
</footer>

<script src="/assets/prism.js"></script>
</body>
</html>
