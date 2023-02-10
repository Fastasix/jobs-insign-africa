@extends('template')
@section('navbar')
@endsection
@section('contenu')

<section class="home">
    <div class="main-container">
        <div class="view-title">
            <h2>Qui sommes nous ?</h2>
        </div>
        <div class="hr-style-cut"></div>
        <div class="view-text">
            <p class="paragraph-style">
                <strong>
                    Insign Africa est une agence digitale créée en 2004. L'agence s'est construite en Afrique à partir des modèles rencontrés par son équipe à travers le monde. Elle est conçue pour s'adapter aux entreprises Ouest Africaines, à l'échelle d'un sous-continent, avec sa diversité et ses sensibilités.
                </strong>
            </p>
            <p class="paragraph-style">
                <strong>
                    Aujourd'hui, l'agence s'est étendue à l'Europe (France) et au Etats Unis.
                </strong>
            </p>
            <p class="paragraph-style">
                <strong>
                    Nous travaillons pour tous types d'acteurs institutionnels, publics et privés. Parmi les nombreuses entreprises qui nous font confiance, nous comptons la plupart des grands comptes présents au Sénégal (Voir nos réfèrences).
                </strong>
            </p>
            <p class="paragraph-style">
                <strong>
                    Orientés recommandations stratégiques, nous avons une vision globale de la communication digitale de nos clients en assurant des résultats immédiats et des bénéfices sur le long terme. Nous internalisons également un grand nombre de fonctions pour une meilleure réactivité face à nos clients. Création graphique, Développement, Rédactionnel, Gestion de projet sont à la base de notre savoir.
                </strong>
            </p>
            <p class="paragraph-style">
                <strong>
                    Nous sommes fiers de notre équipe qui rassemble des employés jeunes, dynamiques et toujours enthousiastes à travailler avec les enseignes les plus prestigieuses.
                </strong>
            </p>
            <p class="paragraph-style">
                <strong>
                    Rejoindre l'agence est pour vous un moyen de participer à une aventure qui dépasse les frontières et les cultures tout en s'assurant d'évoluer dans un contexte de haut niveau d'expertise.
                </strong>
            </p>
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
    link.href = "{{asset('assets/css/quisommesnous.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
