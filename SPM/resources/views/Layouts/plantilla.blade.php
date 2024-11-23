<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">    
    <title>SPM</title>
</head>
<body style="height: 100%">
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange text-center" style="background-color:orange">
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="/">Sport Performance Metrics</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#proposito">{{__('Proposito')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#equipo">{{__('Equipo')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#beneficios">{{__('Beneficios')}}</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      @yield('contenido')

      <footer class="bg-dark text-orange pt-4" style="color: orange">
        <div class="container">
        
            <div class="text-center">
                <h5 class="text-uppercase">{{__('Sport Performance Metrics') }}</h5>
                <p>{{__('Descubre tu mejor potencial con SPM') }}.</p>
                <p>&copy; {{__('SPM') }}, {{ date('Y') }}</p>{{-- Logica sacada de chat, entendida que llamamos una funcion de php para sacar el dia, mes y año --}}
            </div>
        </div>
    </footer>
</body>
</html>