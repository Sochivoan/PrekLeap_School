   <aside class="sidebar">
        <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                PREKLEAP HIGTH SCHOOL
                            </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="{{ route('dashboardpage.dashboard')}}">
                                        <i class="fa fa-home"></i> Dashboard
                                    </a>
                                </li>
                                 <hr class="sidebar-divider">

                                <li>
                                    <a href="">
                                         <i class="fas fa-tasks"></i>Home Page Manager<i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="{{ route('dashboardpage.index_banner')}}"> Manage Banner </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashclasstitle.index_classtitle')}}"> Manage Class Title </a>
                                        </li>
                                           <li>
                                            <a href="{{ route('dashclasstests.index_classtests')}}"> Manage Class Tests </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashclassroom.index_classroom')}}"> Manage Class Room </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashbenefits.index_benefits')}}"> Manage Benefits of Study </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashclassroomtitle.index_classroomtitle')}}">Manage Class Room Title</a>
                                        </li>
                                    </ul>
                                </li>
                                  <li>
                                    <a href="">
                                          <i class="fas fa-id-card-alt"></i></i> About Page Manager <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="{{ route('dashaboutbanner.index_about_banner')}}"> Manage About Banner </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashaboutus.index_about_us')}}"> Manage About Us </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashvision.index_vision')}}"> Manage Vision </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('generalInfor.index_general_infor')}}"> Manage Informations </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('auth.user_lists')}}">
                                         <i class="fas fa-users"></i> Users
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="">
                                        <i class="fa fa-area-chart"></i> Charts <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="charts-flot.html"> Flot Charts </a>
                                        </li>
                                        <li>
                                            <a href="charts-morris.html"> Morris Charts </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-table"></i> Tables <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="static-tables.html"> Static Tables </a>
                                        </li>
                                        <li>
                                            <a href="responsive-tables.html"> Responsive Tables </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="forms.html">
                                        <i class="fa fa-pencil-square-o"></i> Forms </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-desktop"></i> UI Elements <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="buttons.html"> Buttons </a>
                                        </li>
                                        <li>
                                            <a href="cards.html"> Cards </a>
                                        </li>
                                        <li>
                                            <a href="typography.html"> Typography </a>
                                        </li>
                                        <li>
                                            <a href="icons.html"> Icons </a>
                                        </li>
                                        <li>
                                            <a href="grid.html"> Grid </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-file-text-o"></i> Pages <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="login.html"> Login </a>
                                        </li>
                                        <li>
                                            <a href="signup.html"> Sign Up </a>
                                        </li>
                                        <li>
                                            <a href="reset.html"> Reset </a>
                                        </li>
                                        <li>
                                            <a href="error-404.html"> Error 404 App </a>
                                        </li>
                                        <li>
                                            <a href="error-404-alt.html"> Error 404 Global </a>
                                        </li>
                                        <li>
                                            <a href="error-500.html"> Error 500 App </a>
                                        </li>
                                        <li>
                                            <a href="error-500-alt.html"> Error 500 Global </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-sitemap"></i> Menu Levels <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="#"> Second Level Item <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"> Second Level Item </a>
                                        </li>
                                        <li>
                                            <a href="#"> Second Level Item <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item <i class="fa arrow"></i>
                                                    </a>
                                                    <ul class="sidebar-nav">
                                                        <li>
                                                            <a href="#"> Fourth Level Item </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Fourth Level Item </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="screenful.html">
                                        <i class="fa fa-bar-chart"></i> Agile Metrics <span class="label label-screenful">by Screenful</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/modularcode/modular-admin-html">
                                        <i class="fa fa-github-alt"></i> Theme Docs </a>
                                </li> -->
                            </ul>
                        </nav>
        </div>
        <footer class="sidebar-footer">
                        <!-- <ul class="sidebar-menu metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-4">
                                                    <label class="title">fixed</label>
                                                </div>
                                                <div class="col-4">
                                                    <label class="title">static</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Sidebar:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Header:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Footer:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li>
                                                    <span class="color-item color-red" data-theme="red"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-orange" data-theme="orange"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-green active" data-theme=""></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-blue" data-theme="blue"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-purple" data-theme="purple"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <a href="">
                                    <i class="fa fa-cog"></i> Customize </a>
                            </li>
                        </ul> -->
        </footer>
    </aside>
