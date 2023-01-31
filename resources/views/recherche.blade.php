@dd($research)
@extends('template')
@section('navbar')
@endsection
@section('contenu')
<!DOCTYPE html>
<html>
<head>
    <title>Accueil - Recherche job</title>
    <link rel="stylesheet" href="{{asset('assets/css/accueil.css')}}">
</head>
<body>
    <section class="home">
        @foreach($research as $liste)
            <p>{{$liste->titre}}</p>
        @endforeach
    </section>
</body>
@section('footer')
@endsection
