<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laradevsbd - Tutorial It Language Site | See Demo Example - laradevsbd.com</title>
    <meta name="description" content="ItSolutionstuff website focuses on all web language and framework tutorial PHP, Laravel, Codeigniter, Nodejs, API, MySQL, AJAX, jQuery, JavaScript, Demo">
    <meta name="keywords" content="it solution stuff of it programming language, php, laravel 5, jquery, javascript, mysql, git, html, css, MySQL, HTML, CSS, git, AJAX, bootstrap,  jQuery, JavaScript, Designing, Demo, itsolutionstuff.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-base-url" content="{{ url('http://localhost/laravel_blog') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <app></app>
    </div>

    <script>
        function notifyMe() {
            // Let's check if the browser supports notifications
            if (!("Notification" in window)) {
                console.log("This browser does not support desktop notification");
            }

            // Let's check whether notification permissions have alredy been granted
            else if (Notification.permission === "granted") {
                // If it's okay let's create a notification
                var notification = new Notification("Hi there!");
            }

            // Otherwise, we need to ask the user for permission
            else if (Notification.permission !== 'denied' || Notification.permission === "default") {
                Notification.requestPermission(function (permission) {
                    // If the user accepts, let's create a notification
                    if (permission === "granted") {
                        var notification = new Notification("Hi there!");
                    }
                });
            }

            // At last, if the user has denied notifications, and you
            // want to be respectful there is no need to bother them any more.
        }
        if (window.Notification) {
            console.log('Notifications are supported!');
        } else {
            alert('Notifications aren\'t supported on your browser! :(');
        }
        notifyMe();
    </script>
</body>
</html>
