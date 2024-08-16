<div class="wrapper">



    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Customer Portal</title>

    <meta name="description" content="Meal Plan">




    @endsection
    {{-- endHead --}}










    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}







    {{-- colors --}}
    {{--
    <livewire:portals.components.colors.colors-login /> --}}










    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}








    {{-- blobBG --}}
    <livewire:website.components.items.background-blob />







    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}










    {{-- mainRow --}}
    <div class="section section-inner m-description my-0">
        <div class="container">
            <div class="login--wrapper">

                {{-- logo --}}
                <div class="d-flex justify-content-center align-content-center">
                    <img class="of-contain mb-4 mx-auto"
                        src='{{ url("{$storagePath}/profile/{$globalProfile->imageFile}") }}'
                        style="height: 80px; width: 200px;" />
                </div>





                {{-- credientials --}}
                <div class="d-block">


                    {{-- 1: email --}}
                    <div class="login--input form--input-wrapper mb-4">

                        <div class="d-flex align-items-center">
                            <i class="bi bi-envelope-fill"></i>
                            <input type="text" class='form--input' autocomplete="off" placeholder="Email Address">
                        </div>
                    </div>




                    {{-- 1: password --}}
                    <div class="login--input form--input-wrapper">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-lock-fill"></i>
                            <input type="text" class='form--input' autocomplete="off" placeholder="Password">
                        </div>
                    </div>



                    {{-- keep me logged in --}}
                    <div class="form-check d-flex align-items-center login--remember">
                        <input class="form-check-input" type="checkbox" value="" id="remember--checkbox">
                        <label class="form-check-label pb-0" for="remember--checkbox">Keep me logged-in</label>
                    </div>








                    {{-- ---------------------------------------------- --}}
                    {{-- ---------------------------------------------- --}}






                    {{-- submit --}}
                    <div class="d-flex justify-content-center mt-5">
                        <livewire:website.components.items.button-blob title='LOGIN' type="submit" />
                    </div>




                    {{-- forgot --}}
                    <div class="flex">
                        <p class='login--forgot'>Forgot <span class='fw-semibold'>Email / Password?</span></p>
                    </div>



                </div>
                {{-- endCredientials --}}




            </div>
        </div>
    </div>
    {{-- endSection --}}





</div>
{{-- endWrapper --}}