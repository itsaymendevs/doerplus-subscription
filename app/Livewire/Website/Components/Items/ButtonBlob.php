<?php

namespace App\Livewire\Website\Components\Items;

use Livewire\Component;

class ButtonBlob extends Component
{


    // :: variables
    public $title, $modal, $url, $type, $currency;


    public function mount($title, $url = '#', $modal = null, $type = 'button', $currency = 'AED')
    {


        // 1: params
        $this->url = $url;
        $this->type = $type;
        $this->title = $title;
        $this->modal = $modal;
        $this->currency = $currency;


    } // end function









    // --------------------------------------------------------------------------







    public function render()
    {

        return view('livewire.website.components.items.button-blob');

    } // end function






} // end class
