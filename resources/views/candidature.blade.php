<head>
    <link rel="stylesheet" href="{{asset('assets/vendor/intl-tel-input/css/intlTelInput.css')}}">
</head>
@extends('template')
@section('navbar')
@endsection
@section('contenu')
<section class="home">
    <div class="form-container">
        <div class="form-title">
            <h2>Formulaire de recrutement</h2>
        </div>
        <div class="hr-style-cut"></div>
        <div class="information-add-form">
            <h3>Veuillez insérer les informations nécessaire à votre candidature dans le formulaire suivant :</h3>
        </div>
        <div class="hr-style-cut-2"></div>
        <div class="form-disposition">
            <form action="{{route('resultatformulaire')}}" method="POST">
                @csrf
                <div class="form-separation-1">
                    <div><label>Civilité* : M.<input type="radio" name="civilite" value="M" id="check1" required> Mme. <input type="radio" name="civilite" value="Mme" id="check2"></label></div>
                    <div><label>Nom* : </label><input type="textbox" name="lastname" required></div>
                    <div><label>Prénom* : </label><input type="textbox" name="name" required></div>
                    <div><label>Email* : </label><input type="email" name="email" required></div>
                </div>
                <div class="form-separation-2">
                    <div><label>Téléphone : </label><input type="tel" id="phone" name="phone"></div>
                    <div><label>Date de naissance* : </label><input type="date" name="datenaissance" required></div>
                    <div><label>Pays de résidence* : </label><input type="textbox" name="paysresidence" required></div>
                    <div><label>Nationnalité* : </label><input type="textbox" name="nationalite" required></div>
                    @if (isset($offredeid))
                    <input type="hidden" name="iddeloffre" value="{{$offredeid->id}}">
                </div>
        </div>
                <div class="submit-position"><input type="submit" value="Envoyer votre candidature" class="submit-style"></div>
            </form>
            @else
                    </div>
                </div>
                    <div class="submit-position"><input type="submit" value="Envoyer votre candidature" class="submit-style"></div>
                </form>
            @endif
    </div>
</section>
@endsection
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/candidature.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
{{-- node_modules\jquery\src\jquery.js --}}



