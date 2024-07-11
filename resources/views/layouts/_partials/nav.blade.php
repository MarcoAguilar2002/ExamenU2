<style>
    .activo1 {
        background-color: #ffa500; /* Color de fondo para Ingreso */
    }
    .activo2 {
        background-color: #ffff00; /* Color de fondo para Listado */
    }
    .activo1 a, .activo2 a {
        color: black;
        font-size: 1.1rem;
        transition: color 0.3s ease, font-size 0.3s ease;
        font-weight: bold;
    }
    .nav-link {
        color: white !important; /* Color del texto por defecto */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
    .nav-item {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
    .navbar-nav {
        width: 100%;
    }
    .col-3 {
        padding: 0;
    }
</style>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Examen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav w-100">
                <li class="nav-item col-3">
                    <div class="w-100">
                        <a class="nav-link {{ request()->routeIs('home') ? 'activo' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </div>
                </li>
                <li class="nav-item col-3">
                    <div class="w-100 {{ request()->routeIs('ingreso*') ? 'activo1' : '' }}">
                        <a class="nav-link" href="{{ route('ingreso') }}">Ingreso</a>
                    </div>
                </li>
                <li class="nav-item col-3">
                    <div class="w-100 {{ request()->routeIs('alumnos*') ? 'activo2' : '' }}">
                        <a class="nav-link" href="{{ route('alumnos.index') }}">Listado</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
