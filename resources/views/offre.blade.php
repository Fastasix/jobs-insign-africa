@php
    $offreidpre = $offreid->id - 1;
    $offreidsuiv = $offreid->id + 1;
    $iddeoffre = $offreid->id;
@endphp
@extends('template')
@section('navbar')
@endsection
@section('contenu')
<section class="home">
    <div class="position-container-offre">
        <div class="title-container-offer">
            <div class="title-position-offer">Descriptif de l'offre : {{$offreid->titre}}</div>
            <div class="offer-reference"> Référence de l'offre : {{$offreid->reference_offre}}</div>
            <div class="offer-country"> Pays : {{$offreid->pays}}</div>
            <div class="apply-day-offer"> Date d'échéance : {{$offreid->date_echeance}}</div>
            <div class="created-date"> Date d'émission : {{$offreid->date_emission}}</div>
        </div>
        <div class="text-position-offer">
            <div class="title-text">Descriptif du poste :</div>
            <div class="text-offer">{{$offreid->description_poste}}</div>
            <div class="apply-offer-button-position">
                <form action="{{route('postuleroffre', [$iddeoffre])}}" method="POST">
                    @csrf
                <div class="offer-apply-button"><input type="submit" value="Je postule" class="no-decoration"></div></form>
                <div class="position-back-for-button">
                        <a href="{{route('detailoffre', [$offreidpre])}}"><img src="{{asset('assets/image/left-arrow.png')}}" alt="backward-arrow" title="Offre précédente"></a>
                        <a href="{{route('detailoffre', [$offreidsuiv])}}"><img src="{{asset('assets/image/right-arrow.png')}}" alt="forward-arrow" title="Offre suivante"></a>
                </div>
            </div>
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
    link.href = "{{asset('assets/css/offre.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
