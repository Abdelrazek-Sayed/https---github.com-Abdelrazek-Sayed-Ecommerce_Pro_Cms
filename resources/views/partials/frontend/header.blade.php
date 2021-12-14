<header class="header bg-white">
    <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span
                    class="fw-bold text-uppercase text-dark">{{config('app.name')}}</span></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link" href="{{route('frontend.shop')}}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link" href="{{route('frontend.detail')}}">Product detail</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a
                                class="dropdown-item border-0 transition-link" href="/">Homepage</a><a
                                class="dropdown-item border-0 transition-link"
                                href="{{route('frontend.shop')}}">Category</a><a
                                class="dropdown-item border-0 transition-link"
                                href="{{route('frontend.detail')}}">Product
                                detail</a><a class="dropdown-item border-0 transition-link"
                                href="{{route('frontend.cart')}}">Shopping cart</a><a
                                class="dropdown-item border-0 transition-link"
                                href="{{route('frontend.checkout')}}">Checkout</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('frontend.cart')}}"> <i
                                class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small
                                class="text-gray fw-normal">(2)</small></a></li>
                    <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small
                                class="text-gray fw-normal"> (0)</small></a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}"> <i
                                class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}"> <i
                                class="fas fa-user me-1 text-gray fw-normal"></i>Register</a></li>
                    @else
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" id="authDropdown"  
                            aria-haspopup="true" aria-expanded="false"> 
                            {{-- <i class="fas fa-user mr-1 text-gray"></i> --}}
                            {{-- Welcome : {{ auth()->user()->first_name .' '.auth()->user()->last_name}} --}}
                            Welcome : {{ auth()->user()->full_name }}
                        </a>

                        <div class="dropdown-menu mt-3" aria-labelledby="authDropdown">
                            <a href="" class="dropdown-item border-0">My Profile</a>
                            <a href="javascript:void(0);" class="dropdown-item border-0"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{route('logout')}}" method="POST" id="logout-form" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                    {{-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div> --}}
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>