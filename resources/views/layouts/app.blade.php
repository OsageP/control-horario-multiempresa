<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Control Horario')</title>

    <!-- Bootstrap o Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet">

    <!-- Livewire o Alpine.js opcional -->
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Control Horario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @else
                        @if(auth()->user()->role?->slug === 'superadmin')
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.superadmin') }}">Superadmin</a></li>
                        @elseif(auth()->user()->role?->slug === 'admin_empresa')
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.admin_empresa') }}">Admin Empresa</a></li>
                        @elseif(auth()->user()->role?->slug === 'encargado')
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.usuario') }}">Encargado</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.usuario') }}">Usuario</a></li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    @stack('scripts')
</body>
</html>