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
<section>
<nav class="nav-menu">
    <div class="menu-select">
        <div class="home-link"><a href="{{route('accueil')}}"><img src="{{asset('assets/image/logo.png')}}" alt="logo"></a></div>
    </div>
    <div class="menu-level">
        <ul class="list-menu">
            <li><a href="#" class="link-underline-eraser">Qui sommes nous ?</a></li>
            <li><span class="separate-black-line"></span></li>
            <li><a href="#" class="link-underline-eraser">Nos métiers</a></li>
            <li><span class="separate-black-line"></span></li>
            <li><a href="#" class="link-underline-eraser">Postuler à une offre</a></li>
            <li><span class="separate-black-line"></span></li>
            <li><a href="#" class="link-underline-eraser">Déposer une candidature spontanée</a></li>
        </ul>
    </div>
</nav>
</section>
@show
@section('footer')
<section>
<footer class="footer-class">
    <div class="footer-end">
        <div class="footer-copyright">
            <p>@ copyright Insign Africa</p>
        </div>
        <div class="footer-social-media">
            <a href="https://www.youtube.com/@insignafrica3816">
            <img src="{{asset('assets/image/youtube.png')}}" alt="youtube"></a>
        </div>
    </div>
</footer>
<section>
@show
</body>
</html>
