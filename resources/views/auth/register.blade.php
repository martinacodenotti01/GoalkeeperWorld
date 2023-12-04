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
                <form method="POST" action="/register" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <label for="name" class="form-label">Nome</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="col-6">
                                <label for="surname" class="form-label">Cognome</label>
                                <input name="surname" type="text" class="form-control" id="surname">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="birth" class="form-label">Data di nascita</label>
                        <input name="birth" type="date" class="form-control" id="birth">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input name="password_confirmation" type="password" id="password_confirmation" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine del profilo</label>
                        <input name="img" class="form-control" type="file" id="img">
                    </div>
                    <button type="submit" class="btn btn-custom">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>