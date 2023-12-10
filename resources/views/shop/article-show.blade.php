<x-layout>
    <main class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Dettaglio articolo</h1>                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row pb-5">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <img class="img-show" src="{{Storage::url($article->img)}}" alt="{{$article->name}}">
                </div>
                <div class="col-12 col-md-6">
                    <h2>{{$article->name}}</h2>
                    <h4>€{{$article->price}}</h3>
                        <h6>{{$article->description}}</h6>
                </div>
            </div>
        </div>
    </main>
</x-layout>