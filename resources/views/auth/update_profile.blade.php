<x-layout>
    <a href="{{route('profile')}}" class="ps-2 pt-2">
        <i class="fa-solid fa-arrow-left fa-2x txt-myBlack"></i>
    </a>
    <main class="main-h-custom">
        <div class="container-fluid pt-2">
            <div class="row justify-content-center">
                <div class="col-10 col-md-6">
                    <h2 class="text-center">Modifica i tuoi dati:</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
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
                    @if(session('status') === 'profile-information-updated')
                    <div class="alert alert-success mb-4">
                        <p>Modifiche aggiornate con successo!</p>
                    </div>
                    @endif
                    <form method="POST" action="/user/profile-information">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input value="{{Auth::user()->name}}" name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="surname" class="form-label">Cognome</label>
                                <input value="{{Auth::user()->surname}}" name="surname" type="text" class="form-control" id="surname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="birth" class="form-label">Data di nascita</label>
                                <input value="{{Auth::user()->birth}}" name="birth" type="date" class="form-control" id="birth">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="email" class="form-label">Indirizzo Email</label>
                                <input value="{{Auth::user()->email}}" name="email" type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-custom">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 col-m-6">
                <h2 class="text-center">Modifica la password:</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="/user/password" method="POST">
            @method('PUT')
            @csrf
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
                    @if(session('status') === 'password-updated')
                    <div class="alert alert-success mb-4">
                        <p>Password aggiornata con successo!</p>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="current_password" type="password" id="password" class="form-control">
                        <div class="form-check pt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="mostraPassword">
                            <label class="form-check-label" for="mostraPassword">
                                Mostra password
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" id="newPassword" class="form-control">
                        <div class="form-check pt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="mostraNewPassword">
                            <label class="form-check-label" for="mostraNewPassword">
                                Mostra password
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
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
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3">
                    <button type="submit" class="btn btn-custom">Invia</button>
                </div>
            </div>
        </form>
    </div>
</main>
</x-layout>