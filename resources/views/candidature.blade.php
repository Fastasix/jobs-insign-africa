@extends('template')
@section('navbar')
@section('contenu')

<section class="home">
    <div class="form-container">


    </div>
</section>

@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/candidature.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
