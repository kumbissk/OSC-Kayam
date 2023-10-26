<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kayam</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const nombreEnfantsInput = document.getElementById("nombre_enfants");
            const trancheAgeInput = document.getElementById("tranche_age_enfants");
        
            nombreEnfantsInput.addEventListener("change", function() {
                if (parseInt(nombreEnfantsInput.value) === 1) {
                    trancheAgeInput.removeAttribute("disabled");
                } else {
                    trancheAgeInput.setAttribute("disabled", "true");
                    trancheAgeInput.value = ""; // Réinitialisez la valeur du champ si le nombre d'enfants n'est pas égal à 1.
                }
            });
        });
    </script> 
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">
            <img src="{{ asset('admin/assets/images/kayam') }}" alt="" >
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                <i data-feather="align-right"></i>
            </a>
            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar ">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{ route('dashboard')}}" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{ asset('admin/assets/images/kayam.png') }}" alt="" >
                    {{-- <img src="{{ asset('admin/assets/images/logo.svg') }}" alt="" class="logo logo-lg">
                    <img src="{{ asset('admin/assets/images/logo-sm.svg') }}" alt="" class="logo logo-sm"> --}}
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    {{-- <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li> --}}
                    <li class="pc-item">
                        <a href="{{ route('dashboard') }}" class="pc-link "><span class="pc-micon"><i
                            class="material-icons-two-tone">home</i></span><span class="pc-mtext">Tableau de
                            bord</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('pensionnaires') }}" class="pc-link ">
                            <span class="pc-micon"><i
                                class="material-icons-two-tone">edit</i>
                            </span>
                            <span class="pc-mtext">Pensionnaires</span>
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="pc-header">
        <div class="header-wrapper">
            {{-- <div class="mr-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        </a>
                    </li>
                </ul>
            </div> --}}
            <div class="ml-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                           <img src="{{ asset('admin/assets/images/user/avatar-1.jpg') }}" alt="user-image" class="user-avtar">
                         
                            <span>
                                <span class="user-name"></span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="material-icons-two-tone">chrome_reader_mode</i>
                                <span>{{ __('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    @yield('content')

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="{{ asset('admin/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pcoded.min.js') }}"></script>
</body>

</html>
