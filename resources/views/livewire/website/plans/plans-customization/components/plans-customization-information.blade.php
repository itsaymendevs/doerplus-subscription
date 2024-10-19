<div id='information--modal' class="izi--modal" data-width='800px' wire:ignore>
    <div class="container">




        {{-- header --}}
        <div class="row mb-4 pb-2 align-items-center">
            <div class="col-10">
                <h5 class='my-0 fw-bold fs-4 izi--title'>Personal Information</h5>
            </div>

            {{-- close --}}
            <div class="col-2">
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





        {{-- switch --}}
        <div class="row">
            <div class="col-12 text-center">
                <div class="btn-group mx-auto mb-4" role="group" aria-label="Customer's Type">


                    {{-- NewCustomer --}}
                    <button class="btn btn--regular sm border--bottom btn--collapse  fw-500 fs-14 " type='button'
                        data-type='0'>New Customer</button>




                    {{-- existingCustomer --}}
                    <button class="btn btn--regular sm border--bottom btn--collapse collapsed fw-500 fs-14"
                        data-type='1' type='button'>Existing Customer</button>

                </div>
            </div>
        </div>












        {{-- ------------------------------------------------- --}}
        {{-- ------------------------------------------------- --}}
        {{-- ------------------------------------------------- --}}
        {{-- ------------------------------------------------- --}}
        {{-- ------------------------------------------------- --}}





        {{-- content --}}

        {{-- A: newCustomer --}}
        <form id='form--new-customer' wire:submit='continue'
            class="row mb-5 align-items-end justify-content-center justify-content-md-start"
            wire:loading.class='no-events-loading'>




            {{-- --------------------------- --}}
            {{-- --------------------------- --}}





            {{-- email --}}
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Email Address</span>
                    </label>

                    <input type="email" class='form--input' wire:model='instance.fullEmail' required>
                </div>
            </div>
            {{-- endCol --}}







            {{-- --------------------------- --}}
            {{-- --------------------------- --}}









            {{-- gender --}}
            <div class="col-12 col-lg-6 order-1 order-lg-2 ">
                <div class="d-flex mb-4 pb-1 flex-wrap plan--days-wrapper justify-content-center">



                    {{-- loop - genders --}}
                    @foreach (['Male', 'Female'] ?? [] as $key => $gender)




                    {{-- radioButton --}}
                    <input type="radio" id="gender--radio-{{ $key }}" class='gender--radio d-none'
                        wire:model.live='instance.gender' value='{{ $gender }}'>




                    <label class='pointer plan--days gender--option motion--slow' key='information-gender-{{ $key }}'
                        wire:loading.class='processing--button' wire:target='instance.planDays'
                        for='gender--radio-{{ $key }}'>{{ $gender }}
                    </label>







                    @endforeach
                    {{-- end loop --}}


                </div>
            </div>
            {{-- endCol --}}









            {{-- --------------------------- --}}
            {{-- --------------------------- --}}







            {{-- firstName --}}
            <div class="col-6 col-sm-6 order-3">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm '>
                        <span>First Name</span>
                    </label>

                    <input type="text" class='form--input' wire:model='instance.firstName' required>
                </div>
            </div>






            {{-- lastName --}}
            <div class="col-6 col-sm-6 order-4">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Last Name</span>
                    </label>

                    <input type="text" class='form--input' wire:model='instance.lastName' required>
                </div>
            </div>










            {{-- -------------------------- --}}
            {{-- -------------------------- --}}







            {{-- phone --}}
            <div class="col-12 col-md-6 order-5">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Phone</span>
                    </label>





                    {{-- inputWithSelect --}}
                    <div class="form--input-with-select">


                        {{-- select --}}
                        <div class="form--select-wrapper side--left text-center no-events"
                            style="width: 30% !important">
                            <select class='form--select init--select' data-instance='instance.phoneKey' value='+971'
                                required>

                                @foreach ($countryCodes as $countryCode)
                                <option value="{{ $countryCode->code }}">{{ $countryCode->code }}</option>
                                @endforeach

                            </select>
                        </div>



                        {{-- input --}}
                        <input type="text" pattern="[0-9]+" class='form--input side--right text-center'
                            style="width: 70% !important" wire:model='instance.phone' minlength="9" maxlength="9"
                            required>



                    </div>
                    {{-- endInputWithWrapper --}}


                </div>
            </div>
            {{-- endCol --}}















            {{-- whatsapp --}}
            <div class="col-12 col-md-6 order-5">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Whatsapp</span>
                    </label>





                    {{-- inputWithSelect --}}
                    <div class="form--input-with-select">


                        {{-- select --}}
                        <div class="form--select-wrapper side--left text-center" style="width: 30% !important">
                            <select class='form--select init--select' data-instance='instance.whatsappKey' value='+971'
                                required>

                                @foreach ($countryCodes as $countryCode)
                                <option value="{{ $countryCode->code }}">{{ $countryCode->code }}</option>
                                @endforeach

                            </select>
                        </div>



                        {{-- input --}}
                        <input type="text" pattern="[0-9]+" class='form--input side--right text-center'
                            style="width: 70% !important" wire:model='instance.whatsapp' minlength="4" maxlength="10"
                            required>



                    </div>
                    {{-- endInputWithWrapper --}}


                </div>
            </div>
            {{-- endCol --}}











            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}








            {{-- submitButton --}}
            <div class="col-12 order-5">
                <div class="d-flex form--input-wrapper justify-content-center mb-4 mt-1
                @if (!$settings?->showButtonMotion) no--button-motion @endif"
                    wire:loading.class='processing--button-wrap' wire:target='continue'>

                    <livewire:website.components.items.button-blob title='Continue' type="submit" />

                </div>
            </div>




        </form>






        {{-- ------------------------------------------------- --}}
        {{-- ------------------------------------------------- --}}




        {{-- B: existingCustomer --}}
        <form id='form--existing-customer' wire:submit='continueExisting'
            class="row mb-5 align-items-end justify-content-center justify-content-md-start d-none"
            wire:loading.class='no-events-loading'>




            {{-- --------------------------- --}}
            {{-- --------------------------- --}}





            {{-- email --}}
            <div class="col-12 col-lg-6">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Email Address</span>
                    </label>

                    <input type="email" class='form--input' wire:model='instance.existingFullEmail' required>
                </div>
            </div>
            {{-- endCol --}}






            {{-- email --}}
            <div class="col-12 col-lg-6">
                <div class="d-flex form--input-wrapper flex-column mb-4">

                    <label class='w-100 d-flex align-items-center sm'>
                        <span>Password</span>
                    </label>

                    <input type="password" class='form--input' wire:model='instance.existingPassword' required>
                </div>
            </div>
            {{-- endCol --}}







            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}






            {{-- submitButton --}}
            <div class="col-12">
                <div class="d-flex form--input-wrapper justify-content-center mb-4 mt-1
                @if (!$settings?->showButtonMotion) no--button-motion @endif"
                    wire:loading.class='processing--button-wrap' wire:target='continueExisting'>

                    <livewire:website.components.items.button-blob title='Continue' type="submit" />

                </div>
            </div>



        </form>
    </div>
    {{-- endWrapper --}}















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}








    {{-- selectHandle --}}
    <script>
        $(document).on('change', "#information--modal .form--select", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');

         @this.set(instance, selectValue);


      }); //end function







    //   -----------------------------------------------
    //   -----------------------------------------------




      $(document).on('click', "#information--modal .btn--collapse", function(event) {



        // 2.1: getValue
        isManualExistingCustomer = $(this).attr('data-type');

        if (isManualExistingCustomer == 1) {

            $('#form--new-customer').addClass('d-none');
            $('#form--existing-customer').removeClass('d-none');

        } else {

            $('#form--new-customer').removeClass('d-none');
            $('#form--existing-customer').addClass('d-none');

        } // end if




        // 2.2: toggleActive
        $("#information--modal .btn--collapse").addClass('collapsed');
        $(this).removeClass('collapsed');



    }); //end function





    </script>










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}






</div>
{{-- endModal --}}