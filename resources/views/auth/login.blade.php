<x-layout>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Accedi!</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid vh-75 mb-5">
        <div class="row justify-content-center">
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
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" id="password" class="form-control">
                        <div class="form-check pt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="mostraPassword">
                            <label class="form-check-label" for="mostraPassword">
                                Mostra password
                            </label>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <a href="/forgot-password" class="txt-myBlack">Hai dimenticato la password?</a>
                        <button type="submit" class="btn btn-custom">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>