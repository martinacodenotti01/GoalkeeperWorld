<x-layout>
    <div class="container">
        <div class="row pt-3">
            <div class="col-12">
                <h1 class="text-center">Lascia una recensione!</h1>
            </div>
        </div>
        <div class="row justify-content-center pt-3 pb-5">
            <div class="col-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{route('add_review')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <div class="px-0">
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="star1" value="1">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="star2" value="2">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="star3" value="3">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="star4" value="4">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="star5" value="5">
                        </div>
                        {{-- <label for="stars" class="form-label">stelle</label>
                        <input name="stars" type="number" class="form-control" id="stars"> --}}
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Invia</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Cosa dicono di noi</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-3">
            @foreach($reviews as $review)
            <div class="pt-3 col-12 col-md-3 d-flex justify-content-center align-items-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$review->name}}</h5>
                        <h5 class="card-title txt-yellow">
                            @for($i = 0; $i < $review->stars; $i++)
                            <i class="fa-solid fa-star"></i>
                            @endfor
                            @if($i != 5)
                            @for(; $i < 5; $i++)
                            <i class="fa-regular fa-star"></i>
                            @endfor
                            @endif
                        </h5>
                        <p class="card-text">{{$review->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>