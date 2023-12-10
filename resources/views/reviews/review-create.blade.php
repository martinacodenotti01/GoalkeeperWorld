<x-layout>
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-12">
                <h1 class="text-center">Lascia una recensione!</h1>
            </div>
        </div>
    <div class="container-fluid">
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
                <form method="POST" action="{{route('added_review')}}">
                    @csrf
                    <div class="mb-3">
                        <div class="px-0">
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="stars" value="1">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="stars" value="2">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="stars" value="3">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="stars" value="4">
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input name="stars" class="form-check-input check-stars" type="checkbox" id="stars" value="5">
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
    <script src="./js/reviews.js"></script>
</x-layout>