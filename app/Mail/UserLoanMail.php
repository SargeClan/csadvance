<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserLoanMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userLoan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userLoan)
    {
        // 
        $this->userLoan = $userLoan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Unrelenting Partner in Financial Progress.')->view('mail.user_loan');
    }
}
