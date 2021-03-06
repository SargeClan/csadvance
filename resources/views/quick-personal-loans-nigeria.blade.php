
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
    <div class="hero-img bg-overlay" data-overlay="2" style="background: #21409A; /*background-image: url({{asset('adv/img/get-quick-online-business-loans-nigeria.jpg')}});*/"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="push-down col-md-7">
                <!-- heading -->
                <h2 class="">
                    Personal Loans
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
               <!--  <h6>About Us</h6> -->
                <h2 class="loan-service mb-4">Personal Loans Made Simple!</h2>
                <p class="text-muted">
                Live life to the max with our personal loans solutions. At CSAdvance, we are committed to making your financial life easier when there is an emergency. Our pay small-small package allows you get fast cash at the click of a 
                button at a minimal interest rate. Join the quick crew today! We are here to help you.</p>
                <a href="{{route('loan-application')}}" class="btn btn-pill btn-yellow btn-relative mt-lg-5">Start Here</a>

            </div>
            <div class="col-md-6">
                <img src="{{asset('adv/img/logo/personal-loan-company-lagos-nigeria.jpeg')}}" alt="apply for personal loans up to 5 million naira, no collateral">
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
                <h6></h6>
                <h2 class="mb-4">Features</h2>
            </div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Eligibility and Documents Required</th>
          
           
        </tr>
        </thead>
        <tbody>

        <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>1 passport photograph</li></td>
           
            
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Age between 22 years and 55 years</li></td>
          
            
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>6 months stamped bank statement from the salary bank account</li></td>
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Valid means of identification (National ID card, PVC, International Passport or Driving License)</li></td>
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Postdated cheques </li></td>
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Duly activated direct debit mandate </li></td> 
        </tr>
        <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Work I.D card</li></td> 
        </tr>
        <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Duly signed Loan Agreement/offer letter</li></td> 
        </tr>
      
        </tbody>
    </table>
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
