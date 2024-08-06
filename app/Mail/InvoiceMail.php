<?php

namespace App\Mail;

use App\Models\CustomerSubscription;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Profile;
use App\Models\Social;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;




    // :: variables
    public $subscription, $customer, $socials, $profile, $settings;




    public function __construct($id)
    {



        // 1: handleParams
        $this->subscription = CustomerSubscription::find($id);
        $this->customer = $this->subscription->customer;





        // 2: dependencies
        $this->socials = Social::first();
        $this->profile = Profile::first();
        $this->settings = CustomerSubscriptionSetting::first();








    } // end function







    // ------------------------------------------------------------






    public function envelope() : Envelope
    {
        return new Envelope(
            subject: 'Plan Invoice',
        );

    } // end function









    // ------------------------------------------------------------







    public function content() : Content
    {
        return new Content(
            view: 'livewire.mails.mails-invoice',
        );
    }









    // ------------------------------------------------------------






    public function attachments() : array
    {

        return [];

    } // end function





} // end class
