@extends('layout.template')
@section('form')

<div class="container-fluid bar1-high"  style="background-color:;">
      <div class="container" style="margin: 0;padding: 0;margin:auto;">
        <div class="row">
            <div class="col-xl-12 col-lg-12 nav-slider">
                <div class="accessories-slider">
                    <div class="btn-slider btn-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="btn-slider btn-right">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    @foreach( $banners as $bann  )
                    <div class="slider">
                        <img src="{{ asset('images/'.$bann->image)}}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 test-container">
                <div class="test-intro">
                    @foreach($class_titles as $class_title)
                        <h3 class="test-txt"><i class="fas fa-graduation-cap"></i> {{$class_title->title}}</h3>
                        <p><?php echo html_entity_decode($class_title->description, ENT_COMPAT);?></b></p>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- <div class="contianer"> -->
        <div class="row">
             @foreach($class_tests as $class_test)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 tests-box">
                <div class="img-box">
                    <img src="{{ asset('images/'.$class_test->image)}}" alt="">
                </div>
                <div class="text-box">
                    <h1>{{ $class_test->courses_name}}</h1>
                    <p><?php echo html_entity_decode($class_test->courses_description, ENT_COMPAT);?></p>
                    <a href="#" class="btn-more">{{ $class_test->link_to_class}}</a>
                </div>
            </div>
             @endforeach
        </div>
        <!-- </div> -->
        <div class="row">
            @foreach($class_rooms_titles as $rooms_title)
            <div class="col-xl-12 content-classroom">
                <div class="title-classroom">
                    <h3 class="classroom-text">{{ $rooms_title->title }}</h3>
                    <p><?php echo html_entity_decode($rooms_title->description, ENT_COMPAT);?></p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
            @foreach($class_rooms as $class_room)
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 content-classroom-1">

                    <div class="classroom-box-1">
                        <h2>{{ $class_room->title}}</h2>
                        <p><?php echo html_entity_decode($class_room->description, ENT_COMPAT);?></p>
                    </div>
                    <div class="classroom-box-1 classroom-box-2">
                        <img src="{{ asset('images/'.$class_room->image) }}">
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="conatainer">
            <div class="row">
                @foreach($benefits as $benefit)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 content-advantage">
                    <div class="img-advantage">
                        <a href="#!"><img class="img" src="{{ asset('images/'.$benefit->image) }}" alt="..." /></a>
                    </div>
                    <div class="title-advantage">
                         <h4>{{ $benefit->name}}</h4>
                       {!! Str::limit($benefit->description,80) !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-xl-12 btn-classroom">
        <center>
            <button type="button" class="btn btn-primary btn-sm">@lang('home.to_class_menu')</button>
        </center>
    </div>
</div>

<!-- scripts -->
    <script>
    $(document).ready(function () {
        var slider = $('.slider');
        var i = 0;
        var num_slider = slider.length;
        slider.eq(i).show();
        // next
        $('.btn-right').click(function () {
            slider.eq(i).hide();
            i++;
            if (i >= num_slider) {
                i = 0;
            }
            slider.eq(i).show();
        });
        //back
        $('.btn-left').click(function () {
            slider.eq(i).hide();
            if (i <= 0) {
                i = num_slider;
            }
            i--;
            slider.eq(i).show();
        });
        var myVar = setInterval(myTimer, 4000);

        function myTimer() {
            slider.eq(i).hide();
            i++;
            if (i >= num_slider) {
                i = 0;
            }
            slider.eq(i).show();
        }
        function myStopFunction() {
            clearInterval(myVar);
        }
        //Stop Slider
        $('.slider').mouseover(function () {
            myStopFunction();
        });
        $('.slider').mouseleave(function () {
            myVar = setInterval(myTimer, 4000);
        });

        $('.draw-menu').click(function () {

            var pop = "<div class='popup'></div>";
            $('body').append(pop);

            $('.sub-left-menu').css({ "left": "0" });
            // $('.sub-left-menu').slideToggle(1000);
        });

        //Close popup
        $('body').on('click', '.popup', function () {
            $(this).remove();
            $('.sub-left-menu').css({ "left": "-242px" });
        });
    });
</script>
@endsection
