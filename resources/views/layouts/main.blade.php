<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!-- CSS Padrão -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico">

    </head>
    <body>
        <header class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light container">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navibar-brand">
                        <img src="/img/logo.png" alt="CAD Clientes">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Clientes</a>
                        </li>

                        <li class="nav-item">
                            <a href="/clientes/cadastrar" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            @if(session('msg'))
            <p class="mensagem">{{ session('msg') }}</p>
            @endif
            <div class="container">
                <div class="row mb-3 mt-4">
                    <div class="col-md-12">
                    <h3>@yield('titulo-pagina')</h3>
                    </div>
                </div>
            </div>

            <div class="container container-conteudo">
                @yield('conteudo')                
            </div>
        </main>

        <footer>
            <p>Cad Clientes &copy; 2022 - By 
                <a href="https://www.linkedin.com/in/carlos-eduardo-vieira-1a740a1a2/" target="_blanc">
                    Carlos Eduardo Vieira <ion-icon name="logo-linkedin"></ion-icon></a>
            </p>
        </footer>
        
        <!-- Ion Icon -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>
