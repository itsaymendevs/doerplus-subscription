{{-- wrapper --}}
<div class="wrapper">






    {{-- head --}}
    @section('head')



    {{-- title - description - keywords meta --}}
    <title>{{ $plan->name }} - Payment</title>

    <meta name="description" content="Checkout - {{ $plan->name }}">

    <meta name="keywords"
        content="Healthy Meal Plans Provider in Dubai, Best Healthy Meal Plans Provider in Dubai, Healthy Meal Plans Provider">



    {{-- stripe --}}
    <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/stripe.css')}}" />
    <script src="https://js.stripe.com/v3/"></script>







    {{-- beMoreHealthy --}}
    @if (env('APP_CLIENT') == 'BeMoreHealthy')

    <link rel="stylesheet" href="{{url('assets/plugins/subscription/css/customization/bemorehealthy.css')}}" />

    @endif
    {{-- end if --}}




    @endsection
    {{-- endHead --}}










    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}







    {{-- colors --}}
    <livewire:website.components.colors.colors-plans-customization />







    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}





    {{-- forColorOnly --}}
    <div class='d-none plan--{{ $plan->id }}'></div>





    {{-- blobBG --}}
    <livewire:website.components.items.background-blob />









    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}











    {{-- section --}}
    <div class="section section-inner m-description plan--section plan--{{ $plan->id }}">
        <div class="container">
            <div class="row">





                {{-- leftCol --}}
                <div class="col-12 col-lg-7">



                    {{-- personal Information --}}
                    <div class="row justify-content-center justify-content-md-start">


                        {{-- mainTitle --}}
                        <div class="col-12 col-sm-12">
                            <div class="m-titles mb-0">
                                <div class="m-title plan--single-title fs-4 mb-0 fw-semibold ">
                                    <div
                                        class="d-flex align-items-center justify-content-center justify-content-sm-start title--with-hr">


                                        {{-- collapseToggler --}}
                                        <div class="splitting-text-anim-1 scroll-animate motion--slow collapse--title w-100"
                                            data-splitting="chars" data-animate="active">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Payment Details</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- endMainTitle --}}






                        {{-- ---------------------------------- --}}
                        {{-- ---------------------------------- --}}
                        {{-- ---------------------------------- --}}






                        {{-- stripeElements --}}
                        <form id="payment-form" class="col-12 col-sm-12 mt-5 stripe--form">
                            <div class="address--overview payment--overview p-0">


                                {{-- paymentElements --}}
                                <div id="payment-element"></div>

                                {{-- alertMessage --}}
                                <div id="payment-message" class="hidden"></div>




                                {{-- submitButton --}}
                                <div class="d-block">
                                    <div class="d-flex justify-content-center mb-0 mt-3
                                @if (!$settings?->showButtonMotion) no--button-motion @endif"
                                        wire:loading.class='processing--button-wrap' wire:target='continue'>


                                        <livewire:website.components.items.button-blob title="{{__('PAY') }} {{
                                            number_format($instance?->totalCheckoutPrice) }}" type="submitPayment"
                                            currency='AED' />

                                    </div>
                                </div>
                                {{-- endButton --}}



                            </div>
                        </form>
                    </div>
                    {{-- endRow --}}











                    {{-- ------------------------------------------ --}}
                    {{-- ------------------------------------------ --}}
                    {{-- ------------------------------------------ --}}
                    {{-- ------------------------------------------ --}}
                    {{-- ------------------------------------------ --}}















                </div>
                {{-- end leftCol --}}






                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}











                {{-- rightCol --}}
                <div class="col-12 col-lg-4 offset-lg-1 mt-5 mt-lg-0 preference--col">



                    {{-- wrapperToReverse --}}
                    <div class="d-flex flex-column-reverse flex-lg-column">



                        {{-- 1: bundleInformation --}}



                        @if ($pickedPlanBundle)



                        {{-- 1st --}}
                        <div class="d-flex flex-column mb-5">




                            {{-- collapseToggler --}}
                            <div class="section section-inner started-heading mt-0 mb-4" style="z-index: 1000;"
                                wire:ignore>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="h-titles">
                                                <div class="m-title plan--single-title fs-5 mb-0 fw-semibold  pointer">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center justify-content-sm-start title--with-hr">



                                                        {{-- collapseToggler --}}
                                                        <div class="splitting-text-anim-1 scroll-animate collapse--title motion--slow w-100"
                                                            data-splitting="chars" data-animate="active"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse--bundle-information"
                                                            aria-expanded="false"
                                                            aria-controls="collapse--bundle-information"
                                                            data-splitting="chars">
                                                            <div class="d-flex justify-content-between">
                                                                <span>Your Plan Details</span>
                                                                <i
                                                                    class="bi bi-chevron-compact-down collapse--icon"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- endRow --}}

                                </div>
                            </div>
                            {{-- endSection --}}










                            {{-- ------------------------------------ --}}
                            {{-- ------------------------------------ --}}











                            {{-- collapseContent --}}
                            <div class="collapse show invoice--sidebar" id="collapse--bundle-information">
                                <div class="section section-inner m-works mb-0">
                                    <div class="container">



                                        {{-- topRow --}}
                                        <div class="row zoom--wrapper align-items-end">


                                            {{-- imageFile --}}
                                            @if ($settings?->showSummaryBundlePicture)

                                            <div
                                                class="col-12 mb-3 mb-md-0 mb-lg-3 mb-xl-0 col-md-6 col-lg-12 col-xl-6">
                                                <div class="d-flex overflow-hidden">
                                                    <img src='{{ url("{$storagePath}/menu/plans/bundles/{$pickedPlanBundle?->imageFile}") }}'
                                                        class='of-contain bg-white zoom--target motion--slow rounded-1 w-100'
                                                        style="height: 150px;">
                                                </div>
                                            </div>


                                            @endif
                                            {{-- end if --}}









                                            {{-- information --}}
                                            <div
                                                class="col-12 @if ($settings?->showSummaryBundlePicture) col-md-6 col-lg-12 col-xl-6 @endif">



                                                {{-- name --}}
                                                <div class="m-titles mb-1 text-center">
                                                    <div class="m-title plan--single-title plan--single-overview-title fw-semibold fs-6 mb-0"
                                                        @if(env('APP_CLIENT') !="BeMoreHealthy" )
                                                        style="color: var(--summaryBundleColor) !important;" @endif>
                                                        {{ $pickedPlanBundle->name }}
                                                    </div>
                                                </div>




                                                {{-- bundleDescription --}}
                                                <span class="desc d-block text-center">
                                                    <span
                                                        class="category text-center splitting-text-anim-1 scroll-animate plan--custom-subtitle fw-500 fs-15"
                                                        data-splitting="chars" data-animate="active">{{
                                                        $pickedPlanBundle->remarks
                                                        }}</span>
                                                </span>





                                                {{-- ----------------------- --}}
                                                {{-- ----------------------- --}}




                                                {{-- range --}}
                                                @if ($pickedPlanBundleRange)

                                                <div class="m-titles mb-1 mt-1">
                                                    <div
                                                        class="m-title plan--single-title fw-semibold fs-15 mb-0 text-center">
                                                        {{
                                                        $pickedPlanBundleRange->range->name }}<span
                                                            class='span--price ms-1'>(Calories)</span>
                                                    </div>
                                                </div>

                                                @endif
                                                {{-- end if --}}







                                            </div>
                                        </div>
                                        {{-- endRow --}}







                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}






                                        {{-- invoiceRow --}}
                                        <div class="row align-items-end mt-5">
                                            <div class="col-12">


                                                {{-- 1: Plan Days --}}
                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14">Duration</h6>
                                                    <h6 class='my-0 fw-500 fs-16'>{{ $instance?->planDays ?? 0
                                                        }}<span class='span--price ms-1'>(days)</span></h6>

                                                </div>





                                                {{-- 2: Start Date --}}
                                                <div
                                                    class="d-flex invoice--tr different justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14">Start Date</h6>
                                                    <h6 class='my-0 fw-500 fs-13' style="letter-spacing: 1.5px">
                                                        {{ $instance?->startDate }}</h6>
                                                </div>







                                                {{-- -------------------------------------- --}}
                                                {{-- -------------------------------------- --}}
                                                {{-- -------------------------------------- --}}
                                                {{-- -------------------------------------- --}}





                                                {{-- 1: PlanPrice --}}
                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14">Plan Price</h6>
                                                    <h6 class='my-0 fw-500 fs-16'>
                                                        {{ number_format($instance?->totalPlanBundleRangePrice -
                                                        ($instance?->planBundleRangeAdjustmentPrice ?? 0)) }}
                                                    </h6>

                                                </div>





                                                {{-- 3: bagPrice --}}
                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14 d-flex align-items-end">Cool Bag<span
                                                            class='ms-1 span--price fs-9'
                                                            style="color: var(--textColor)">(Refundable)</span></h6>
                                                    <h6 class='my-0 fw-500 fs-16'>
                                                        {{ number_format($instance->bagPrice) }}
                                                    </h6>

                                                </div>






                                                {{-- 4: discount --}}
                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14">Discount</h6>
                                                    <h6 class='my-0 fw-500 fs-16'>
                                                        {{ number_format($instance?->planBundleRangeDiscountPrice) }}
                                                    </h6>
                                                </div>







                                                {{-- 5: promo --}}
                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14">Promo</h6>
                                                    <h6 class='my-0 fw-500 fs-16'>{{
                                                        number_format($instance?->promoCodeDiscountPrice) }}</h6>
                                                </div>






                                                {{-- 6: Referral --}}
                                                @if ($settings?->showReferral)


                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14">Referral</h6>
                                                    <h6 class='my-0 fw-500 fs-16'>{{
                                                        number_format($instance?->referralDiscountPrice) }}</h6>
                                                </div>



                                                @endif
                                                {{-- end if --}}









                                                {{-- 7: deliveryPrice --}}
                                                @if (!is_null($instance?->deliveryPrice))

                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">
                                                    <h6 class="fw-500 my-0 fs-14">Delivery</h6>
                                                    <h6 class='my-0 fw-500 fs-16'>

                                                        {{-- 1: free --}}
                                                        @if ($instance->deliveryPrice == 0)
                                                        {{ "FREE" }}
                                                        @else
                                                        {{ number_format($instance?->deliveryPrice) }}
                                                        @endif
                                                        {{-- end if --}}

                                                    </h6>
                                                </div>

                                                @endif
                                                {{-- end if --}}






                                                {{-- 8: totalPrice --}}
                                                <div
                                                    class="d-flex invoice--tr justify-content-between align-items-center">

                                                    <h6 class="fw-500 my-0 fs-14">Total Payout</h6>

                                                    @if ($instance->totalCheckoutPrice)

                                                    <h6 class='my-0 fw-semibold fs-6'>
                                                        {{ number_format($instance?->totalCheckoutPrice ?? 0) }}<span
                                                            class='span--price ms-1'>(AED)</span>
                                                    </h6>

                                                    @endif
                                                    {{-- end if --}}

                                                </div>




                                            </div>
                                        </div>
                                        {{-- endRow --}}









                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}





                                    </div>
                                </div>
                            </div>
                            {{-- endWrapper --}}





                        </div>
                        {{-- endWrapper --}}



                        @endif
                        {{-- end if - pickedPlanBundle --}}






                    </div>
                    {{-- endWrapperToReverse --}}



                </div>
                {{-- endRightCol --}}










                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}








            </div>
        </div>
    </div>
    {{-- endSection --}}















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    {{-- scripts --}}
    @section('scripts')










    <script type="text/javascript">
        const stripe = Stripe(@json($paymentMethod->envKey));
        const fontFamily = @json($globalProfile->textFont ?? 'Poppins');

        var clientSecret = @json($clientSecret);
        let elements;
        initialize();


        document.querySelector("#payment-form").addEventListener("submit", handleSubmit);

        // Fetches a payment intent and captures the client secret
        async function initialize() {

            const appearance = {
                theme: 'stripe',

                variables: {
                    colorPrimary: '#fff',
                    colorBackground: '#ffffff',
                    colorText: '#111',
                    colorDanger: '#df1b41',
                    spacingUnit: '6px',
                    borderRadius: '1px',
                }
            };


            elements = stripe.elements({ clientSecret, appearance });

            const paymentElementOptions = {
                layout: "tabs",
            };

            const paymentElement = elements.create("payment", paymentElementOptions);
            paymentElement.mount("#payment-element");

        } // end function






        // ------------------------------------------------------------
        // ------------------------------------------------------------
        // ------------------------------------------------------------
        // ------------------------------------------------------------
        // ------------------------------------------------------------
        // ------------------------------------------------------------








        async function handleSubmit(e) {
            e.preventDefault();
            $('#submit--button').addClass('no-events-loading');

            const { error } = await stripe.confirmPayment({
                elements,
                confirmParams: {
                return_url: @json(route('website.plans.invoice')),
                },
            });





            // ------------------------------------------------------------
            // ------------------------------------------------------------



            if (error.type === "card_error" || error.type === "validation_error") {

                showMessage(error.message);
                $('#submit--button').removeClass('no-events-loading');

            } else {

                showMessage("An unexpected error occurred.");
                $('#submit--button').removeClass('no-events-loading');

            } // end if

        } // end function





        // ------------------------------------------
        // ------------------------------------------
        // ------------------------------------------






        function showMessage(messageText) {
            const messageContainer = document.querySelector("#payment-message");

            messageContainer.classList.remove("hidden");
            messageContainer.textContent = messageText;

            setTimeout(function () {
                messageContainer.classList.add("hidden");
                messageContainer.textContent = "";
            }, 4000);
        } // end function





        // Show a spinner on payment submission
        function setLoading(isLoading) {

            if (isLoading) {
                document.querySelector("#submit").disabled = true;
                document.querySelector("#spinner").classList.remove("hidden");
                document.querySelector("#button-text").classList.add("hidden");
            } else {
                document.querySelector("#submit").disabled = false;
                document.querySelector("#spinner").classList.add("hidden");
                document.querySelector("#button-text").classList.remove("hidden");
            } // end if

        } // end function






        // checker
        function setDpmCheckerLink(url) {

            document.querySelector("#dpm-integration-checker").href = url;

        } // end function




    </script>
    {{-- endScript --}}









    {{-- -------------------------------------------------------------- --}}
    {{-- -------------------------------------------------------------- --}}
    {{-- -------------------------------------------------------------- --}}
    {{-- -------------------------------------------------------------- --}}
    {{-- -------------------------------------------------------------- --}}







    {{-- toggler --}}
    <script>
        if (window.matchMedia("(max-width: 992px)").matches) {


            $('.plans--other-toggler').removeClass('no-events');


        } else {
            $(document).ready(function() {
                setTimeout(() => {
                    $('.plans--other-toggler').trigger('click');
                    $('.plans--other-toggler').removeClass('no-events');
                }, 1800);
            });
        }
    </script>





    {{-- hideLogo --}}
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    $('.logo--wrap').fadeOut();
                } else {
                    $('.logo--wrap').fadeIn();
                }
            });
        });
    </script>








    @endsection
    {{-- endSection --}}









    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    {{-- modals --}}
    @section('modals')







    @endsection
    {{-- endSection --}}











    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









</div>
{{-- endWrapper --}}