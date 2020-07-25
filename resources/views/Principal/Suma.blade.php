<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/1000855.svg') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body><br>
<div class="container">
    <a href="{{ route('Login') }}">Ingresar</a>
    <a href="{{ route('Registro') }}">Registrate</a>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('/') }}">Mi Mercado</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Compras') }}">Compras</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Historia') }}">Hisotrial</a>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

            <div class="row row-cols-1 row-cols-md-3">
{{--                @foreach ($products as $pro)--}}
                    <div class="col mb-4">
                        <div class="card">
                            <img src="images/20200723090288.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
{{--                                <h5 class="card-title">{{ $pro->nombres }}</h5>--}}
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Hacer pedido</a>
                            </div>
                        </div>
                    </div>
{{--                @endforeach--}}
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>









































