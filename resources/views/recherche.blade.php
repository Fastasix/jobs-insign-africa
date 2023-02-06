@extends('template')
@section('navbar')
@endsection
@section('contenu')
<section class="home">
    <div class="search-result">
        <div class="search-result-title">
            @if (!empty($research) && count($research) > 0)
            <h2 class="search-result-title-position">
                Résultat de recherche pour :
                    "{{$fonctioncles}}"
                    au
                    "{{$payscles}}"
            </h2>
            @else
            <h2 class="search-result-title-position">
                Aucun résultat. Essayer de rentrer d'autres informations
            </h2>
            @endif
        </div>
        <div class="hr-style-cut"></div>
        <div class="title-new-search-suggestion">
            <h3>Effectuer une nouvelle recherche :</h3>
        </div>
        <div class="hr-style-cut-2"></div>
        <div class="select-positions">
            <form action="{{route('recherchejob')}}" method="POST">
                @csrf
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
        <div class="search-result-presentation">
            @foreach($research as $resultshow)
            <div class="container-research">
                <div class="research-title"><h2>Titre : {{$resultshow->titre}}</h2></div>
                <div class="research-contract"><h3>Type de contrat : {{$resultshow->contrat}}</h3></div>
                <div class="research-pays"><h4>Pays : {{$resultshow->pays}}</h4></div>
                <div class="apply-date"><h4>Date d'échéance : {{$resultshow->date_echeance}}</h4></div>
                <div class="created-date"><h4>Date d'émission : {{$resultshow->date_emission}}</h4></div>
                <div class="position-cross-plus">
                    <form action="{{route('detailoffre', [$resultshow->id])}}" method="get">
                        <input type="submit" name="{{$resultshow->id}}" class="link-format-cross" value="+">
                    </form>
                </div>
            </div>
            @endforeach
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
    link.href = "{{asset('assets/css/recherche.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
