
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
   @include('layouts.header')
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
   <style>
   #sorry {
    display: none;
}
   </style>
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
                    Loan Application
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
               <h6>Get up to ₦5,000,000</h6>
                <h2 class="mb-4">
                With Our Fast & Easy Cash Loan Application</h2>
                <p class="text-muted"> Life throws surprises at us when we least expect, we are here to help. Start your loan journey here!</p>
                <div>
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Success!</strong> {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                @if(session()->has('error'))
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error!</strong>  {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                
                </div>

            </div>

            <div class="col-md-6">
                <form action="{{route('user.loan')}}" method="POST">
                @csrf
                @method('POST')
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="full_name" class="form-control" placeholder="" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="" required>
    </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" name="phone" class="form-control" placeholder="" required>
    </div>
      <div class="form-group">
        <label>Loan Amount</label>
        <b id="amountLimit" style="color: red;"></b> 
        <input type="number" name="amount" class="form-control loan" placeholder="₦200,000 - ₦5,000,000" >
    </div>
        <div class="form-group">
            <label>Repayment Period</label>
        <select class="custom-select occupation" name="repayment" required>
            <option selected disabled>Select an appropriate timeframe</option>
            <option value="3months">3 months</option>
            <option value="6months">6 months</option>
            <option value="9months">9 months</option>
            <option value="12months">12 months</option>

        </select>
    </div>
       <div class="form-group">
       <div class="alert alert-danger alert-dismissible fade show" role="alert" id="sorry">
                    Sorry! You are not eligible for our loans. You must be employed or self employed to apply.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
        <label>Employment Status</label>
        <select class="custom-select occupation" name="employment_status" required>
            <option selected disabled>Select an appropriate option</option>
            <option value="Employed">Employed</option>
            <option value="Self Employed">Self Employed</option>
            <option value="Unemployed">Unemployed</option>
        </select>
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" name="message" rows="5" placeholder="Additional message"></textarea>
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" required name="terms" value="accepted" class="custom-control-input" id="customCheck0">
            <label class="custom-control-label" for="customCheck0">I accept all terms and conditions</label>
        </div>
    </div>
    <button type="submit" class="btn btn-pill btn-yellow occupation-button">Apply</button>
</form>
            </div>
        </div>
    </div>
</div>
<!--about us end-->




@include('layouts.footer')
<script>
$(document).ready(function () {
    $(".occupation").change(function () {
        if ($(this).val() == "Unemployed") {
            $("#sorry").show() 
            $(".occupation-button").hide()
        }
        if ($(this).val() != "Unemployed") {
            $("#sorry").hide()
            $(".occupation-button").show()
        }
    });

    $(".loan").keyup(function () {
        if ($(this).val() < 200000 ) {
            //$(".amountLimit").hide() 
            document.getElementById("amountLimit").innerHTML = " must be greater than 200,000 naira";
            $('.occupation-button').attr('disabled', true);
        }
        if ($(this).val() > 5000000) {
            document.getElementById("amountLimit").innerHTML = " must not be greater than 5,000,000 naira";
            $('.occupation-button').attr('disabled', true);
        }
        if ($(this).val() >= 200000 && $(this).val() < 5000000 ) {
            //$("#amountLimit").hide()
            $('.occupation-button').attr('disabled', false);
        }
        
    });
});
</script>
</body>
</html>
