<x-layout>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Registrati!</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid vh-75 mb-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="/register">
                    @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="surname" class="form-label">Cognome</label>
                                <input name="surname" type="text" class="form-control" id="surname">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="birth" class="form-label">Data di nascita</label>
                                <input name="birth" type="date" class="form-control" id="birth">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Indirizzo Email</label>
                                <input name="email" type="email" class="form-control" id="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" id="password" class="form-control">
                                <div class="form-check pt-2">
                                    <input class="form-check-input" type="checkbox" value="1" id="mostraPassword">
                                    <label class="form-check-label" for="mostraPassword">
                                        Mostra password
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label">Conferma password</label>
                                <input name="password_confirmation" type="password" id="password_confirmation" class="form-control">
                                <div class="form-check pt-2">
                                    <input class="form-check-input" type="checkbox" value="1" id="mostraConfermaPassword">
                                    <label class="form-check-label" for="mostraConfermaPassword">
                                        Mostra conferma password
                                    </label>
                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-custom">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>