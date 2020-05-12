<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminLoanMail extends Mailable
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
        return $this->subject('New Loan Application!')->view('mail.admin_user_Loan');
    }
}
