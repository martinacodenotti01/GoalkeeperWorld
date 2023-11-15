<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Dettaglio articolo</h1>                
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
                <h2>{{$annuncio['name']}}</h2>
                <h3>Prezzo: €{{$annuncio['price']}}</h3>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{$annuncio['img']}}" alt="{{$annuncio['name']}}">
            </div>
        </div>
    </div>
</x-layout>