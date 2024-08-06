<!doctype html>
<html lang="en-US">


    {{-- head --}}
    <head>


        {{-- meta --}}
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1, user-scalable=no">




        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        {!! $fontLinks !!}




        {{-- fonts - fallback --}}
        @if (empty($fontLinks))

        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css2?family=Courgette&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        @endif
        {{-- end if --}}









        {{-- styles --}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/variables.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/select2.css') }}">
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/scrollbar.css') }}">
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/vendors/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/vendors/splitting.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/vendors/swiper.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/vendors/animate.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/main.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/air-datepicker.css') }}">
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/globals.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/theme.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/single-plan.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/select-custom.css')}}" />
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/invoice.css')}}" />



        {{-- animation --}}





        {{-- extra --}}
        <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/extras.css')}}" />




        {{-- iziModal --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/css/iziModal.css"
            integrity="sha512-uZ+G0SzK4GMUDUzxzbIeLGLjYgAhQ2KrIV4bWIP5o6URt5XVcn8S02eW6C1DH35bqq/XX1jYwlhhNPPIE1+q1A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />







        {{-- scripts --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>





        {{-- head --}}
        @yield('head')





        {{-- styles --}}
        @yield('styles')




    </head>
    {{-- endHead --}}











    {{-- ------------------------------------------------ --}}
    {{-- ------------------------------------------------ --}}










    {{-- body --}}
    <body style="background-color: #111;min-height: 100vh;color: white;">


        {{-- section --}}
        <section style="display: block;width: 90%;margin: auto;max-width: 575px;margin-bottom: 40px;">




            {{-- heading --}}
            <div style="display: block;">
                <h1
                    style=" font-weight: 700;padding-top: 10px; padding-bottom:10px; margin: 0px 10px 0px;text-align: center;font-size: 16px;">
                    We’re thrilled to have you on board and can’t wait for you to enjoy our delicious meals.</h1>
            </div>






            {{-- ------------------------------------------------ --}}
            {{-- ------------------------------------------------ --}}





            {{-- core --}}
            <div id="invoice--core" style="background-color: #191919;border-radius: 6px;">



                {{-- 1: top --}}
                <div id="section--top" style="padding: 25px 30px 25px;">



                    {{-- imageFile --}}
                    <div
                        style="display: flex;align-items: center;justify-content: space-between;justify-content: center;">
                        <img src='{{ url("{$storagePath}/profile/{$profile->imageFileDark}") }}'
                            style="width: 120px;max-width: 120px; height: 80px">
                    </div>



                    {{-- wrapper --}}
                    <div style="display: flex;align-items: center;justify-content: space-around;">



                        {{-- date --}}
                        <p style="text-align: center;margin-bottom: 0px;">
                            <span
                                style="display: block;color: #96d0c4;font-weight: 400;font-size: 14px;margin-bottom: 3px;">Date</span>
                            <span style="font-weight: 600;font-size: 14px;">{{ date('M d, Y') }}</span>
                        </p>





                        {{-- invoiceNumber --}}
                        <p style="text-align: center;margin-bottom: 0px;">
                            <span
                                style="display: block;color: #96d0c4;font-weight: 400;font-size: 14px;margin-bottom: 3px;">Invoice
                                #</span>
                            <span style="font-weight: 600;font-size: 14px;">INV-{{
                                substr($subscription->paymentReference, 0, 7) }}</span>
                        </p>

                    </div>
                </div>
                {{-- endTop --}}









                {{-- ------------------------------------------------ --}}
                {{-- ------------------------------------------------ --}}
                {{-- ------------------------------------------------ --}}
                {{-- ------------------------------------------------ --}}






                {{-- 2: mid --}}
                <div id="section--mid" style="background-color: #202020;padding-top: 25px;padding-bottom: 25px;">


                    {{-- billTo --}}
                    <div style="margin-bottom: 30px;">
                        <h5
                            style="font-size: 17px; text-align:center; text-transform: uppercase;color: #96d0c4;font-weight: 600;margin-bottom: 16px; margin-top: 0px;">
                            BILL TO</h5>



                        {{-- name --}}
                        <p
                            style="text-align: center;color: #efefef !important;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $customer?->fullName() }}</p>



                        {{-- phone --}}
                        <p
                            style="text-align: center;color: #efefef !important;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $customer->phoneKey }} {{ $customer->phone }}</p>



                        {{-- email --}}
                        <p
                            style="text-align: center;color: #efefef !important;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $customer->fullEmail() }}</p>
                    </div>







                    {{-- -------------------------------- --}}
                    {{-- -------------------------------- --}}






                    {{-- location --}}
                    <div style="padding-top: 20px;margin-bottom: 30px;border-top: 1px dashed #464646;">
                        <h5
                            style="font-size: 17px; text-align:center; text-transform: uppercase;color: #96d0c4;font-weight: 600;margin-bottom: 16px; margin-top: 0px;">
                            Location</h5>



                        {{-- address --}}
                        <p
                            style="text-align: center;color: #efefef;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $customer?->latestAddress()?->locationAddress }}</p>



                        {{-- city --}}
                        <p
                            style="text-align: center;color: #efefef;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $customer?->latestAddress()?->city?->name }}, {{
                            $customer?->latestAddress()?->district?->name }}</p>



                        {{-- floor - apartment --}}
                        <p
                            style="text-align: center;color: #efefef;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            Apartment. {{ $customer?->latestAddress()?->apartment }} - Floor. {{
                            $customer?->latestAddress()?->floor }}</p>
                    </div>





                    {{-- -------------------------------- --}}
                    {{-- -------------------------------- --}}






                    {{-- profile --}}
                    <div style="padding-top: 20px;border-top: 1px dashed #464646;">
                        <h5
                            style="font-size: 17px; text-align:center; text-transform: uppercase;color: #96d0c4;font-weight: 600;margin-bottom: 16px; margin-top: 0px;">
                            {{
                            $profile?->name }}</h5>


                        {{-- phone --}}
                        <p
                            style="text-align: center;color: #efefef !important;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $profile?->phone }}</p>


                        {{-- email --}}
                        <p
                            style="text-align: center;color: #efefef !important;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $profile?->email }}</p>


                        {{-- address --}}
                        <p
                            style="text-align: center;color: #efefef !important;font-size: 15px;font-weight: 500;margin-bottom: 8px;">
                            {{ $profile?->locationAddress }}</p>
                    </div>
                </div>








                {{-- ----------------------------------------------- --}}
                {{-- ----------------------------------------------- --}}
                {{-- ----------------------------------------------- --}}
                {{-- ----------------------------------------------- --}}








                {{-- 3: bottom --}}
                <div id="section--bottom" style="padding: 25px 30px;">
                    <div style="display: flex;align-items: center;">


                        {{-- headers --}}
                        <div
                            style="width: 60%;border-top: 1px solid #303030;border-bottom: 1px solid #303030;border-right: 1px solid #303030;">
                            <h6
                                style="text-transform: uppercase;margin: 0px;border-bottom: 1px solid #303030;padding: 10px 0px !important;margin-bottom: 15px;font-size: 14px;text-align: center;">
                                Description</h6>




                            {{-- 1: plan --}}
                            <p
                                style="font-size: 14px;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 500;border-bottom: 1px solid #212121;padding-bottom: 13px;">
                                {{ $subscription->plan->name }}</p>




                            {{-- 2: coolBag --}}
                            <p
                                style="font-size: 14px;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 500;border-bottom: 1px solid #212121;padding-bottom: 13px;">
                                {{ $subscription->bag->name }}</p>



                            {{-- 3: promo --}}
                            <p
                                style="font-size: 14px;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 500;padding-bottom: 13px;border-bottom: 1px solid #212121;">
                                Promo</p>
                            {{-- end if --}}





                            {{-- total (Hidden) --}}
                            <p
                                style="font-size: 21px;visibility: hidden;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 500;">
                                Total</p>
                        </div>




                        {{-- -------------------------------- --}}
                        {{-- -------------------------------- --}}





                        {{-- prices --}}
                        <div style="width: 40%;border-top: 1px solid #303030;border-bottom: 1px solid #303030;">
                            <h6
                                style="text-transform: uppercase;margin: 0px;border-bottom: 1px solid #303030;padding: 10px 0px !important;margin-bottom: 15px;font-size: 14px;text-align: center;">
                                Price<span style="font-size: 10px;margin-left: 5px;color: #ffc20c;">AED</span></h6>




                            {{-- 1: plan --}}
                            <p
                                style="font-size: 14px;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 500;border-bottom: 1px solid #212121;padding-bottom: 13px;">
                                {{ number_format($subscription?->planPrice, 1) }}</p>



                            {{-- 2: coolBag --}}
                            <p
                                style="font-size: 14px;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 500;border-bottom: 1px solid #212121;padding-bottom: 13px;">
                                {{ number_format($subscription?->bagPrice, 1) }}</p>



                            {{-- 3: promo --}}
                            <p
                                style="font-size: 14px;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 500;border-bottom: 1px solid #212121;padding-bottom: 13px;">
                                {{ number_format($subscription?->promoCodeDiscountPrice ?? 0, 1) }}</p>



                            {{-- 4: total --}}
                            <p
                                style="font-size: 21px;text-align: center;margin-bottom: 15px;color: whitesmoke;font-weight: 700;">
                                {{ number_format($subscription?->totalCheckoutPrice, 1) }}</p>
                        </div>
                    </div>
                </div>







            </div>
        </section>
        {{-- endSection --}}



    </body>
</html>
{{-- endHTML --}}