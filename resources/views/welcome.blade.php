<x-layout>
    {{-- HEADER --}}
    <header class="container-fluid vh-100 home-header">
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img src="/media/scrittaLogoY.png" alt="Goalkeeper World">
            </div>
        </div>
    </header>
    {{-- FINE HEADER --}}
    {{-- SECTION CHI SIAMO --}}
    <section class="container-fluid pt-3 pb-3">
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
                <img class="imgLogo" src="/media/logoY.png" alt="logo Goalkeeper World">
                <h2>Chi siamo</h2>
                <p class="text-center">Il miglior shop online di accessori per i portieri. Le migliori marche di guanti, pantaloni, scarpette e tutto ciò di cui puoi avere bisogno a prezzi mai visti. Perché da Goalkeeper World trovi solo il meglio. Da oltre 50 anni aiutiamo i numeri 1 a parare meglio.</p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <img class="img-section" src="/media/portiere.jpg" alt="portiere">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <img id="noPhone" class="img-section" src="/media/guanti.jpg" alt="guanti da portiere">
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column pt-3">
                <h2>I nostri numeri</h2>
                <p><span id="firstNumber" class="display-6 txt-yellow">0</span> Portieri soddisfatti</p>
                <p><span id="secondNumber" class="display-6 txt-yellow">0</span> Squader che si affidano a noi</p>
                <p><span id="thirdNumber" class="display-6 txt-yellow">0</span> Brand partner</p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center d-md-none">
                <img class="img-section" src="/media/guanti.jpg" alt="guanti da portiere">
            </div>
        </div>
    </section>
    {{-- FINE SECTION CHI SIAMO --}}
    {{-- SECTION COSA DICONO DI NOI --}}
    <section class="container-fluid pb-3">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Cosa dicono di noi</h2>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div id="recensioniCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div id="carouselInner" class="carousel-inner">
                        {{-- CARDS CREATE DINAMICAMENTE --}}
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#recensioniCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#recensioniCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- FINE SECTION COSA DICONO DI NOI --}}
    {{-- BOTTONE VAI ALLO SHOP --}}
    <section class="container-fluid pb-2">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{route('shop')}}" class="btn btn-custom">Vai al nostro Shop</a>
            </div>
        </div>
    </section>
    {{-- FINE BOTTONE VAI ALLO SHOP --}}
</x-layout>