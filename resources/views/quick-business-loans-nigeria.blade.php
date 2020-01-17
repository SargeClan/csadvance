
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
    <div class="hero-img bg-overlay" data-overlay="2" style="background-image: url({{asset('adv/img/get-quick-online-business-loans-nigeria.jpg')}});"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="push-down col-md-7">
                <!-- heading -->
                <h2 class="">
                    Business Loans
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
            <div class="col-md-4">
               <!--  <h6>About Us</h6> -->
                <h2 class="loan-service mb-4">Business Loans made simple!</h2>
                <p class="text-muted">Financing is the lifeblood of every business. We understand the need for small and medium business owners in Nigeria to scale up. Our business loans are designed to meet your capital needs on the path to expansion and growth. Whether you're looking for a loan to capitalise on a strategic opportunity or a line of credit to meet an important business need, CS Advance is ready to help you build and grow your business.</p>
                <a href="{{route('loan-application')}}" class="btn btn-pill btn-yellow btn-relative mt-lg-5">Apply Now</a>

            </div>
            <div class="col-md-6">
                <img src="{{asset('adv/img/logo/business-loan-company-lagos-nigeria.jpeg')}}" alt="get loans for your business at CS Advance, no collateral">
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
            <th>Eligibility</th>
            <th>Documents Required</th>
           
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>You must be a salaried employee</li></td>
            <td>
               <li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Aadhaar card</li>
            </td>
            
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Age: 23-55 years old</li></td>
            <td>
               <li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>PAN card</li>
            </td>
            
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Net Monthly Income must be more than Rs. 20,000.</li></td>
            <td>
               <li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>4 Cheques from your salary Account</li>
            </td>
            
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>No defaults in the last 24 months.</li></td>
            <td>
               <li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Current Address Proof</li>
            </td>
            
        </tr>
         <tr>
            <td><li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>You must be residing in Delhi/NCR, Bangalore, Pune, Chennai,Mumbai or Hyderabad.</li></td>
            <td>
               <li class="custom-list custom-list-border"><i class="fa fa-check font-size-12 pr-3"></i>Permanent Address Proof (in case the permanent address is different from the address on Aadhaar card)</li>
            </td>
            
        </tr>
      
        </tbody>
    </table>
</div>
           
        </div>
    </div>
</div>
<!--goal end-->



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
@include('layouts.footer')
</body>
</html>
