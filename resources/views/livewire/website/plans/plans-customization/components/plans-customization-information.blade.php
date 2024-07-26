<div id='infromation--modal' class="izi--modal" wire:ignore.self>
    <div class="container">




        {{-- header --}}
        <div class="row mb-5">
            <div class="col-11">
                <h4 class='my-0'>Personal Information</h4>
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



            {{-- firstName --}}
            <div class="col-12 col-sm-6">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm '>
                        <span>First Name</span>
                    </label>

                    <input type="text" class='form--input text-center'>
                </div>
            </div>






            {{-- lastName --}}
            <div class="col-12 col-sm-6">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Last Name</span>
                    </label>

                    <input type="text" class='form--input text-center'>
                </div>
            </div>










            {{-- -------------------------- --}}
            {{-- -------------------------- --}}







            {{-- phone --}}
            <div class="col-12 col-md-6">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Phone</span>
                    </label>





                    {{-- inputWithSelect --}}
                    <div class="form--input-with-select">


                        {{-- select --}}
                        <div class="form--select-wrapper side--left text-center" style="width: 30% !important"
                            wire:ignore>
                            <select class='form--select init--select' data-instance='instance'>

                                @foreach ($countryCodes as $countryCode)
                                <option value="{{ $countryCode }}">
                                    {{ $countryCode }}
                                </option>
                                @endforeach

                            </select>
                        </div>



                        {{-- input --}}
                        <input type="text" pattern="[0-9]+" class='form--input side--right text-center'
                            style="width: 70% !important">



                    </div>
                    {{-- endInputWithWrapper --}}


                </div>
            </div>
            {{-- endCol --}}















            {{-- whatsapp --}}
            <div class="col-12 col-md-6">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Whatsapp</span>
                    </label>





                    {{-- inputWithSelect --}}
                    <div class="form--input-with-select">


                        {{-- select --}}
                        <div class="form--select-wrapper side--left text-center" style="width: 30% !important"
                            wire:ignore>
                            <select class='form--select init--select' data-instance='instance'>

                                @foreach ($countryCodes as $countryCode)
                                <option value="{{ $countryCode }}">
                                    {{ $countryCode }}
                                </option>
                                @endforeach

                            </select>
                        </div>



                        {{-- input --}}
                        <input type="text" pattern="[0-9]+" class='form--input side--right text-center'
                            style="width: 70% !important">



                    </div>
                    {{-- endInputWithWrapper --}}


                </div>
            </div>
            {{-- endCol --}}









            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}






            {{-- email --}}
            <div class="col-12 col-md-12">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Email Address</span>
                    </label>



                    {{-- inputWithSelect --}}
                    <div class="form--input-with-select">

                        {{-- input --}}
                        <input type="email" class='form--input side--left text-center' style="width: 50% !important">


                        {{-- select --}}
                        <div class="form--select-wrapper side--right text-center" style="width: 50% !important"
                            wire:ignore>
                            <select class='init--select form--select' data-instance='instance.emailProvider'>

                                @foreach ($providers as $provier)
                                <option value="{{ $provier }}">
                                    {{ $provier }}
                                </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    {{-- endWithSelect --}}

                </div>
            </div>
            {{-- endCol --}}










            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}




            {{-- submitButton --}}
            <div class="col-12">
                <div class="d-flex form--input-wrapper justify-content-center mb-4 mt-1">

                    <livewire:website.components.items.button-blob title='Continue'
                        url="{{ route('website.plans.checkout', [$plan->nameURL]) }}" />

                </div>
            </div>








        </div>
        {{-- endContent --}}



    </div>
</div>
{{-- endModal --}}