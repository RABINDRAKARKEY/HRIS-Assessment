<div class="header_main">
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile">
                <a>
                    <img src="images/logo.png">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="logo"><a>
            <img src="images/logo.png">
        </a></div>
        <div class="menu_main">
            <ul>
                <li class="active"><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">HRIS</a></li>
                <!-- To make user choose between ("login/register") -->
                @if (Route::has('login'))

                @auth
                <li><a href="{{route('home')}}">Home</a></li>

                <!-- This part is responsible for login -->
                <li>
                    <x-app-layout>
                    </x-app-layout>
                </li>


                <!-- This part is responsible for logout -->
                @else
                <li><a href="{{route('login')}}">Login</a></li>

                <li><a href="{{route('register')}}">Register</a></li>
                <!-- To make user choose between ("login/register") -->

                @endauth

                @endif

            </ul>
        </div>
    </div>
</div>