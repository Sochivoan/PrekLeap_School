@extends('layout.template')
@section('form')
<div class="container-fluid bar1-high">
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
                    @foreach( $about_banners as $about_banner  )
                    <div class="slider">
                        <img src="{{ asset('images/'.$about_banner->image)}}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 content-about">
            @foreach($about_uss as $about_us)
                <div class="content-title">
                  <!-- ហេតុអ្វើរៀននៅវិទ្យាល័យព្រែកលៀប​​? -->
                   {{ $about_us->title}}
                </div>

                <div class="content-us">
                    <div class="box-iterms">
                        <a target="_blank" href="{{ asset('images/'.$about_us->image)}}" data-lightbox="mygallery" data-title="Image"><img
                        src="{{ asset('images/'.$about_us->image)}}"></a>
                    </div>
                    <p>{!! $about_us->description !!}</p>
                </div>
            @endforeach
            @foreach($our_visions as $our_vision)
                <div class="content-title-vision">
                    <!-- ទស្សនវិស័យ​របស់​យើងៈ -->
                      {{ $our_vision->title}}
                </div>
                <div class="content-our">
                    <div class="box-iterms">
                        <a target="_blank" href="{{ asset('images/'.$our_vision->image)}}" data-lightbox="mygallery" data-title="Image"><img
                        src="{{ asset('images/'.$our_vision->image)}}"></a>
                    </div>
                    <p>{!! $our_vision->description !!}</p>
                </div>
            @endforeach
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 content-contact">
                <div class="content-title-vision">
                    ទាក់ទង​មក​ពួក​យើងៈ
                </div>
                <div class="content-contact-us">
                    <div class="box-iterms-img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d176834.28805674988!2d104.81624095114368!3d11.657326082682781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skh!4v1630226654153!5m2!1sen!2skh" width="100%" height="100%" style="" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    @foreach($general_infors as $general_infor)
                    <div class="con-infor">
                       <span>
                          <strong>General Information</strong>
                          <br>
                            Tel:<a href=""> {{$general_infor->school_tel}}</a>
                          <br>
                            Mobile:<a href=""> {{$general_infor->school_mobile}}</a>
                            <br>
                            E-mail:<a href=""> {{$general_infor->school_email}}</a>
                       </span>
                        <br>
                        <span>
                          <strong>Address</strong>
                          <br>
                           <?php echo html_entity_decode($general_infor->address, ENT_COMPAT);?>
                       </span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 government-Sites">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" id="government-text" aria-current="true">
                        ស្ថានភាពរដ្ឋាភិបាល
                    </a>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.moeys.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/education.jpg" style="display: inline;" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.moeys.gov.kh/">ក្រសួងអប់រំយុវជននិងកីឡា</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://tourismcambodia.org/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/tourism.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://tourismcambodia.org/">ក្រសួងទេសចរណ៍នៃប្រទេសកម្ពុជា</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://information.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/information.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://information.gov.kh/">Ministry of Information</a>
                        </div>
                    </div>
                        <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.maff.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/maff.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.maff.gov.kh/">Ministry of Agriculture, Forestry and Fisheries</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://cambodiameteo.com/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/water.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://cambodiameteo.com/">Ministry of Water Resource</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://moe.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/moe.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://moe.gov.kh/">Ministry of Environment</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://mptc.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/mptc.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://mptc.gov.kh/">Ministry of Posts and Telecommunications</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.moc.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/commerce.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.moc.gov.kh/">Ministry of Commerce</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.interior.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/interior.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.interior.gov.kh/">Ministry of Interior of Cambodia</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.moh.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/moh.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.moh.gov.kh/">Ministry of Health</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://mef.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/economy.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://mef.gov.kh/">Ministry of Economy and Finance</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://mrd.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/mrd.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://mrd.gov.kh/">Ministry of Rural Development</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://mlvt.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/mlvt.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://mlvt.gov.kh/">Ministry of Labour and Vocational Training</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://ccc.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/ccc.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://ccc.gov.kh/">Constitutional Council of Cambodia</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.cambodiainvestment.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/cambodiainvestment.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.cambodiainvestment.gov.kh/">CDC</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://nida.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/nida.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://nida.gov.kh/">NiDA</a>
                        </div>
                    </div>
                          <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://pressocm.gov.kh/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/pressocm.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://pressocm.gov.kh/">Press and Quick Reaction Unit</a>
                        </div>
                    </div>
                </div>

                 <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" id="government-text" aria-current="true">
                     <i class="fas fa-bullhorn"></i> ព័ត៌មាននិងព្រឹត្តិការណ៍
                    </a>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://thmeythmey.com/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/thmeythmey.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://thmeythmey.com/">Thmey Thmey</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://edition.cnn.com/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/cnn_news.png" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://edition.cnn.com/">CNN</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.dap-news.com/index.php" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/dap.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.dap-news.com/index.php">DAP NEWS</a>
                        </div>
                    </div>
                        <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://postkhmer.com/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/postkhmer.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://postkhmer.com/">POST KHMER</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.phnompenhpost.com/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/logo_ppp.png" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.phnompenhpost.com/">PHNOM PENH POST</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.rfa.org/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/rfa.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.rfa.org/">RADIO FREE ASIA</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.voacambodia.com/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/khmer.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.voacambodia.com/">VOICE OF AMERICA</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://kohsantepheapdaily.com.kh/default" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/koh.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://kohsantepheapdaily.com.kh/default">KOH SANTEPHEAP DAILY</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://www.camnews.org/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/camnews.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://www.camnews.org/">CAMNEWS</a>
                        </div>
                    </div>
                    <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://km.rfi.fr/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/RFI.png" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://km.rfi.fr/">RFI</a>
                        </div>
                    </div>
                       <div class="top-stie">
                        <div class="logo">
                            <a target="_blank" href="http://vodhotnews.com/" target="_blank">
                                <img src="http://www.norton-u.com/images/top-site/thumb/1-vodhotnews.jpg" alt="">
                            </a>
                        </div>
                        <div class="top-stie-text">
                            <a target="_blank" href="http://vodhotnews.com/">VOD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        var myVar = setInterval(myTimer, 3000);

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
