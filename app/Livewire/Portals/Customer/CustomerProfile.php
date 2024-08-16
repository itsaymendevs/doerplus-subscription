<?php

namespace App\Livewire\Portals\Customer;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.portals.customer')]
class CustomerProfile extends Component
{
    public function render()
    {
        return view('livewire.portals.customer.customer-profile');
    }
}
