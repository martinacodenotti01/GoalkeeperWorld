<x-layout>
    {{-- SEZIONE FILTRI --}}
    <div class="container-fluid">
        <div class="row py-3">
            <div class="accordion accordion-flush" id="filtriAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <h3 class="mb-2">Filtri</h3>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#filtriAccordion">
                        <div class="container-fluid">
                            <div class="row justify-content-around">
                                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center flex-column filtri mt-3">
                                    <h3 class="text-center">Prezzo</h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tutti i prezzi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            ciaociao
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center flex-column filtri mt-3">
                                    <h3 class="text-center">Categoria</h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tutte le categorie
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            ciaociao
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center flex-column filtri mt-3">
                                    <h3 class="text-center">Parola</h3>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-magnifying-glass"></i></span>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FINE SEZIONE FILTRI --}}
    {{-- SEZIONE CARDS --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Il nostro shop</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-around align-items-center pb-3">
            @foreach ($annunci as $annuncio)
            <div class="col-12 col-md-4 pt-3 d-flex justify-content-center align-items-center">
                <div class="card card-custom" style="width: 18rem;">
                    <img src="{{$annuncio['img']}}" class="card-img-top" alt="  {{$annuncio['name']}}">
                    <div class="card-body d-flex justify-content-end flex-column">
                        <h5 class="card-title">{{$annuncio['name']}}</h5>
                        <p class="card-text">Prezzo: €{{$annuncio['price']}}</p>
                        <a href="{{route('dettaglio', ['nomeArticolo' => $annuncio['name']])}}" class="btn btn-custom">Vedi di più</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- FINE SEZIONE CARDS --}}
</x-layout>