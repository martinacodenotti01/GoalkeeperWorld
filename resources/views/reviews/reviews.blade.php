<x-layout>
    <div class="container">
        <div class="row">
            <div class="my-3 col-12 d-flex justify-content-center">
                <a href="{{route('add_review')}}" class="btn btn-custom">Lascia una recensione!</a>
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
                <div class="card review-card" style="width: 18rem;">
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