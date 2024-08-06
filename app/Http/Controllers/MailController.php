<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Traits\MailTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    use MailTrait;



    public function invoice($id)
    {


        // 1: setConfiguration
        // $this->setMailConfiguration();




        // 1.2: prepMail
        Mail::to('aymoon.23@outlook.com')->send(new InvoiceMail($id));


        return "Email has been sent.";


    } // end function



} // end class
