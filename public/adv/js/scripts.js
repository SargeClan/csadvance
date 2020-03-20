/* ---------------------------------------------
 common scripts
 --------------------------------------------- */

 ;(function () {

    "use strict"; // use strict to start

    /* ---------------------------------------------
     WOW init
     --------------------------------------------- */

    new WOW().init();

    $(document).ready(function () {

        /* ---------------------------------------------
          vl custom menu
        --------------------------------------------- */
        vlmenu.init({
            selector: ".vlmenu"
        });

        $('.js-hamburger').on('click', function () {
            $('.hamburger').toggleClass('is-active');
        });


        /* ---------------------------------------------
          nav sticky
        --------------------------------------------- */
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 200) {
                $('.app-header').addClass('sticky-nav');
            } else {
                $('.app-header').removeClass('sticky-nav');
            }
        });


        /* ---------------------------------------------
         overlay nav
         --------------------------------------------- */

        $('#nav_toggle').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $('#nav_overlay').toggleClass('open');
            $('.extra_link, .overlay-nav-social-link').toggleClass('open');
        });

        /* ---------------------------------------------
         portfolio filtering
         --------------------------------------------- */

        var $portfolio = $('.portfolio-grid');
        if ($.fn.imagesLoaded && $portfolio.length > 0) {
            imagesLoaded($portfolio, function () {
                $portfolio.isotope({
                    itemSelector: '.portfolio-item',
                    filter: '*'
                });
                $(window).trigger("resize");
            });
        }

        $('.portfolio-filter').on('click', 'a', function (e) {
            e.preventDefault();
            $(this).parent().addClass('active').siblings().removeClass('active');
            var filterValue = $(this).attr('data-filter');
            $portfolio.isotope({filter: filterValue});
        });

        /*---------------------------------------------
         Portfolio popup
         ---------------------------------------------*/

        $(".portfolio-gallery").each(function () {
            $(this).find(".popup-gallery").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true
                }
            });
        });

        $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            disableOn: 300,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        /* ---------------------------------------------
         Fun facts
         --------------------------------------------- */

        function animateFacts(fact) {
            if($.fn.visible && $(fact).visible() && ! $(fact).hasClass('animated') ) {
                $(fact).animateNumber({
                    number: parseInt($(fact).data('target'),10)
                }, 2000);
                $(fact).addClass('animated');
            }
        }

        function initFunFacts() {
                var funFacts = $('.fun-box').find('.value');
            funFacts.each(function() {
                animateFacts(this);
            });
        }

        initFunFacts();

        $(window).on("scroll", function () {
            initFunFacts();
        });


        /* ---------------------------------------------
         owl-carousel
         --------------------------------------------- */

        $('.owl-carousel').each(function() {
            var a = $(this),
                items = a.data('items') || [1,1,1],
                margin = a.data('margin'),
                loop = a.data('loop'),
                nav = a.data('nav'),
                dots = a.data('dots'),
                center = a.data('center'),
                autoplay = a.data('autoplay'),
                autoplaySpeed = a.data('autoplay-speed'),
                rtl = a.data('rtl'),
                autoheight = a.data('autoheight');

            var options = {
                nav: nav || false,
                loop: loop || false,
                dots: dots || false,
                center: center || false,
                autoplay: autoplay || false,
                autoHeight: autoheight || false,
                rtl: rtl || false,
                margin: margin || 0,
                autoplayTimeout: autoplaySpeed || 3000,
                autoplaySpeed: 400,
                autoplayHoverPause: true,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: { items: items[2] || 1 },
                    576: { items: items[1] || 1 },
                    1200: { items: items[0] || 1}
                }
            };

            a.owlCarousel(options);
        });

        /* ---------------------------------------------
         Countdown
         --------------------------------------------- */

        $('.js_count-date').countdown('2021/2/20').on('update.countdown', function(event) {
            var $this = $(this).html(event.strftime(''
                + '<div class="count-block"><h2 class="u-FontSize50">%D</h2> <span>Days</span> </div>'
                + '<div class="count-block"><h2 class="u-FontSize50">%H</h2> <span>Hours</span> </div>'
                + '<div class="count-block"><h2 class="u-FontSize50">%M</h2> <span>Minutes</span> </div>'
                + '<div class="count-block"><h2 class="u-FontSize50">%S</h2> <span>Seconds</span></div>'));
        });

        /* ---------------------------------------------
         typist init
         --------------------------------------------- */
        if (typeof Typist == "function") {
            new Typist(document.querySelector(".typist-text"), {
                // letterInterval: 10,
                // speed: 100,
                // blinkSpeed: 5,
                // textInterval: 6000,
            });
        }


        /* ---------------------------------------------
         Configure tooltips globally
         --------------------------------------------- */

        $('[data-toggle="tooltip"]').tooltip();

        /* ---------------------------------------------
         Configure popover globally
         --------------------------------------------- */
        $('[data-toggle="popover"]').popover();



//form wizard
        // wizard form
        $('#required-msg, #eligibilty-msg, #step-2, #step-3, #repayment, #type-of-loan, #step-4, #step-5, .end-btn').hide();
        
        //next 1 btn
        $('#nxt-1').on('click', function(e){
            //vars
            let fullName = $('input[name="full_name"]').val();
            let phoneNo = $('input[name="phone_no"]').val();
            let dob = $('input[name="dob"]').val();
            let personalEmail = $('input[name="email"]').val();
            let maritalStatus = $('input[name="mar_status"]').val();
            let stateOfResidence = $('input[name="st_residence"]').val();
            let lgaResidence = $('input[name="lga_residence"]').val();
            let houseAddress = $('input[name="home_addr"]').val();
            let kinName = $('input[name="nok_name"]').val();
            let kinRealtionship = $('input[name="nok_relationship"]').val();
            let kinPhone = $('input[name="nok_phone"]').val();
            let govtId = $('input[name="govt_id"]').val();
            let employmentStatus = $('#employment_status').children("option:selected").val();


            if(fullName == "" || phoneNo == "" || dob == "" || personalEmail =="" || maritalStatus =="" || stateOfResidence =="" || lgaResidence =="" || houseAddress == "" || kinName == "" || kinRealtionship =="" || kinPhone =="" || govtId == "" || employmentStatus ==""){
                $('#required-msg').show();
               
            }
            else if(employmentStatus == "unemployed" || employmentStatus == "selfemployed"){
                 //insert
            //      e.preventDefault();
            //      // $company = $('.company');
            //      // $position = $('.position');
            //      // $linkedin = $('.linkedin');
            //      $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //      $.ajax({
            //         url: "{{ route('investment-data') }}",
            //         method: 'POST',
            //         data: {
            //           full_name:fullName,
            //           phone_no:phoneNo,
            //           dob: dob,
            //           email: personalEmail,
            //           mar_status: maritalStatus,
            //           st_residence: stateOfResidence,
            //           lga_residence: lgaResidence,
            //           home_addr: houseAddress,
            //           nok_name: kinName,
            //           nok_relationship: kinRealtionship,
            //           nok_phone: kinPhone,
            //           govt_id: govtId,
            //           employment_status: employmentStatus
                       
            //         },
            //         success: function(data){
            //          console.log('success: about updated');
            //          console.log(data);
            //          //  var data= JSON.parse(JSON.stringify(data));
            //          // fullName.html(data.fullName);
            //          // phoneNo.html(data.email);
            //          // phoneNo.html(data.linkedin);
            //          // $("#workSuccessMsg").fadeIn(2000);
            //          // $("#workSuccessMsg").fadeOut(3000);
                     
                     
            //         },
            //         error: function(data){
            //           console.log('Somthing went wrong');
            //           console.log(data);
            //          //  $("#workErrorMsg").fadeIn(1000);
            //          // $("#workErrorMsg").fadeOut(6000);
            //         }
            //   });
                $('#eligibilty-msg').show();

            }
            else{
                
                $('#step-1, #required-msg, #eligibilty-msg').hide();
                $('#step-2').show();
            }
        });

        //next 2 btn
        $('#nxt-2').on('click', function(){
            let employerName = $('input[name="employer_name"]').val();
            let employerAddress = $('input[name="employer_addr"]').val();
            let employerEmail = $('input[name="employer_email"]').val();
            let workId = $('input[name="work_id"]').val();
            let workEmail = $('input[name="work_email"]').val();
            let salary = $('input[name="net_salary"]').val();
            let payDay = $('input[name="pay_day"]').val();
            let industry = $('#industry').children("option:selected").val();

            if(employerName == "" || employerAddress =="" || employerEmail == "" || workId == "" || workEmail == "" || salary == "" || payDay == "" || industry == ""){
                $('#required-msg').show();
            }else{
                $('#step-2, #required-msg').hide();
                $('#step-3').show();
            }
            
        });

        $('#prev-2').on('click', function(){
            $('#step-2').hide();
            $('#step-1').show();
        });

        //next 3
        $('#nxt-3').on('click', function(){

            //vars
            let eligbleLoan = $('input[name="eligible_loan"]').val();
            let tenor = $('input[name="tenor"]').val();
            let existingLoan = $('input[name=existing_loan]:checked').val();
            //let monthlyRepayment = $('input[name="monthly-repay"]').val();
            //let loanType = $('#loan-type').children("option:selected").val();

            if(eligbleLoan == "" || tenor == "" || !existingLoan){
                $('#required-msg').show();
            }
            // else if(existingLoan == "yes"){
            //     $('#repayment, #type-of-loan').show();
            // }
            // else if(existingLoan == "no"){
            //     $('#repayment, #type-of-loan').hide();
            // }
            else{
                $('#step-3, #required-msg').hide();
                $('#step-4').show();
            }
            
        });

        $('#prev-3').on('click', function(){
            $('#step-3').hide();
            $('#step-2').show();
        });

        //next 4
        $('#nxt-4').on('click', function(){

            //vars
            let generateBankState = $('#bank_state_bank').children("option:selected").val();
            let bankStatement = $('input[name=bank_statement_file]').val();

            if(generateBankState == "" && bankStatement == ""){
                $('#required-msg').show();
            }
            else{
                $('#step-4, #required-msg').hide();
                $('#step-5, .end-btn').show();
            }
        });

        $('#prev-4').on('click', function(){
            $('#step-4').hide();
            $('#step-3').show();
        });

        //btn 5
        $('#submit-btn').on('click', function(){
            //vars
            let accountName = $('input[name=account_name]').val();
            let accountNumber = $('input[name=account_number]').val();
            let bank = $('#bank').children("option:selected").val();
            let agreeTerms = $('input[name=terms]:checked').val();

            if(accountName == "" || accountNumber == "" || bank == "" || !agreeTerms){
                $('#required-msg').show();
            }else{
                $('#required-msg').hide();
            }
        })

        $('#prev-5').on('click', function(){
            $('#step-5, .end-btn').hide();
            $('#step-4').show();
        });

    });

})(jQuery);

