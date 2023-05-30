@extends('layouts.app')
 @section('content')
 <div class="meeta-about-section section-padding">
    <div class="container">

        <div class="row gy-5 align-items-center">
            <div class="col-lg-7">

                <!-- About Images Start -->
                <div class="meeta-about-images" style="background-image: url(assets/images/shape/shape-4.png);">
                    <div class="image">
                        <img src="{{asset ('images/about.jpg') }}" alt="About">
                    </div>
                </div>
                <!-- About Images End -->

            </div>
            <div class="col-lg-5">

                <!-- Section Title Start -->
                <div class="meeta-section-title-2 meeta-about-title">
                    <h4 class="sub-title">An event for</h4>
                    <h2 class="main-title">Designers, Web <br> developers & Design</h2>
                </div>
                <!-- Section Title End -->

                <!-- About Content Start -->
                <div class="meeta-about-content">

                    <p><strong>Eventricks</strong> est une plateforme innovante dédiée aux bonnes affaires en ligne. Véritable guichet unique, le site internet et l’application <strong>EVENTRICKS</strong> vous permettent d’acheter en un clic vos tickets d’événements à prix coûtant ou de profiter de deals à prix réduits.

                        Tout est simplifié pour vous permettre d’économiser du temps, de l’énergie et de l’argent. Chaque produit ou service qui vous intéresse fait l’objet d’un compte à rebours.

                        Vous êtes acheteur
                        La démarche d’inscription est simple. En 60 secondes chrono, vous pouvez créer votre compte utilisateur pour acheter des tickets ou pour profiter de deals. Les transactions se font en ligne : choisissez le(s) produits ou services qui vous intéressent, ajoutez-les dans le panier en un clic, optez pour un mode de paiement (sécurisé online, Wafacash ou autre), enregistrez ou imprimez votre bon d’achat envoyé par e-mail… Ensuite, rendez-vous à votre événement (billetterie) ou chez votre vendeur (deal).

                        Vous êtes vendeur
                        Inscrivez-vous en ligne ou contactez notre service commercial pour connaître nos conditions de vente. Proposez votre produit ou service à vendre en indiquant soigneusement le prix, les quantités, les dates de mise à disposition et autres modalités. Suivez en temps réel l’évolution de votre offre à travers divers indicateurs : compte à rebours, nombre de clics, d’achats, de

                        1. BILLETS & TICKETS
                         <strong>EVENTRICKS</strong> simplifie vos achats/ventes de tickets et billets pour tous types d’événements (pièces de théâtre, matchs de football, concerts de musique, festivals, formations, etc.).

                        Pour en savoir plus
                        <strong>EVENTRICKS</strong> est une plateforme d’intermédiation entre clients et vendeurs développée par l’entreprise Guichet Maroc SARL basée à Casablanca. Créée en 2018, Guichet Maroc est une société spécialisée dans la vente et la commercialisation de la billetterie.

                        {{-- Contact
                        <strong>EVENTRICKS</strong> – eventricks Maroc
                        Casablanca
                        Fixe : +212 522 22 23 22
                        GSM : +212 679093177
                        Email : abdo.bihi03@gmail.com</p> --}}

                </div>
                <!-- About Content End -->

            </div>
        </div>

    </div>
</div>
<!-- About Section End -->

<!-- Features Section Start -->
<div class="meeta-features-section section-padding">
    <div class="shape-1" data-aos-delay="700" data-aos="zoom-in"></div>
    <img class="shape-2" src="assets/images/shape/shape-11.png" alt="">
    <div class="container">
        <div class="meeta-features-wrap">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Section Title Start -->
                    <div class="meeta-section-title-2">
                        <h4 class="sub-title">Reason to join conference</h4>
                        <h2 class="main-title">Why attend conference</h2>
                    </div>
                    <!-- Section Title End -->
                    <!-- Features Item Start -->
                    <div class="feature-item feature-1">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">Trainings & Awards</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                </div>
                <div class="col-lg-4">
                    <!-- Features Item Start -->
                    <div class="feature-item feature-2">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">World Class Speaker</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                    <!-- Features Item Start -->
                    <div class="feature-item feature-3">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">Evening Concert</a></h3>
                            <p> </p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                </div>
                <div class="col-lg-4">
                    <!-- Features Item Start -->
                    <div class="feature-item feature-4">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-4.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">3 Days Conference</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Section End -->

 @endsection

