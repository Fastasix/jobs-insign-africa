@extends('template')
@section('navbar')

@section('contenu')

<!DOCTYPE html>
<html>
<head>
    @foreach($research as $liste)<title>Accueil - Recherche job {{$liste->fonction}}</title>@endforeach
    <link rel="stylesheet" href="{{asset('assets/css/accueil.css')}}">
</head>
<body>
    <section class="home">

    </section>

</body>
@section('footer')
@endsection
