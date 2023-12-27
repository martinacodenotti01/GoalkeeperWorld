<x-layout>
    <main class="container-fluid vh-100">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="text-center">Recupera password!</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="/forgot-password" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci il tuo indirizzo Email:</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
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