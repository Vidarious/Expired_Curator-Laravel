<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Curator - @yield('title')</title>

        <!-- Font Awesome -->
        <link href="css/vendor/curator/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="css/vendor/curator/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/vendor/curator/mdb.min.css" rel="stylesheet">

        <!-- Custom styles -->
        <link href="css/vendor/curator/style.css" rel="stylesheet">

    </head>

    <body>

        <header>
            @include('curator::layouts.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('curator::layouts.footer')
        </footer>
        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="js/vendor/curator/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/vendor/curator/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/vendor/curator/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/vendor/curator/mdb.min.js"></script>

    </body>

</html>
