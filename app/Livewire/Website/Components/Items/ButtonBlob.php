<?php

namespace App\Livewire\Website\Components\Items;

use Livewire\Component;

class ButtonBlob extends Component
{


    // :: variables
    public $title;


    public function mount($title)
    {


        // 1: params
        $this->title = $title;


    } // end function





    // --------------------------------------------------------------------------







    public function render()
    {

        return view('livewire.website.components.items.button-blob');

    } // end function






} // end class
