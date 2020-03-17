<header class="app-header transparent-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<div class="branding-wrap">-->
                <!--brand start-->
                <div class="navbar-brand float-left">
                    <a class="" href="index.html">
                        <img class="logo-light" src="{{asset('adv/img/logo/logo-white.png')}}" srcset="{{asset('adv/img/logo/logo-white.png')}} 1.5x" alt="get quick online loans in 24 hours">
                         <img class="logo-dark" src="{{asset('adv/img/logo/logo-black.png')}}" srcset="{{asset('adv/img/logo/logo-black.png')}} 1.2x" alt="get quick online loans in 24 hours">
                    </a>
                </div>
                <!--brand end-->
                <!--start responsive nav toggle button-->
                <div class="nav-btn hamburger hamburger--slider js-hamburger ">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!--end responsive nav toggle button-->
                <!--</div>-->

                <!--top mega menu start-->
                <nav id="vl-menu">
                    <!--extra links start-->
                    <div class="float-right nav-extra-link">
                        <a href="{{route('loan-application')}}" class="btn btn-sm btn-pill btn-yellow mt-3">Apply Now</a>
                    </div>
                    <!--extra links end-->
                    <!--start nav-->
                    <ul class="vlmenu light-sub-menu slide-effect float-right">
                        
                        <li><a href="#">Loans <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                <li>
                                    <a href="{{route('quick-business-loans-nigeria')}}"> Business Loans</a>
                                  
                                   
                                </li>

                                <li><a href="{{route('quick-personal-loans-nigeria')}}">Personal Loans </a>
                                   
                                </li>
                            </ul>
                            <!--end level 2-->
                        </li>
                        <li><a href="{{route('online-investment-company-nigeria')}}">Investment</a>
                          
                        </li>
                         <li><a href="#">About Us <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                <li>
                                    <a href="{{route('about')}}"> Company</a>
                                  
                                   
                                </li>

                                <li><a href="{{route('board')}}">Board of Directors </a>
                                   
                                </li>

                                <li><a href="#">Career </a>
                                   
                                </li>
                            </ul>
                            <!--end level 2-->
                        </li>
                         <li><a href="#">Blog</a>
                          
                        </li>
                       

                </nav>
                <!--top mega menu end-->
            </div>
        </div>
    </div>
</header>