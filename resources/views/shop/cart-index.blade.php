<x-layout>
    <main class="main-h-custom">
        <div class="container-fluid">
            <div class="row">
                @if(count($articles) != 0)
                <div class="col-12">
                    <h1 class="text-center">Ciao {{Auth::user()->name}} ecco il tuo carrello</h1>
                </div>
                @endif
            </div>
        </div>
        <div class="container-fluid pt-3">
            <div class="row">
                @forelse($articles as $article)
                <div class="col-12 col-md-4 pt-3 d-flex justify-content-center align-items-center">
                    <a href="{{route('article_show', compact('article'))}}" class="text-decoration-none">
                        <div class="card card-custom">
                            <img src="{{Storage::url($article->img)}}" class="card-img-top img-card" alt="{{$article->name}}">
                            <div class="card-body d-flex justify-content-end flex-column">
                                <h5 class="card-title">{{$article->name}}</h5>
                                <h5 class="card-text">€{{number_format($article->price, 2)}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                    <h1 class="text-center">Il tuo carrello è vuoto</h1>
                    <a href="{{route('shop_index')}}" class="btn btn-custom">Vai al nostro Shop</a>
                </div>
                @endforelse
            </div>
        </div>
    </main>
</x-layout>