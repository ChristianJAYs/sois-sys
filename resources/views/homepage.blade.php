<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        SOIS
    </title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('image/svg/pup.svg') }}">
    
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;300;400&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>

    <!-- slick carousel -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <!-- // Add the new slick-theme.css if you want the default styling -->
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
     <!-- CSS -->
        <link href="/css/home.css" rel="stylesheet">
        <link href="/css/navbar.css" rel="stylesheet">


    <!-- JS -->
        <script type="text/javascript" src="{{ asset('js/hp.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>

    <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/17005ae465.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>

    <!-- BOOTSTRAP -->
        <link rel="stylesheet" type="application/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" type="application/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- ADDIITONANL SCRIPTS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body id="body">
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent" id="navbar">
        <a class="navbar-brand" href="#">
            <img id="pup-logo" src="{{ asset('image/svg/pup.svg') }}">
        </a>
        <button class="navbar-toggler main-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <!-- <i class="fas fa-bars"></i> -->
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}"><i class="drop-logo fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}"><i class="drop-logo fas fa-question-circle"></i>About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="drop-logo fas fa-user-friends"></i>Organization
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">CSC</a>
                        <a class="dropdown-item" href="#">PUPUKAW</a>
                        <a class="dropdown-item" href="#">CS</a>
                        <a class="dropdown-item" href="#">MENTORS</a>
                        <a class="dropdown-item" href="#">AECES</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">||</a>
                </li>
                <div class="dropdown-divider"></div>
                @if (Route::has('login'))
                <li>
                    @auth
                        <a href="{{ url('/') }}" class="nav-link" style="float: right;"><i class="drop-logo fas fa-house-user"></i>Home</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}"><i class="drop-logo fas fa-sign-in-alt"></i>Login</a>
                        <!-- <a href="{{ route('login') }}" class="nav-link">Log in</a> -->
                </li>
                <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}"><i class="drop-logo fas fa-user-check"></i>Register</a>
                            <!-- <a href="{{ route('register') }}" class="nav-link" style="float: right;">Register</a> -->
                        @endif
                    @endauth
                </li>
                @endif
            </ul>
        </div>
    </nav>
    <!-- END NAVIGATION -->
    <!-- MAIN LAND PAGE -->
    <div class="parallax">
        <div id="landpage-container" class="container">
        <!-- WAVE PATH -->
            <div class="custom-shape-divider-bottom-1629802139">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        <!-- WAVE PATH -->
        <!-- CONTENT -->
            <div class="landLogo" >
                <img id="soisLogo" src="{{ asset('image/svg/pup.svg') }}">
            </div>
            <div class="landContent">
                <p id="landTitle">Student Organization Information System</p>
            </div>
        <!-- CONTENT -->
        </div>
    </div>
    
    <!-- MAIN LAND PAGE -->
    <!-- slick -->
    <div class="parallax-2">
        <div id="main" class="container-fluid">
            <div class="container">
              <h2>Organizations</h2>
               <section class="logo-slider slider">
                  <div><img class="item" src="{{ asset('image/svg/csc.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/cs.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/aeces.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/chronicler.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/JMA.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/jpia.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/jpmap.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/mentors.svg') }}"></div>
                  <div><img class="item" src="{{ asset('image/svg/pasoa.svg') }}"></div>
               </section>
            </div>
        </div>
    </div>
    <!-- end slick -->
<!-- BOOSTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!-- SLICK JS -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick/slick.min.js"></script>
</body>
</html>