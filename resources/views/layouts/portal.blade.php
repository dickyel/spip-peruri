<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    @stack('before-styles')
    @include('components.styles-portal')

    @stack('after-styles')


    <title>@yield('title')</title>
</head>

<body>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white pt-lg-40 pb-lg-40 pt-30 pb-50">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                   <img src="{{ asset('./portal/assets/img/peruri-navbar.svg') }}" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
                        <li class="nav-item my-auto">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="#">Visi & Misi</a>
                        </li>

                        <li class="nav-item my-auto">
                            <a class="nav-link" href="#">Pedoman & Metodologi</a>
                        </li>
                        <li class="nav-item my-auto me-lg-20">
                            <a class="nav-link" href="#">Lain - lain</a>
                        </li>
                        <li class="nav-item my-auto dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="signInDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sign In
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="signInDropdown">
                                <li><a class="dropdown-item" href="">Login SPIPTL</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="">Login SPIP</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    
    @yield('content')

    
    @stack('before-scripts')
    @include('components.scripts-portal')
    @stack('after-scripts')
</body>

</html>