
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
   #sorry .amountLimit {
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
                    Success! <span>{{ session()->get('success') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    An error occured, please try again!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> --}}
                <div id="required-msg" class="alert alert-danger alert-dismissible fade show" role="alert">
                    Please fill in a fields.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div id="sorry" class="alert alert-danger alert-dismissible fade show" role="alert">
                    Sorry! You are not eligible for our loans. You must be employed or self employed to apply.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                </div>

            </div>
{{-- 
            <div class="col-md-6">
                <form>
                    <div id="step-1" class="">
                        <h6 style="text-align: center;">Personal Information</h6>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="full_name" value="{{old('full_name')}}" placeholder="First name, Middle name & Surname" required>
                        </div>

                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="tel" name="phone_no" class="form-control" placeholder="Enter Phone" value="{{old('phone_no')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" placeholder="" required value="{{old('dob')}}">
                        </div>

                        <div class="form-group">
                            <label>Personal Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="" required value="{{old('email')}}">
                        </div>

                        <div class="form-group">
                            <label for="">Marital Status</label>
                        <select name="mar_status" class="form-control" id="">
                            <option label="Choose Status" disabled selected></option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorsed">Divorsed</option>
                            <option value="dating">Dating</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="">State of residence</label>
                           <select name="st_residence" class="form-control" id="">
                            <option label="Choose State" disabled selected></option>
                            <option>ABUJA FCT</option>
                            <option>ABIA</option>
                            <option>ADAMAWA</option>
                            <option>AKWA IBOM</option>
                            <option>ANAMBRA</option>
                            <option>BAUCHI</option>
                            <option>BAYELSA</option>
                            <option>BENUE</option>
                            <option>BORNO</option>
                            <option>CROSS RIVER</option>
                            <option>DELTA</option>
                            <option>EBONYI</option>
                            <option>EDO</option>
                            <option>EKITI</option>
                            <option>ENUGU</option>
                            <option>GOMBE</option>
                            <option>IMO</option>
                            <option>JIGAWA</option>
                            <option>KADUNA</option>
                            <option>KANO</option>
                            <option>KATSINA</option>
                            <option>KEBBI</option>
                            <option>KOGI</option>
                            <option>KWARA</option>
                            <option>LAGOS</option>
                            <option>NASSARAWA</option>
                            <option>NIGER</option>
                            <option>OGUN</option>
                            <option>ONDO</option>
                            <option>OSUN</option>
                            <option>OYO</option>
                            <option>PLATEAU</option>
                            <option>RIVERS</option>
                            <option>SOKOTO</option>
                            <option>TARABA</option>
                            <option>YOBE</option>
                            <option>ZAMFARA</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="">Local govt. area of residence</label>
                            <input type="text" name="lga_residence" class="form-control" placeholder="" required value="{{old('lga_residence')}}">
                        </div>

                        <div class="form-group">
                            <label for="">House address</label>
                            <input type="text" name="home_addr" class="form-control" placeholder="" required value="{{old('home_addr')}}">
                        </div>

                        <div class="form-group">
                            <label for="">Next of kin name</label>
                            <input type="text" name="nok_name" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">NOK relationship</label>
                            <input type="text" name="nok_relationship" class="form-control" placeholder="" required value="{{old('nok_relationship')}}">
                        </div>

                        <div class="form-group">
                            <label for="">NOK phone number</label>
                            <input type="tel" name="nok_phone" class="form-control" placeholder="" required value="{{old('nok_phone')}}">
                        </div>

                        <div class="form-group">
                            <label for="">upload government issued ID</label>
                            <input type="file" name="govt_id" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Employment Status</label>
                            <select id="employment_status" name="employment_status" class="custom-select" required value="{{old('employment_status')}}">
                                <option lable="Select an appropriate option" selected></option>
                                <option value="employed">Employed</option>
                                <option value="selfemployed">Self Employed</option>
                                <option value="unemployed">Unemployed</option>
                            </select>
                        </div>

                        <div class="nxt-btn">
                            <button type="button" id="nxt-1" class="btn btn-pill btn-yellow">Next</button>
                        </div>
                    </div>

                    <div id="step-2" class="">
                        <h6 style="text-align: center;">Employent Details</h6>
                        <div class="form-group">
                            <label for="">Employer Name</label>
                            <input type="text" name="employer_name" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Employer Address</label>
                            <input type="text" name="employer_addr" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Employer email address</label>
                            <input type="email" name="employer_email" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Upload work ID</label>
                            <input type="file" name="work_id" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Work email address</label>
                            <input type="email" name="work_email" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Current net salary</label>
                            <input type="number" name="net_salary" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Payday</label>
                            <input type="text" name="pay_day" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Industry</label>
                            <select name="industry" id="industry" class="form-control">
                                <option value="">choose</option>
                                <option value="agric">Agriculture</option>
                                <option value="banking">Banking</option>
                                <option value="engineering">Engineering</option>
                            </select>
                        </div>

                        <div class="nxt-btn">
                            <button type="button" id="prev-2" class="btn btn-pill btn-yellow">previous</button>
                            <button type="button" id="nxt-2" class="btn btn-pill btn-yellow">Next</button>
                        </div>
                    </div>

                    <div id="step-3" class="">
                        <h6 style="text-align: center;">Loan Details</h6>
                        <div class="form-group">
                            <label for="">Eligble loan amount</label>
                            <input type="text" name="eligible_loan" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tenor</label>
                            <input type="text" name="tenor" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <h6>Do you have any existing loan?</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="existing_loan" id="yes" value="yes">
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="existing_loan" id="no" value="no">
                                <label class="form-check-label" for="no">No</label>
                            </div>
                        </div>

                        <div class="form-group" id="repayment">
                            <label for="">Monthly repayment amount</label>
                            <input type="text" name="monthly_repay" class="form-control" placeholder="">
                        </div>

                        <div class="form-group" id="type-of-loan">
                            <label for="">Specify Loan</label>
                            <select name="loan_type" class="form-control" id="loan-type">
                                <option value="">Choose</option>
                                <option value="mortgage">Mortgage</option>
                                <option value="CarLoan">Car Loan</option>
                                <option value="PersonalLoan">Personal Loan</option>
                            </select>
                        </div>

                        <div class="nxt-btn">
                            <button type="button" id="prev-3" class="btn btn-pill btn-yellow">previous</button>
                            <button type="button" id="nxt-3" class="btn btn-pill btn-yellow">Next</button>
                        </div>
                    </div>

                    <div id="step-4" class="">
                        <h6 style="text-align: center;">Bank Statement</h6>
                        <div class="form-group">
                            <label for="">Select bank</label>
                            <select name="bank_state_bank" id="bank-state">
                                <option value="">Choose</option>
                                <option value="zenith">Zenith</option>
                                <option value="access">Access</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Upload bank statement of your salary account</label>
                            <input type="file" name="bank_statement_file" class="form-control" placeholder="" required>
                        </div>

                        <div class="nxt-btn">
                            <button type="button" id="prev-4" class="btn btn-pill btn-yellow">previous</button>
                            <button type="button" id="nxt-4" class="btn btn-pill btn-yellow">Next</button>
                        </div>
                    </div>

                    <div id="step-5" class="">
                        <h6 style="text-align: center;">Disbursement Details</h6>
                        <div class="form-group">
                            <label for="">Account Name</label>
                            <input type="text" name="account_name" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Account Number</label>
                            <input type="text" name="account_number" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Bank</label>
                            <select name="bank" id="bank">
                                <option label="choose">Choose</option>
                                <option value="zenith">Zenith</option>
                                <option value="access">Access</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="customCheck0">
                                <label class="custom-control-label" for="customCheck0">I accept all terms and conditions</label>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;" class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="" required>
                    </div>
                    <div style="display: none;" class="form-group">
                        <label>Loan Amount</label>
                        <input type="text" class="form-control" name="loan_amount" placeholder="₦200,000 - ₦5,000,000" required>
                    </div>
                        <div style="display: none;" class="form-group">
                            <label>Repayment Period</label>
                        <select class="custom-select" name="repay_period" required>
                            <option selected>Select an appropriate timeframe</option>
                            <option value="1">3 months</option>
                            <option value="2">6 months</option>
                            <option value="3">9 months</option>
                            <option value="3">12 months</option>

                        </select>
                    </div>
                    <div style="display: none;" class="form-group">
                        <label>Employment Status</label>
                        <select class="custom-select" name="employ_status" required>
                            <option selected>Select an appropriate option</option>
                            <option value="1">Employed</option>
                            <option value="2">Self Employed</option>
                            <option value="3">Unemployed</option>
                        </select>
                    </div>
                    <div style="display: none;" class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="add_msg" rows="5" placeholder="Additional message"></textarea>
                    </div>
                    
                    <div class="end-btn">
                        <button type="button" id="prev-5" class="btn btn-pill btn-yellow">Previous</button>
                        <button type="submit" id="submit-btn" class="btn btn-pill btn-yellow">Finish</button>
                    </div>
                    <!-- <button type="submit" class="btn btn-pill btn-yellow">Apply</button> -->
                </form>
            </div> --}}
            <div class="col-md-6">
                <form action="{{route('loan-application-store')}}" method="POST">
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
        <label>Loan Amount <span id="amountLimit" style="color:red;"></span></label>
        <input type="text" class="form-control loan" name="amount"  placeholder="Amount" value="{{old('amount')}}" required>
        <div class="text-danger">{{$errors->first('amount')}}</div>
    <div class="text-danger">{{$errors->first('img_3')}}</div></div>
        <div class="form-group">
            <label>Repayment Period</label>
        <select class="custom-select" name="tenure" required value="{{old('tenure')}}">
            <option selected>Select an appropriate timeframe</option>
            <option value="3 months">3 months</option>
            <option value="6 months">6 months</option>
            <option value="9 months">9 months</option>
            <option value="12 months">12 months</option>

        </select>
        <div class="text-danger">{{$errors->first('tenure')}}</div>
    </div>
      <div class="form-group">
        <label>Employment Status </label>
        <select class="custom-select occupation" name="occupation" id="emp" required >
            <option selected>Select an appropriate option</option>
            <option value="Employed">Employed</option>
            <option value="Self-employed">Self Employed</option>
            <option value="Unemployed">Unemployed</option>
        </select>
    </div>
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
    <button type="submit" class="btn btn-pill btn-yellow occupation-button">Invest</button>
</form>
            </div>
        </div>
    </div>
</div>
<!--about us end-->





@include('layouts.footer')
<script>
 $(document).ready(function () {
     $("#sorry").hide();
    $(".occupation").click(function () {
        if ($(this).val() == "Unemployed") {
            $("#sorry").show();
            $(".occupation-button").hide();
        }
        if ($(this).val() != "Unemployed") {
            $("#sorry").hide()
            $(".occupation-button").show()
        }
    });
    // $("#yes").click(function () {
    //     $("#type-of-loan").show()
    // });
    // $("#no").click(function () {
    //     $("#type-of-loan").hide()
    // });
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
