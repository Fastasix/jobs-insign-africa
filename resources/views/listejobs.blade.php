@extends('template')
@section('navbar')
@endsection
@section('contenu')

<section class="home">
    <div class="first-container">
        <div class="page-title">
            <h2>Postuler à une offre</h2>
        </div>
        <div class="hr-style-cut"></div>
        <div class="information-message">
            <h3>Trouvez ci-dessous la liste de nos offres disponible à notre agence</h3>
        </div>
        <div class="hr-style-cut-2"></div>
    </div>
    <div class="job-search-section">
        <div class="title-section-search-job"><h2>Je recherche une offre</h2></div>
        <div class="hr-style-cut"></div>
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
    </div>
    <div class="second-container">
        <div class="job-title">
            @if ($offrescount >= 1)
            <h2>Voici nos offres disponibles !</h2>
            @else
            <h2>Nous n'avons plus d'offres disponible, revenez plus tard !</h2>
            @endif
        </div>
        <div class="hr-style-cut-3"></div>
            <div class="position-job">
                @if ($offrescount >= 1)
                @foreach($listeoffre as $offres)
                <div class="job">
                    <div class="job-title"><h3>{{$offres->titre}}</h3></div>
                    <div class="job-contrat"><h4>Contrat {{$offres->contrat}}</h4></div>
                    <div class="job-country"><h5>Pays {{$offres->pays}}</h5></div>
                    <div class="job-apply-date"><h5> Date d'échéance : {{$offres->date_echeance}}</h5></div>
                    <div class="job-created-date"><h5>Date d'émission : {{$offres->date_emission}}</h5></div>
                    <div class="job-submit">
                        <form action="{{route('detailoffre', [$offres->id])}}" method="get">
                            <input type="submit" name="{{$offres->id}}" class="link-format-cross" value="+">
                        </form>
                    </div>
                </div>
                @endforeach
                @else
                <div class="no-more-job"><h2>Il y a actuellement plus de jobs disponible. Veuillez revenir plus tard pour en trouver de nouveau.</h2></div>
                @endif
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
    link.href = "{{asset('assets/css/listejobs.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
