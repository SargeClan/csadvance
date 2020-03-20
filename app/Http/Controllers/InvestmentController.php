<?php

namespace App\Http\Controllers;
use App\Investment;
use Illuminate\Http\Request;
use App\Mail\UserInvestMail;
use App\Mail\AdminUserInvestMail;
use Illuminate\Support\Facades\Mail;
class InvestmentController extends Controller
{
    public function index(Request $request)
    {
        return view('investment-application');
    }

    /**
     * Show the form for storing specified resource.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function store(Investment $investment, Request $request)
    {
        
        $validatedData = $request->validate([
            'full_name' => 'required|max:40|min:10',
             'email' => 'required|max:30|min:5',
             'phone' => 'required|min:5',
              'amount' => 'required',
             'tenure' => 'required',
            'message' => 'required',
            'terms' => 'accepted'
        ]);
        $investment = [
            'full_name' => request('full_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'amount' => request('amount'),
            'tenure' => request('tenure'),
            'message' => request('message'),
            'terms' => request('terms')
        ];
//dd($investment);
        if($investment){
            Mail::to($request->email)->send(new UserInvestMail($investment));
            Mail::to('sargeapi@gmail.com')->send(new AdminUserInvestMail($investment));
            return back()->with('success', 'Your application has been submitted. You will be contacted shortly by one of our representatives.');
        }else{
            return back()->with('error', 'An error occured, please try again!'); 
        }
        
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
