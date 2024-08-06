<?php

namespace App\Traits;

use App\Mail\InvoiceMail;
use App\Models\MailConfiguration;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;


trait MailTrait
{



    protected function setMailConfiguration()
    {


        // 1: getConfiguration
        $configuration = MailConfiguration::first();




        // 1.2: mailers
        Config::set('mail.mailers.smtp.host', $configuration->host);
        Config::set('mail.mailers.smtp.port', $configuration->port);
        Config::set('mail.mailers.smtp.username', $configuration->username);
        Config::set('mail.mailers.smtp.password', $configuration->password);
        Config::set('mail.mailers.smtp.encryption', $configuration->encryption);

        Config::set('mail.from.name', $configuration->senderName);
        Config::set('mail.from.address', $configuration->senderEmail);



    } // end function












    // ---------------------------------------------------------------------
    // ---------------------------------------------------------------------
    // ---------------------------------------------------------------------
    // ---------------------------------------------------------------------







    public function sendInvoiceMail($id, $email)
    {


        // 1: setConfiguration
        // $this->setMailConfiguration();




        // 1.2: prepMail
        Mail::to($email)->send(new InvoiceMail($id));




    } // end function






} // end trait

