<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Ciao {{Auth::user()->name}}</h1>
            </div>
            
        </div> 
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="ms-3 col-12 col-md-6 d-flex justify-content-center align-items-center flex-column profile-custom mb-3">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-md-6 py-3">
                            <img class="imgProfile" src="{{Storage::url(Auth::user()->img)}}" alt="{{Auth::user()->name}}">
                        </div>
                        <div class="col-12 col-md-6 py-3 d-flex justify-content-center align-items-center flex-column">
                            <h2>I tuoi dati:</h2>
                            <ul>
                                <li>Nome: {{Auth::user()->name}}</li>
                                <li>Cognome: {{Auth::user()->surname}}</li>
                                <li>Data di nascita: {{Auth::user()->birth}}</li>
                                <li>Email: {{Auth::user()->email}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="" class="txt-myBlack pb-2"><i class="fa-solid fa-pencil"></i></a>
            </div>
        </div>
    </div>
</x-layout>