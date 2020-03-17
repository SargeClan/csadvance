
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
    <div class="hero-img bg-navy-overlay" data-overlay="8" style="background-image: url({{asset('adv/img/get-quick-online-business-loans-nigeria.jpg')}});"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="push-down col-md-7">
                <!-- heading -->
                <h2 class="">
                    Contact Us
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--intro start-->
<div class="section-gap">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mb-lg-5 mb-4">
            <div class="col-md-6 mb-lg-5 mb-4">
                <h2 class="loan-service mb-4">We are here to assist you</h2>
                <p class="text-muted">Feel free to contact us or just drop a line here. Our support staff will reach you very soon</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="blurb blurb-border mb-4">
                    <i class="iconers fas fa-building"></i>
                    <h6 class="mb-3">Office Address</h6>
                    <p>8b Sumbo Jibowu Street, Ikoyi<br>
                       </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blurb blurb-border mb-4">
                    <i class="iconers fas fa-envelope-open-text"></i>
                    <h6 class="mb-3">Email </h6>
                    <p><a href="mailto:sisi@mycsadvance.com">sisi@mycsadvance.com</a></p>
                       
                </div>
            </div>
            <div class="col-md-4">
                <div class="blurb blurb-border mb-4">
                    <i class="iconers fas fa-headset"></i>
                    <h6 class="mb-3">Business Phone</h6>
                    <p><a href="tel:+23417007910">01 7007 910</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--intro end-->

<!--contact form start-->
<div class="section-gap pt-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="position-relative">
                    <img class="card-img-right flex-grow-1 rounded" src="{{asset('adv/img/logo/loan-company-lagos.jpg')}}" alt="">

                    <div class="c-form-content text-left">
                        <h5 class="mb-3">Do You Have Any Questions for Us?</h5>
                        <p class="mb-3">At CSAdvance Finance, you are the star of your dreams. Enjoy great customer service and a personalized experience. </p>
                        <!-- <a href="#" class="btn btn-sm btn-pill btn-theme">Ask a Question</a> -->
                    </div>
                </div>
                <div class="no-show"><br/></div>

            </div>
            <div class="col-md-6 bg-gray rounded">

                <form class="p-4 py-5" action="{{route('contact.us')}}" method="post">
                    @csrf 
                    @method('POST')
                    <div>
                
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Success! </strong> {{ session()->get('success') }} 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                @if(session()->has('error'))
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Success! </strong> {{ session()->get('error') }}  
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                </div>
                    <div class="form-group">
                        <input type="text" name="name" pattern=".{3,50}" title="Name too short" required class="form-control" placeholder="Name" vlaue="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" pattern=".{3,20}" title="Subject too short" required class="form-control" placeholder="Subject" vlaue="{{old('subject')}}">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" pattern=".{10}" title="Mesage too short" name="message" rows="4" placeholder="Message" required>{{old('message')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-pill btn-yellow">Submit</button>
                </form>
            </div>


        </div>
    </div>
</div>
<!--contact form end-->

<!--FAQ start-->
<div class="section-gap py-0">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mb-lg-5 mb-4 pb-lg-5">
            <div class="col-md-8">
                <h2 class="mb-4">Frequently Asked Question</h2>
                 <p class="px-md-4">Didn’t get your desired question here? Please visit our <a href="#">knowledge base</a> or contact our
                    <a href="tel:+23417007910">support</a> team for further query.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">What is the CSAdvantage?</h6>
                    <p class="text-muted mb-0">At CSAdvance, we offer quick and easy loans without collateral, payable over a period of time. The CSAdvantage translates to convenience and speed.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">Who can get the CSAdvantage?</h6>
                    <p class="text-muted mb-0">
Anyone between 22 and 60 years, with a verifiable source of income and a functioning phone number.<br/><br/></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">Can I run concurrent loans?</h6>
                    <p class="text-muted mb-0">You can access the second loan after full repayment of the first.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">How much can I access?</h6>
                    <p class="text-muted mb-0">CSAdvance Finance offers as little as N20,000 and up to N5million.</p>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('adv/img/contact-bottom.jpg')}}" alt="">
</div>
<!--FAQ end-->

<!--promo start-->
<div class="section-gap">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-md-6 mb-lg-5 mb-4">
                <h2 class="mb-4">Ready To Get Started</h2>
                <p class="text-muted">Let's help you reach your financial goals.</p>
                <a href="{{route('loan-application')}}" class="btn btn-pill btn-yellow btn-relative mt-lg-5">Apply Now</a>
            </div>
        </div>
    </div>
</div>
<!--promo end-->
<!--footer start-->
@include('layouts.footer')

</body>
</html>
