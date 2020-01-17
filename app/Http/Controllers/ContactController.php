<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; 
use App\Mail\AdminContactMail;
use App\Mail\UserLoanMail;
use App\Mail\AdminUserLoanMail; 
class ContactController extends Controller
{
    public function contactUs(Request $request){
         $contact = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        if($contact){
            Mail::to($request['email'])->send(new ContactMail($contact));
            Mail::to('sargeapi@gmail.com')->send(new AdminContactMail($contact));
            return back()->with('success', 'Your inquiry has been submitted. You will be contacted shortly by one of our representatives.');
        }else{
            return back()->with('error', 'An error occured, please try again!'); 
        }
    }
    public function loanApp(Request $request){
        // $validatedData = $request->validate([
        //     'full_name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'amount' => 'required',
        //     'repaymemt' => 'required',
        //     'employment_status' => 'required',
        //     'message' => 'required',
        //     'terms' => 'required',
        // ]);
            $userLoan = [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'amount' => $request->amount,
                'repayment' => $request->repayment,
                'employment_status' => $request->employment_status,
                'message' => $request->message,
                'terms' => $request->terms
            ];
       // }
        if($userLoan){
            Mail::to($request->email)->send(new UserLoanMail($userLoan));
            Mail::to('sargeapi@gmail.com')->send(new AdminUserLoanMail($userLoan));
            return back()->with('success', 'Your application has been submitted. You will be contacted shortly by one of our representatives.');
        }else{
            return back()->with('error', 'An error occured, please try again!'); 
        }
    }
}
