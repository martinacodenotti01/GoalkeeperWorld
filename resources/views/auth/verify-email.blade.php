<x-layout>
    <main class="container-fluid vh-100">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="text-center">Non hai ancora verificato la tua email!</h1>
                <p class="text-center">Non hai ricevuto nessun link di verifica?</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 d-flex justify-content-center">
                <form action="/email/verification-notification" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-custom">Invia nuovamente il link di verifica</button>
                </form>
            </div>
        </div>
    </main>
</x-layout>