
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sarge">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('adv/img/logo/favicon.png')}}">

    <title>Get Quick Online Loans in Minutes without Collateral in Nigeria | CS Advance</title>

  @include('layouts.header')
</head>

<body>
<!--header start-->
@include('layouts.nav')
<!--header end-->


<!--page title start-->
<section class="section-gap section-top bg-gray text-center">
   <div class="hero-img bg-navy-overlay" data-overlay="2" style="background: #21409A; /* background-image: url(assets/img/get-quick-online-business-loans-nigeria.jpg);*/"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="push-down col-md-7">
                <!-- heading -->
                <h2 class="">
                    The Company
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--about us start-->
<div class="section-gap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <h6 class="loan-service">About Us</h6>
                <h2 class="mb-4">Your Unrelenting Partner in Financial Progress</h2>
                <p class="text-muted">CSAdvance is a contemporary finance firm that provides individuals with access to financing solutions.  We offer easy and swift collateral-free loans at the push of a button. </p><p><i>Getting you to the next level is the reason for our existence.</i> </p><p>As your unrelenting partner in progress, we are also committed to bringing your dreams to life. Grow your wealth and get escape routes for your tight financial situations.</p>
           <p>Disrupting existing industry models, we have innovated the business of lending, to create better, easier and faster service delivery. Small but nimble, we beat the behemoths to make our customers’ dreams come true.</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('adv/img/logo/quick-business-loans-lagos-nigeria.jpeg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!--about us end-->

<!--goal start-->
<div class="section-gap bg-gray">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8 mb-lg-5 mb-4">
                <!-- <h6>Our Goal</h6>
                <h2 class="mb-4">Be The Star of Your Dreams</h2> -->
            </div>
            <div class="col-md-5">
                <h4>Our Resolve</h4>
                <p class="text-muted">To make YOU successful by providing tailored financial solutions swiftly and conveniently. We beat the bottlenecks created by the behemoths to make our customers’ dreams come true.</p>
                <!-- <ul class="list-unstyled text-muted">
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>Nunc placerat mi id nam laoreet urna</li>
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>Praesent pharetra, justo ut </li>
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>Leo quam aliquet diam</li>
                </ul> -->
            </div>
            <div class="col-md-5">
                <h4>Our Offer</h4> 
                <p class="text-muted">We offer convenience, transparency thus opening up the financial market for you and making it more inclusive than it has ever been. </p>
                <!-- <ul class="list-unstyled text-muted">
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>Nunc placerat mi id nam laoreet urna</li>
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>Praesent pharetra, justo ut </li>
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>Leo quam aliquet diam</li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<!--goal end-->


<!--promo start-->
<div class="section-cta">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-md-6 mb-lg-5 mb-4">
                <h2 class="mb-4">Ready To Get Started?</h2>
                <p class="text-muted text-serve">Let's help you reach your financial goals.</p>
                <a href="{{route('loan-application')}}" class="btn btn-pill btn-yellow mt-lg-5 btn-serve">Apply Now</a>
            </div>
        </div>
    </div>
</div>
<!--promo end-->
@include('layouts.footer')
</body>
</html>
