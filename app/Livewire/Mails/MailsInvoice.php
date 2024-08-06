<?php

namespace App\Livewire\Mails;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.blank')]
class MailsInvoice extends Component
{




    public function render()
    {

        return view('livewire.mails.mails-invoice');

    } // end function






} // end class
