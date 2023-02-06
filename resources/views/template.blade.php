<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Insign Africa Jobs</title>
  <link rel="shortcut icon" href="{{asset('assets/image/logo-insign.svg')}}" type="image/x-icon">
  <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">
</head>
<body>
<section>
<nav class="nav-menu">
    @yield('navbar')
    <div class="menu-select">
        <div class="home-link"><a href="{{route('accueil')}}"><img src="{{asset('assets/image/logo.png')}}" alt="logo" class="home-icon-style"></a></div>
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
@yield('contenu')
<section>
<footer class="footer-class">
    @yield('footer')
        <div class="footer-copyright">@ copyright Insign Africa</div>
        <div class="footer-social-media">
            <a href="https://www.youtube.com/@insignafrica3816">
                <img src="{{asset('assets/image/youtube.png')}}" alt="youtube">
            </a>
        </div>
    </div>

</section>
</body>
</html>
