<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;

class sendResume extends Mailable
{
    use Queueable, SerializesModels;
    public $pdf;
    public $profileUser;
    public $Company;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf)
    {
       
        $this->pdf = $pdf;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(Auth::user()->email,'jobSeeker')->view('mails.mailResume')
        ->attachData($this->pdf->output(),"resume.pdf");
    }
}
