<?php

namespace App\Livewire\Portals\Customer;

use App\Models\Profile;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.portals.customer-login')]
class CustomerLogin extends Component
{



    public function render()
    {

        return view('livewire.portals.customer.customer-login');

    } // end function





} // end class
