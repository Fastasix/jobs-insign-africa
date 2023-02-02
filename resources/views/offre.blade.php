@extends('template')
@section('navbar')
@section('contenu')

<section class="home">
    <div class="position-container-offre">
        <div class="title-container-offer">
            <div class="title-position-offer">Descriptif de l'offre : {{$offreid->titre}}</div>
            <div class="offer-reference"> Référence de l'offre : {{$offreid->reference_offre}}</div>
        </div>
        <div class="">
            <div class=""></div>
        </div>
    </div>
</section>

@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/offre.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
