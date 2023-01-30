@extends('template')
@section('navbar')

@section('contenu')
<!DOCTYPE html>
<html>
<head>
    <title>Accueil - Job Insign Africa</title>
    <link rel="stylesheet" href="{{asset('assets/css/accueil.css')}}">
</head>
<body>
    <section class="home">
        <div class="div-job-counter">
            <h2 class="counter">Il y a actuellement {{$offrescount}} offres</h2>
        </div>
        <div class="job-search-section">
            <div class="title-section-search-job"><h3>Je recherche une offre</h3></div>
            <div class="separate-black-line-select"></div>
            <div class="select-positions">
                <form action="{{route('recherchejob')}}" method="GET">
                    <select class="select-type-job" name="fonction">
                        <option>Fonctions</option>
                        <option value="Administratif et comptable">Administratif et comptable</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Création Graphique">Création Graphique</option>
                        <option value="Développement">Développement</option>
                        <option value="Rédactionnel">Rédactionnel</option>
                    </select>
                    <select class="select-country-job" name="pays">
                        <option>Pays</option>
                        <option value="Sénégal">Sénégal</option>
                    </select>
                    <input type="submit" value="Recherche" class="search-button">
                </form>
            </div>
        </div>
        <div class="apply-job">
            <div class="apply-job-title"><h4>Je dépose une candidature</h4></div>
            <div class="apply-job-button"><a href="#">Je postule</a></div>
        </div>
        <div class="last-job-posted">
            <div class="last-job-posted-title">
                <h3>Les dernières offres</h3>
            </div>
        </div>
    </section>
@section('footer')
@endsection
</body>
</html>
