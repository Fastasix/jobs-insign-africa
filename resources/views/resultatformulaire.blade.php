@extends('template')
@section('navbar')
@endsection
@section('contenu')
<section class="home">
    <div class="main-container">
        @if ($error == null)
        <div class="result-title-position">
            <div class="result-title"><h2>Votre candidature à bien été envoyé !</h2></div>
        </div>
        <div class="hr-style-cut"></div>
        <div class="result-information-position">
            <div class="result-information"><h3>Merci d'avoir envoyé votre candidature !</h3></div>
        </div>
        <div class="hr-style-cut-2"></div>
        @else
        <div class="result-title-position">
            <div class="result-title"><h2>Désolé, une erreur s'est produite, veuillez réessayé !</h2></div>
        </div>
        <div class="result-information-position">
            <div class="result-information"><h3>Une erreur innatendue s'est passée, retournez vers la page de candidature pour réessayer. L'erreur est la suivante : {{$error}}</h3></div>
        </div>
        @endif
        <div class="home-button">
            <a href="{{route('accueil')}}" class="no-decoration">Retourner à la page d'accueil</a>
        </div>
    </div>
</section>
@endsection
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/resultatformulaire.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
