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
                                <div class="col-12 col-md-4 d-flex justify-content-center flex-column filtri ps-5 mt-3">
                                    <h3 class="text-center">Prezzo</h3>
                                    <div class="form-check">
                                        <input value="150" class="form-check-input" type="radio" name="price" id="price">
                                        <label class="form-check-label" for="price">
                                            Tutti i prezzi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="0" class="form-check-input" type="radio" name="price" id="price" checked>
                                        <label class="form-check-label" for="price">
                                            € 0-50
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="50" class="form-check-input" type="radio" name="price" id="price" checked>
                                        <label class="form-check-label" for="price">
                                            € 50-100
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="100" class="form-check-input" type="radio" name="price" id="price" checked>
                                        <label class="form-check-label" for="price">
                                            € 100-150
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="150" class="form-check-input" type="radio" name="price" id="price" checked>
                                        <label class="form-check-label" for="price">
                                            € 150-200
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-flex justify-content-center flex-column filtri mt-3 ps-5">
                                    <h3 class="text-center">Categoria</h3>
                                    <div class="form-check">
                                        <input value="0" class="form-check-input" type="radio" name="category" id="categoryAll">
                                        <label class="form-check-label" for="categoryAll">
                                            Tutte le categorie
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="1" class="form-check-input" type="radio" name="category" id="category1" checked>
                                        <label class="form-check-label" for="category1">
                                            Guanti
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="2" class="form-check-input" type="radio" name="category" id="category2" checked>
                                        <label class="form-check-label" for="category2">
                                            Abbigliamento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="3" class="form-check-input" type="radio" name="category" id="category3" checked>
                                        <label class="form-check-label" for="category3">
                                            Scarpe
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
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 pt-3 d-flex justify-content-center align-items-center">
                <div class="card card-custom" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->name}}">
                    <div class="card-body d-flex justify-content-end flex-column">
                        <h5 class="card-title">{{$article->name}}</h5>
                        <p class="card-text">Prezzo: €{{$article->price}}</p>
                        <a href="{{route('article_show', compact('article'))}}" class="btn btn-custom">Vedi di più</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- FINE SEZIONE CARDS --}}
</x-layout>