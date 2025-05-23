<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yiel('title','CRUD')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
        <div class="container-fluid">
            <a class="navbar-brand">ProyectoLA2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link text-dark">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <main role="main" class="pb-3">
        @yield('content') <!-- Aquí se inyecta el contenido específico de cada vista -->
    </main>
</div>

<footer class="border-top footer text-muted">
    <div class="container">
        &copy; 2024 - ProyectoLA2 - <a>Privacy</a>
    </div>
</footer>
<script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>