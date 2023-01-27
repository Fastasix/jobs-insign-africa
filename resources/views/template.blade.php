<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>template</title>
  <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">
</head>
<body>
    @section('navbar')
    @show
@section('contenu')
<nav class="nav-menu">
    <div class="menu-select">
        <div class="home-link"><img src="{{asset('assets/image/logo.png')}}" alt="logo"></div>
    </div>
    <div class="menu-level">
        <ul class="list-menu">
            <li><a href="#" class="link-underline-eraser">Qui sommes nous ?</a></li>
            <li><span class="separate-black-line"></span></li>
            <li><a href="#" class="link-underline-eraser">Qui sommes nous ?</a></li>
            <li><span class="separate-black-line"></span></li>
            <li><a href="#" class="link-underline-eraser">Qui sommes nous ?</a></li>
            <li><span class="separate-black-line"></span></li>
            <li><a href="#" class="link-underline-eraser">Qui sommes nous ?</a></li>
            <li><span class="separate-black-line"></span></li>
            <li><a href="#" class="link-underline-eraser">Qui sommes nous ?</a></li>
        </ul>
    </div>
</nav>
@show
</body>
</html>
