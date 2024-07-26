<?php

namespace App\Livewire\Website\Components\Items;

use Livewire\Component;

class ButtonBlob extends Component
{


    // :: variables
    public $title, $modal, $url, $event;


    public function mount($title, $url = '#', $modal = null, $event = null)
    {


        // 1: params
        $this->url = $url;
        $this->title = $title;
        $this->modal = $modal;
        $this->event = $event;


    } // end function








    // --------------------------------------------------------------------------







    public function render()
    {

        return view('livewire.website.components.items.button-blob');

    } // end function






} // end class
