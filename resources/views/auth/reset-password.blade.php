<x-layout>
    <main class="container-fluid vh-100">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="text-center">Reimposta la password</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="/reset-password" method="POST">
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input name="password_confirmation" type="password" id="password_confirmation" class="form-control">
                        <div class="form-check pt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="mostraConfermaPassword">
                            <label class="form-check-label" for="mostraConfermaPassword">
                                Mostra password
                            </label>
                        </div>
                    </div>
                    <input name="token" class="d-none" value="{{request()->route('token')}}">
                    <button type="submit" class="btn btn-custom">Invia</button>
                </form>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </main>
</x-layout>