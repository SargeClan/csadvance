
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/logo/favicon.png">

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
                    Investment Application
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
               <h6>Make Your Cash Work for You</h6>
                <h2 class="mb-4">
                With Our Fast & Easy Cash Investment Solution</h2>
                <p class="text-muted"> With competitive interest rates that grows your money round the clock, you get the chance to make money while you sleep!</p>
                <div>
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Success!</strong> {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                 <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    An error occured, please try again!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> -->

                <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Sorry! You are not eligible for our loans. You must be employed or self employed to apply.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> -->
                </div>

            </div>

            <div class="col-md-6">
                <form action="{{route('investment-application-store')}}" method="POST">
                @csrf 
                @method('POST')
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="full_name" class="form-control" placeholder="Enter full name" required value="{{old('first_name')}}">
        <div class="text-danger">{{$errors->first('full_name')}}</div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required value="{{old('email')}}">
        <div class="text-danger">{{$errors->first('email')}}</div>
    </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required value="{{old('phone')}}">
        <div class="text-danger">{{$errors->first('phone')}}</div>
    </div>
      <div class="form-group">
        <label>Investment Amount</label>
        <input type="text" class="form-control" name="amount" placeholder="Amount" value="{{old('amount')}}" required>
        <div class="text-danger">{{$errors->first('amount')}}</div>
    <div class="text-danger">{{$errors->first('img_3')}}</div></div>
        <div class="form-group">
            <label>Investment Tenure</label>
        <select class="custom-select" name="tenure" required value="{{old('tenure')}}">
            <option selected>Select an appropriate timeframe</option>
            <option value="3 months">3 months</option>
            <option value="6 months">6 months</option>
            <option value="9 months">9 months</option>
            <option value="12 months">12 months</option>

        </select>
        <div class="text-danger">{{$errors->first('tenure')}}</div>
    </div>
       <!-- <div class="form-group">
        <label>Employment Status</label>
        <select class="custom-select" required>
            <option selected>Select an appropriate option</option>
            <option value="1">Employed</option>
            <option value="2">Self Employed</option>
            <option value="3">Unemployed</option>
        </select>
    </div> -->
    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" name="message" rows="5" placeholder="Additional message">{{old('message')}}</textarea>
    
        <div class="text-danger">{{$errors->first('message')}}</div></div>
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="terms" class="custom-control-input" id="customCheck0" >
            <label class="custom-control-label" for="customCheck0">I accept all terms and conditions</label>
        </div>
        <div class="text-danger">{{$errors->first('img_3')}}</div>
    </div>
    <button type="submit" class="btn btn-pill btn-yellow">Invest</button>
</form>
            </div>
        </div>
    </div>
</div>
<!--about us end-->



@include('layouts.footer')

</body>
</html>
