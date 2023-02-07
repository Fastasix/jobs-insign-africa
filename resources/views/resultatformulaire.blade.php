@extends('template')
@section('navbar')
@endsection
@section('contenu')

<div>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>

@endsection
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/resultatformulaire.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
<script>
