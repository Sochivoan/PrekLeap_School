
        <!-- Header -->
   <div class="popup">
    </div>
    <div class="left-menu">
        <ul>
            <li>
                <a href="{{route('auth.index')}}">ទំព័រដើម</a>
            </li>
            <li>
                <a target="_blank" href="">ថ្នាក់រៀន</a>
            </li>
             <li>
                <a target="_blank" href="{{ route('auth.aboutPage')}}">អំពីយើង</a>
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
                <h4>សាលារៀនជំនាន់ថ្មី វិទ្យាល័យ ព្រែកលៀប<br><b>PREK LEAP HIGH SCHOOL</b></h4>

            </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-9 col-3 change-language">
                <!-- <ul>
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
                </ul> -->
            </div>
        </div>
    </div>

</div>
<div class="container-fluid bar_menu" id="myHeader">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 menu">
                <ul>
                    <li class="tbn-menu-left">
                        <a href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li>
                        <a href="{{route('auth.index')}}">ទំព័រដើម</a>
                    </li>
                    <li>
                        <a target="_blank" href="admin/dashboard">ថ្នាក់រៀន</a>
                        <!-- <div class="sub-menu">
                            <ul>
                                <li><a href="#">បង្កើតថ្នាក់</a></li>
                                <li><a href="#">ចូលរួមថ្នាក់</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li>
                        <a href="{{ route('auth.aboutPage')}}">អំពីយើង</a>
                    </li>
                    @if(session('user_id'))
                              <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="" style="background-image: url('')">
                                    </div>
                                    <span class="name">{{session('last_name')}}</span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <!-- <div class="dropdown-divider"></div> -->
                                     <a class="dropdown-item"  style="color:#85CE36;" href="{{ route('auth.edit','user_id')}}">
                                        <i class="fa fa-user icon"></i> ប្រវត្តិរូប
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" style="color:#85CE36;" href="{{ route('auth.logout')}}">
                                        <i class="fa fa-power-off icon"></i> ចាកចេញ</a>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('auth.login')}}" class="btn btn-outline-danger">ចូល</a>
                            </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>





