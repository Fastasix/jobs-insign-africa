@extends('template')
@section('contenu')
    <section class="home">
        <div class="div-job-counter">
            @if ($offrescount >= 1)
            <h2 class="counter">Il y a actuellement <span class="offer-number"><div class="offer-number-position">{{$offrescount}}</div></span> offres</h2>
            @else
            <h2 class="counter">Il y a actuellement aucune offres</h2>
            @endif
        </div>
        <div class="two-div-search-and-apply">
            <div class="job-search-section">
                <div class="title-section-search-job"><h3>Je recherche une offre</h3></div>
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
            <div class="apply-job">
                <div class="apply-job-title"><h4>Je dépose une candidature</h4></div>
                <div class="hr-style-cut-2"></div>
                <div class="apply-job-button"><a href="{{route('candidature')}}" class="a-text-decoration-none">Je postule</a></div>
            </div>
        </div>
        <div class="position-last-job-container">
            <div class="last-job-posted">
                <div class="last-job-posted-title">
                    <h3>Les dernières offres</h3>
                </div>
                <div class="hr-style-cut-3"></div>
                <div class="position-last-job">
                    @foreach($rechercherecent as $troisjobs)
                    <div class="last-job">
                        <div class="last-job-title"><h3>{{$troisjobs->titre}}</h3></div>
                        <div class="last-job-contrat"><h4>Contrat {{$troisjobs->contrat}}</h4></div>
                        <div class="last-job-country"><h5>Pays {{$troisjobs->pays}}</h5></div>
                        <div class="last-job-apply-date"><h5> Date d'échéance : {{$troisjobs->date_echeance}}</h5></div>
                        <div class="last-job-created-date"><h5>Date d'émission : {{$troisjobs->date_emission}}</h5></div>
                        <form action="{{route('detailoffre', [$troisjobs->id])}}" method="get">
                        <input type="submit" name="{{$troisjobs->id}}" class="link-format-cross" value="+">
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/accueil.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
