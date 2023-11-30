<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Ciao {{Auth::user()->name}}</h1>
            </div>
            {{-- <div class="col-12">
                <img src="{{Auth::user()->img}}" alt="{{Auth::user()->name}}">
            </div> --}}

        </div> 
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="ms-3 col-4 d-flex justify-content-center align-items-center flex-column profile-custom mb-3">
                <h2 class="text-center">I tuoi dati:</h2>
                <ul>
                    <li>Nome: {{Auth::user()->name}}</li>
                    <li>Cognome: {{Auth::user()->surname}}</li>
                    <li>Data di nascita: {{Auth::user()->birth}}</li>
                    <li>Email: {{Auth::user()->email}}</li>
                </ul>
                <a href="" class="txt-myBlack pb-2"><i class="fa-solid fa-pencil"></i></a>
            </div>
        </div>
    </div>
</x-layout>