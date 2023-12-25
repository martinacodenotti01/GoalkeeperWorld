<x-layout>
    <main class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">{{$article->name}}</h1>                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row pb-5">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <img class="img-show" src="{{Storage::url($article->img)}}" alt="{{$article->name}}">
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <h4>€{{number_format($article->price, 2)}}</h4>
                    <h6>{{$article->description}}</h6>
                    <form method="POST" action="{{route('addToCart', compact('article'))}}">
                        @csrf
                        <button class="btn btn-custom" id="addCart">Aggiungi al carrello</button>
                    </form>
                    <form method="POST" action="{{route('removeToCart', compact('article'))}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-custom2" id="removeCart" type="submit">Rimuovi dal carrello</button>
                    </form>
                    @if (session()->has('message'))
                        <div class="alert txt-myBlack" id="successMessage">
                        {{ session('message') }}
                        </div>
                    @endif
                </div>

                {{-- Messaggio articolo aggiunto al carrello --}}
                {{-- <div class="col-12">
                    
                </div> --}}
            </div>
        </div>
    </main>
</x-layout>