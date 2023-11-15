<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Il nostro shop</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-around align-items-center">
            @foreach ($annunci as $annuncio)
                <div class="col-12 col-md-4 pt-3 d-flex justify-content-center align-items-center">
                    <div class="card card-custom" style="width: 18rem;">
                        <img src="{{$annuncio['img']}}" class="card-img-top" alt="  {{$annuncio['name']}}">
                        <div class="card-body">
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
</x-layout>