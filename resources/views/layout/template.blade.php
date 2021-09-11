<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PrekLeap</title>

    <link rel="icon" href="{{ asset('images/logoPrekleap_nobg.png')}}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.3.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <!-- Font Khmer -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Siemreap&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman&family=Siemreap&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Moul&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Khmer:400,400i" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Khmer:400,400i" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Siemreap:400,400i" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
         <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=&v=weekly"
      async
    ></script>



</head>
<body>

        <!-- Header -->
    <header>
        @include('layout.header')
    </header>

    <div class="main">
        @yield('form')
    </div>

    <div class="container-fluid bar3">
        <footer>
            @include('layout.footer')
        </footer>
    </div>

   <!-- JS -->

    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        window.onscroll = function() {myFunction()};

        var bar_menu = document.getElementById("myHeader");
        var sticky = bar_menu.offsetTop;

        function myFunction() {
        if (window.pageYOffset > sticky) {
            bar_menu.classList.add("sticky");
        } else {
            bar_menu.classList.remove("sticky");
        }
    }
    </script>
    <script>
    $(document).ready(function(){
        $('.tbn-menu-left').click(function(){
            var pop ="<div class='popup'></div>";
            $('body').append(pop);
            $('.left-menu').css({"left":"0"});
        });
        $('body').on('click','.popup', function(){
            $(this).remove();
             $('.left-menu').css({"left":"-800px"});
        });
    });
</script>
    <script src="{{ asset('js/goglemap.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
