<?php

namespace App\Http\Controllers;
use App\Investment;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class InvestmentController extends Controller
{
    public function getUser(Request $request)
    {
      $bvn = $request->input('requested_data');
      
      $client = new Client(); //GuzzleHttp\Client
      $result = $client->request('POST','http://api.secondcaesar.com:8080/PageEndPoints/WS/v1/ValidateBVNFull', [
         
        'form_params' => [
              'request_data' => 'gef0uSyZWA8UAzdC8nw6F0gmtQFeEgdiItVE8/01fctI0caqKJvQ2GiH7nof/hAmsGGDzVSwv9cuxrxMUWVvcO8bZoZJ6VCYMTX6syQ1/InFxttnsMbmQ3Hq7ygdMOOokk4wruATNGrRi7N1WzEjNjXuY+bRISHV+/DM/DrXZJx6FlxtVmQ5EsnYrMj+j+EF1KW80tzS5FlEbcO4ykAO6mIZRbgfpltwCbtiF0nrK6rCycWfEIgmvoXYw58TSZgBcAyE1mRqbS8Mw4kuQmEvNgr/gryGzycxTHWguJIzZEzLxIiIs0AhS7r6oF/55oS1PlpAPNmIfPu8i4Xv8/dWWnifs/AXnb3SsSnBocPyykiirfGFooOwPosUsOeelGne75umBrYy0wSGJhj/z3oimUDNe14GdLwfvIl/Lfe74xuG6riVdP/Y6c3RN+JR02br9k/NhiiGLj80pREuvzBUs/sZaPDi+jOI4WIzJQg86JbR/LP590MKIhnYq9KQFu188eN5/fBT6VaeOW9i8DQoXUcf9Cn0ZCaVZ21zDlza6/aMywwWcTnD9mFmjALTGh3Zr7slpXDBBUFQp6F1LP8cvbopOAVkGXJDm9ymDra93Px4TM5Qs/GFvwVcBBvSpa6XMXsELm60QvLUcFbPF1qOz+UOFVSqmFpk1UogtX+D7UttN3Teo/HtGAS8k+wIGHdPMQRWnRrt0rRRg4Slbg4M+AHZSsV2FnpcCmaGki1QRn8RTQlJwAPAfBbqOlUgR1QvmPum69n2YBXU8Qe1uhLekq8j13gVw1bX5Eq0okh1cQSaSBwT4Zkd5FAy8pVuCn203r7naRxzh8W03/c1rBghjZP4VsR5WzUa/552cD3Va7b0x+Ax/v6s6WdK0VxPqvo45c6abAtQjfy3h0xbGpOrtQ==',
          ]
          // 'headers' => [
          //   'Content-Type' => 'application/x-www-form-urlencoded',
          // ],
          // 'merchantKey' => [
          //   'merchant_code' => 'CSA_4J9EI',
          // ],
      ]);
       dd($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function edit(Investment $investment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $investment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investment $investment)
    {
        //
    }
}
