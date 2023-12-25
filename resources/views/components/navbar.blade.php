<nav class="navbar navbar-expand-lg bg-yellow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}"><img class="img-logo" src="/media/scrittaLogo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shop_index')}}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('review_index')}}">Recensioni</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest      
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">
                        <i class="fa-solid fa-user-large"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="profile-nav" src="{{Storage::url(Auth::user()->img)}}" alt="">
                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('profile')}}">
                                <i class="fa-regular fa-circle-user"></i> 
                                Profilo
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('cart_index')}}" class="nav-link">
                        <i class="fa-solid fa-cart-shopping text-myBlack"></i>
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>