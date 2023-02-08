
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>L2H LOCATION | Home</title>

        <link rel="stylesheet" href="{{ mix("css/app.css") }}" >

        @livewireStyles
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            
            <x-topnav />

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="index3.html" class="brand-link">
                    <span class="brand-text font-weight-bold" style="font-size: 1em;"><b>L2H LOCATION</b></span>
                </a>

                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset("images/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ userFullName() }}</a>
                        </div>
                    </div>

                    <x-menu />

                </div>
            </aside>

            <div class="content-wrapper">

                <div class="content">
                    <div class="container-fluid">
                        @yield("contenu")
                    </div>
                </div>
            </div>

            <x-sidebar />

            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline">Anything you want</div>
                <strong>Copyright &copy; 2023 <a href="https://l2h-services.com/">l2h-services.com</a>.</strong> All rights reserved.
            </footer>
        </div>

        <script src="{{ mix("js/app.js") }}"></script>

        @livewireScripts
    </body>
</html>