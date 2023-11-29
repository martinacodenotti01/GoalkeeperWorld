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
                <form method="" action="">
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-custom">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>