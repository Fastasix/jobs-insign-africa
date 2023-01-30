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
        <div class="first-part-2">
            <div class="job-search-section">

            </div>
        </div>
    </section>
@section('footer')
@endsection
</body>
</html>
