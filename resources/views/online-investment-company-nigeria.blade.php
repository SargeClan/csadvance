
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

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
                    Investment
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
            <div class="col-md-5">
                <h6 class="loan-service"></h6>
                <h2 class="mb-4">Make Your Cash Work for You</h2>
                <p class="text-muted">
Put your money in a fund that gives you more without hassle. With competitive interest rates that grow your money round the clock, you get the chance to make money while you sleep.
</p>
                <a href="{{route('loan-application')}}" class="btn btn-pill btn-yellow btn-relative mt-lg-5">Invest Now</a>

            </div>
            <div class="col-md-6">
                <img src="{{asset('adv/img/logo/personal-loan-company-lagos-nigeria.jpeg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!--about us end-->



<!--tab features start-->
<section class="section-gap bg-gray">
    <div class="container">
        <div class="row justify-content-md-center text-center mb-lg-5 mb-4 pb-lg-5">
            <div class="col-md-8">
                <h2 class="mb-md-4">Get a Secure Money Plan </h2>
                <p class="lead text-muted">Stay ahead of the pack. Whether you seek to invest for a fixed period of time or for the long haul, there is an option that meets your money goal.</p>
            </div>
        </div>

        <div class="row justify-content-center ">
            <div class="col-md-12 text-center">
                <ul class="nav nav-group mb-md-5 mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">CS Target</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">CS Invest</a>
                    </li>
                    
                </ul>
                <div class="tab-content text-left">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h4 class="mb-3">CS Target</h4>
                        <p class="text-muted">
                            Do more, be more!<br/>
                            Bring your financial dreams to life with the CSAdvantage.
                            The CS Target account offers you access to great interest rates without the stress of walking into a bank.
                            Think of this as your digital piggy bank!
                            Now you can invest daily, weekly or monthly for a specific purpose and surpass your financial goals. 
                            Live out your adventures like a movie without any cares or fear. <br/><br/>
                            Get a CS Target account today! Start with N50,000.<br/><br/>
                            Benefits include:
                            <ul>
                                <li>Unbelievable interest rate per annum</li>
                                <li>Flexible investment options </li>
                                <li>Swift turnaround time</li>
                            </ul>
                           
                            
                            </p>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h4 class="mb-3">CS Invest</h4>
                        <p class="text-muted">Invest in greater harvest!<br/> Enjoy easy and stress-free returns when you put your resources to work.
                            With the CS Invest option, you can grow your money over a period of time and get unbelievable interest rates via your mobile phone. Unlock real financial power on your journey to fulfilment.<be/><br/>
                            This plan offers you:
                                <ul>
                                    <li>Dedicated relationship manager</li>
                                    <li>Flexible tenor and rollovers</li>
                                    <li>Unrestricted payment options (upfront, monthly and at maturity)</li>
                                    <li>Competitive interest rate per annum</li>
                                </ul>
                                       </p>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</section>
<!--tab features end-->


<!--promo start-->
<div class="section-cta-b">
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