<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->

    @vite(['resources/css/tabler-icons.scss'])


        @yield('page-style')

    </head>



    <body class="font-sans antialiased dark:bg-black dark:text-white/50 overflow-x-hidden ">
        <nav class="">
            <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link"  href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Eigenschappen</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item active" href="Attribute-all">Alle Eigenschappen</a></li>
                    <li><a class="dropdown-item" href="Attribute-create">Maak Eigenschap</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Gerechten</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Product-all">Alle Gerechten</a></li>
                      <li><a class="dropdown-item" href="Product-create">Maak Gerechten</a></li>
                      <li><a class="dropdown-item" href="Product-category">Categorie</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Bestellingen</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item disabled " href="Order-all">Alle Bestellingen</a></li>
                      <li><a class="dropdown-item" href="Order-create">Maak Bestelling</a></li>
                    </ul>
                  </li>
              </ul>
        </nav>

        @yield('content')


    </body>



</html>
