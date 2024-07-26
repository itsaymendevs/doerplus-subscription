<div id='address--modal' class="izi--modal" data-width='800px' wire:ignore.self>
    <div class="container">




        {{-- header --}}
        <div class="row mb-5">
            <div class="col-11">
                <h5 class='my-0 '>Address Details</h5>
            </div>

            {{-- close --}}
            <div class="col-1">
                <a data-izimodal-close="" data-izimodal-transitionout="bounceOutDown" class='modal--close'>
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
        {{-- endHeader --}}






        {{-- -------------------------------------------------------- --}}
        {{-- -------------------------------------------------------- --}}
        {{-- -------------------------------------------------------- --}}
        {{-- -------------------------------------------------------- --}}








        {{-- content --}}
        <div class="row mb-5 justify-content-center justify-content-md-start">





            {{-- city --}}
            <div class="col-12 col-md-7">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>City</span>
                    </label>


                    {{-- select --}}
                    <div class="form--select-wrapper" wire:ignore>
                        <select class='init--select form--select' data-instance='instance.allergies'>

                            <option value=""></option>

                            @foreach ($cities ?? [] as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
            {{-- endCol --}}









            {{-- district --}}
            <div class="col-12 col-md-5">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>District</span>
                    </label>


                    {{-- select --}}
                    <div class="form--select-wrapper" wire:ignore>
                        <select class='init--select form--select' data-instance='instance.allergies'>
                        </select>
                    </div>
                </div>
            </div>
            {{-- endCol --}}









            {{-- ---------------------------------------------- --}}
            {{-- ---------------------------------------------- --}}











            {{-- address --}}
            <div class="col-12 col-md-7">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm '>
                        <span>Rough Location</span>
                    </label>

                    <input type="text" class='form--input'>
                </div>
            </div>












            {{-- deliveryTime --}}
            <div class="col-12 col-md-5">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Delivery Time</span>
                    </label>


                    {{-- select --}}
                    <div class="form--select-wrapper" wire:ignore>
                        <select class='init--select form--select' data-instance='instance.allergies'>
                        </select>
                    </div>
                </div>
            </div>
            {{-- endCol --}}








            {{-- ---------------------------------------------- --}}
            {{-- ---------------------------------------------- --}}






            {{-- Apartment --}}
            <div class="col-12 col-md-7">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Apartment <span class='span--price'>/</span> Villa</span>
                    </label>

                    <input type="text" class='form--input'>
                </div>
            </div>





            {{-- Floor --}}
            <div class="col-12 col-md-5">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Floor Number</span>
                    </label>

                    <input type="text" class='form--input'>
                </div>
            </div>









            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}







            {{-- submitButton --}}
            <div class="col-12">
                <div class="d-flex form--input-wrapper justify-content-center mb-4 mt-1">

                    <livewire:website.components.items.button-blob title='Confirm' url="#" />

                </div>
            </div>








        </div>
        {{-- endContent --}}



    </div>
</div>
{{-- endModal --}}