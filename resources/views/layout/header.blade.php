
        <!-- Header -->

   <div class="popup">

    </div>
    <div class="left-menu">
        <ul>
            <li>
                <a href="">កម្រិតសិក្សា</a>
            </li>
            <li>
                <a href="">ថ្នាក់រៀនរបស់យើង</a>
            </li>
            <li>
                <a href="">បង្កើតថ្នាក់</a>
            </li>
            <li>
                <a href="">ចូលរួមថ្នាក់</a>
            </li>
            <li>
                <a href="">ការសាកល្បង</a>
            </li>
             <li>
                <a href="">អ៊ីមែល​ <i class="far fa-envelope"></i></a>
            </li>
        </ul>
    </div>
<div class="container-fluid bar1">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-9 navbar-1">
                <img class="img-pty" src="{{ asset('images/logoPrekleap_nobg.png')}}" alt="">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 name-school">
                <h4>សាលារៀនជំនាន់ថ្មី វិទ្យាល័យ ព្រែកលៀប<br><b>PREK LEAP HIGTH SCHOOL</b></h4>

            </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-9 col-3 change-language">
                <ul>
                    <li>
                        <a href="locale/kh">
                            <div class="khmer-language">
                                <img src="{{ asset('images/flagk.png')}}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="locale/en">
                            <div class="english-language">
                                 <img src="{{ asset('images/english.png')}}" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

    <!-- Menu -->
<div class="container-fluid bar_menu" id="myHeader">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 menu">
                <ul>
                    <li class="tbn-menu-left">
                        <a href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li>
                        <a href="#">@lang('home.classroom_menu')</a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{ route('auth.createClass')}}">បង្កើតថ្នាក់</a></li>
                                <li><a href="#">ចូលរួមថ្នាក់</a></li>
                            </ul>
                        </div>
                    </li>
                        <li>
                <a href="">@lang('home.createclass_menu')</a>
            </li>
            <li>
                <a href="">@lang('home.joinclass_menu')</a>
            </li>
                    <li>
                        <a href="{{ route('auth.aboutPage') }}">@lang('home.about_menu')</a>
                    </li>
                    <li>
                          <a href="{{ route('auth.register')}}" class="btn btn-outline-danger">@lang('home.login_menu')</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>





