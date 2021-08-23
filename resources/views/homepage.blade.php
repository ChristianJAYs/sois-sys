<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        slider
    </title>
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

     <!-- CSS -->
        <link href="/css/home.css" rel="stylesheet">
        <link href="/css/navbar.css" rel="stylesheet">


    <!-- JS -->
        <script type="text/javascript" src="{{ asset('js/hp.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>

    <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/17005ae465.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script> -->

    <!-- BOOTSTRAP -->
        <link rel="stylesheet" type="application/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" type="application/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- ADDIITONANL SCRIPTS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body id="body">
    <!-- START PARALLAX -->
    <div class="parallax">
        <!-- FIRST PAGE PARALLAX (HEADER) -->
        <!-- NAVIGATION -->
    <header>
        <div class="brand-logo">
            <a href="#"><img src="https://www.markuptag.com/images/white-logo-icon.png" alt="Brand Logo"></a>
        </div>

        <input type="checkbox" id="toggle-btn">
        <label for="toggle-btn" class="show-menu-btn"><i class="fas fa-bars"></i></label>

        <nav>
            <ul class="navigation">
                <li><a href="#"><i class="fas fa-house-damage"></i> Home</a></li>
                <li><a href="#"><i class="far fa-image"></i> Gallery</a></li>
                <li><a href="#"><i class="fab fa-blogger-b"></i> Blog</a></li>
                <li><a href="#"><i class="fas fa-question"></i> Support</a></li>
                <li><a href="#"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
                <label for="toggle-btn" class="hide-menu-btn"><i class="fas fa-times"></i></label>
            </ul>
        </nav>
    </header>
        <!-- END NAVIGATION -->
        <div class="container">
          <h2>Our  Partners</h2>
           <section class="logo-slider slider">
              <div><img class="item" src="{{ asset('image/svg/csc.svg') }}"></div>
              <div><img class="item" src="{{ asset('image/svg/cs.svg') }}"></div>
              <div><img class="item" src="{{ asset('image/svg/aeces.svg') }}"></div>
              <div><img class="item" src="{{ asset('image/svg/chronicler.svg') }}"></div>
              <div><img class="item" src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
              <div><img class="item" src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
              <div><img class="item" src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
              <div><img class="item" src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
           </section>
        </div>
    </div>
<!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>