{{-- wrapper --}}
<div class="wrapper">







    {{-- head --}}
    @section('head')



    {{-- title - description - keywords meta --}}
    <title>{{ $plan->name }} - Cart</title>

    <meta name="description" content="{{ $plan->name }} - {{ $plan->desc }}">

    <meta name="keywords"
        content="Healthy Meal Plans Provider in Dubai, Best Healthy Meal Plans Provider in Dubai, Healthy Meal Plans Provider">


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








    {{-- blobBG --}}
    <livewire:website.components.items.background-blob />







    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}








    {{-- section --}}
    <div class="section section-inner m-description plan--section section--bg mb-0 pb-5" id='customization--section'>
        <div class="container">
            <div class="row">





                {{-- leftCol --}}
                <div class="col-12 col-lg-8">




                    {{-- topRow --}}
                    <div class="row justify-content-center mb-5 u--slideUp" wire:ignore>
                        <div class="col-12 col-lg-5 text-center">


                            <livewire:website.plans.plans-customization.components.plans-customization-switch
                                id='{{ $plan->id }}' type='cart' key='type--switch' />

                        </div>
                    </div>
                    {{-- endRow --}}







                    {{-- -------------------------------------- --}}
                    {{-- -------------------------------------- --}}







                    {{-- planInformation --}}
                    <div class="row justify-content-center justify-content-sm-start" wire:ignore>


                        {{-- wrapper --}}
                        <div class="col-12 col-lg-5 mb-4">




                            {{-- swiper --}}
                            <div class="swiper plans--overview-swiper ">
                                <div class="swiper-wrapper">



                                    {{-- slide --}}
                                    @if ($plan->imageFile)

                                    <div class="swiper-slide">
                                        <img src='{{ url("{$storagePath}/menu/plans/{$plan->imageFile}") }}'
                                            class='customization--plan-image'>
                                    </div>

                                    @endif
                                    {{-- end if --}}





                                    {{-- slide --}}
                                    @if ($plan->secondImageFile)

                                    <div class="swiper-slide">
                                        <img src='{{ url("{$storagePath}/menu/plans/{$plan->secondImageFile}") }}'
                                            class='customization--plan-image'>
                                    </div>

                                    @endif
                                    {{-- end if --}}








                                </div>
                                {{-- endWrapper --}}




                                {{-- ------------------------- --}}
                                {{-- ------------------------- --}}




                                {{-- pagination --}}
                                <div class="swiper-pagination"></div>




                            </div>
                        </div>
                        {{-- endWrapper --}}








                        {{-- ---------------------- --}}
                        {{-- ---------------------- --}}






                        {{-- information --}}
                        <div class="col-12 col-sm-12 col-lg-6 mb-4 text-center">

                            {{-- name --}}
                            <div class="m-titles mb-4">
                                <div class="m-title plan--single-title plan--name  text-center">{{ $plan->name }}
                                </div>
                            </div>




                            {{-- description --}}
                            <span class="desc me-4" style='max-width: 100px !important;'>
                                <span
                                    class="category text-center splitting-text-anim-3 scroll-animate plan--custom-subtitle fw-500 fs-6"
                                    data-splitting="chars" data-animate="active">{{ $plan->desc }}</span>
                            </span>





                            {{-- --------------------------- --}}
                            {{-- --------------------------- --}}




                            {{-- macros --}}

                            @if ($settings?->showPlanMacros)

                            <div class="row mt-4 justify-content-center">



                                {{-- percentages --}}
                                <div class="col-4 col-sm-auto  scrolla-element-anim-1 scroll-animate motion--slow"
                                    data-animate="active" wire:ignore.self>
                                    <div class="d-flex flex-column plan--macros for--proteins">
                                        <span class='fw-bold percentage'>30%</span>
                                        <span class='fw-bold text-uppercase caption'>Protein</span>
                                    </div>
                                </div>





                                {{-- percentages --}}
                                <div class="col-4 col-sm-auto scrolla-element-anim-1 scroll-animate motion--slow"
                                    data-animate="active" wire:ignore.self>
                                    <div class="d-flex flex-column plan--macros for--carbs">
                                        <span class='fw-bold percentage'>50%</span>
                                        <span class='fw-bold text-uppercase caption'>Carb</span>
                                    </div>
                                </div>





                                {{-- percentages --}}
                                <div class="col-4 col-sm-auto  scrolla-element-anim-1 scroll-animate motion--slow"
                                    data-animate="active" wire:ignore.self>
                                    <div class="d-flex flex-column plan--macros for--fats">
                                        <span class='fw-bold percentage'>20%</span>
                                        <span class='fw-bold text-uppercase caption'>Fat</span>
                                    </div>
                                </div>




                            </div>

                            @endif
                            {{-- endRow --}}







                            {{-- --------------------------- --}}
                            {{-- --------------------------- --}}





                            {{-- viewButton --}}
                            <div class='d-flex justify-content-end mt-4 px-1 px-sm-0'>
                                <a href="{{ route('website.plans.details', [$plan->nameURL]) }}"
                                    class='btn--with-hr active'>
                                    <hr>
                                    <span class='ms-2'>See More</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    {{-- endRow --}}











                    {{-- -------------------------------------- --}}
                    {{-- -------------------------------------- --}}





                    {{-- picks --}}
                    <div class="row mt-5 justify-content-center justify-content-md-start">


                        {{-- mainTitle --}}
                        <div class="col-12 col-sm-12" wire:ignore>
                            <div class="m-titles mb-0">
                                <div class="m-title plan--single-title fs-4 mb-0 fw-semibold  pointer">
                                    <div
                                        class="d-flex align-items-center justify-content-center justify-content-sm-start title--with-hr">


                                        {{-- hr --}}
                                        <hr>

                                        {{-- collapseToggler --}}
                                        <div class="ps-2 splitting-text-anim-1 scroll-animate collapse--title motion--slow w-100"
                                            data-splitting="chars" data-animate="active" data-bs-toggle="collapse"
                                            data-bs-target="#collapse--picks" aria-expanded="false"
                                            aria-controls="collapse--picks" data-splitting="chars">
                                            <div class="d-flex justify-content-between">
                                                <span>Pick Your Meals</span>
                                                <i class="bi bi-chevron-compact-down collapse--icon"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- endMainTitle --}}





                        {{-- ---------------------------------- --}}
                        {{-- ---------------------------------- --}}





                        {{-- collapseContent --}}
                        <div class="col-12">
                            <div class="collapse show mt-4" id="collapse--picks" wire:ignore.self>





                                {{-- meals --}}
                                <div class="row justify-content-center justify-content-md-start mt-5">




                                    {{-- pick --}}
                                    @foreach ($meals ?? [] as $meal)

                                    <div class="col-4 mb-4 mb-lg-5">
                                        <div class="pick--card">


                                            {{-- 1: imageFile & name --}}
                                            <div class="d-block">
                                                <img src='{{ url("{$storagePath}/menu/meals/{$meal->imageFile}") }}'>
                                            </div>

                                            <h4 class='text-center'>{{ $meal->name }}</h4>






                                            {{-- -------------------------------- --}}
                                            {{-- -------------------------------- --}}






                                            {{-- 3: action --}}
                                            <div class="row mt-2">
                                                <div class="col-5 d-flex align-items-end justify-content-between">





                                                </div>
                                            </div>
                                            {{-- endRow --}}







                                            {{-- -------------------------------- --}}
                                            {{-- -------------------------------- --}}





                                            {{-- 2: sizes --}}
                                            <div class="row align-items-end">


                                                {{-- swich --}}
                                                <div class="col-5 pick--sizes-wrapper">


                                                    {{-- groupButtons --}}
                                                    <div class="btn-group mx-auto ranges--wrapper p-0"
                                                        data-animate="active" role="group">




                                                        {{-- loop - sizes --}}
                                                        @foreach ($meal?->sizes ?? [] as $key => $mealSize)

                                                        <button type="button" wire:loading.class='processing--button'
                                                            wire:target='changePlanBundleRange'
                                                            key='single-bundle-range-{{ $mealSize->id }}'
                                                            class="btn btn--regular sm fw-500 fs-14 ranges--btn @if ($key == 0) btn--collapse @endif">
                                                            {{ $mealSize?->size?->shortName }}
                                                        </button>

                                                        @endforeach
                                                        {{-- end loop --}}


                                                    </div>
                                                </div>
                                                {{-- endSwitch --}}


                                                {{-- -------------------------------- --}}
                                                {{-- -------------------------------- --}}




                                                {{-- macros --}}
                                                <div class="col-7">


                                                    {{-- 1: calories --}}
                                                    <div class="size--macros">
                                                        <span>{{ number_format($mealSize->afterCookCalories)
                                                            }}</span>
                                                        <small>Calorie</small>
                                                    </div>



                                                    {{-- 2: proteins --}}
                                                    <div class="size--macros">
                                                        <span>{{ number_format($mealSize->afterCookProteins)
                                                            }}</span>
                                                        <small>Protein</small>
                                                    </div>



                                                    {{-- 3: carbs --}}
                                                    <div class="size--macros">
                                                        <span>{{ number_format($mealSize->afterCookCarbs) }}</span>
                                                        <small>Carbs</small>
                                                    </div>




                                                    {{-- 4: fats --}}
                                                    <div class="size--macros">
                                                        <span>{{ number_format($mealSize->afterCookFats) }}</span>
                                                        <small>Fats</small>
                                                    </div>

                                                </div>


                                            </div>
                                            {{-- endRow --}}










                                            {{-- counter --}}
                                            <span class='fw-semibold pick--counter text-center'>
                                                <small>x</small>2
                                            </span>


                                        </div>
                                    </div>
                                    {{-- endCol --}}



                                    @endforeach
                                    {{-- end loop --}}

                                </div>
                                {{-- endRow --}}







                                {{-- -------------------------------- --}}
                                {{-- -------------------------------- --}}
                                {{-- -------------------------------- --}}
                                {{-- -------------------------------- --}}
                                {{-- -------------------------------- --}}
                                {{-- -------------------------------- --}}











                            </div>
                        </div>
                    </div>
                    {{-- endRow --}}








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
                <div class="col-12 col-lg-4 mt-5 mt-lg-0 preference--col">



                    {{-- wrapperToReverse --}}
                    <div class="d-flex flex-column-reverse flex-lg-column">








                        {{-- 1: otherPlans --}}


                        @if ($settings?->showPickPreference)



                        {{-- 1st --}}
                        <div class="d-flex flex-column mb-5">



                            {{-- collapseToggler --}}
                            <div class="section section-inner started-heading mb-4 mt-0" style="z-index: 1000"
                                wire:ignore>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="h-titles">


                                                {{-- title --}}
                                                <div class="m-title plan--single-title fs-5 mb-0 fw-semibold  pointer">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center justify-content-sm-start title--with-hr">


                                                        {{-- hr --}}
                                                        <hr>

                                                        {{-- collapseToggler --}}
                                                        <div class="ps-2 splitting-text-anim-1 scroll-animate collapse--title motion--slow w-100 plans--other-toggler no-events"
                                                            data-splitting="chars" data-animate="active"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse--other-plans"
                                                            aria-expanded="false" aria-controls="collapse--other-plans"
                                                            data-splitting="chars">
                                                            <div class="d-flex justify-content-between">
                                                                <span>Pick Your Preference</span>
                                                                <i
                                                                    class="bi bi-chevron-compact-down collapse--icon"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                {{-- endTitle --}}


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
                            <div class="collapse show" id="collapse--other-plans" wire:ignore>
                                <div class="section section-inner m-works mb-5">
                                    <div class="container">
                                        <div
                                            class="works-items row classic column-3-offset portfolio-infinite-scrolling justify-content-center">




                                            {{-- loop - plans --}}
                                            @foreach ($plans ?? [] as $key => $singlePlan)


                                            <div class="works-col mx-auto plans--other-col col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 sorting-photography "
                                                key='single-other-plan-{{ $key }}'>
                                                <div class="works-item other--item @if (($key + 1) % 2 == 0) active @endif scrolla-element-anim-1 scroll-animate"
                                                    data-animate="active">
                                                    <a
                                                        href="{{ route('website.plans.customization', [$singlePlan->nameURL]) }}">

                                                        {{-- imageFile --}}
                                                        <span class="image">
                                                            <span class="img">
                                                                <img
                                                                    src='{{ url("{$storagePath}/menu/plans/{$singlePlan->imageFile}") }}' />
                                                            </span>
                                                        </span>




                                                        {{-- information --}}
                                                        <span class="desc">
                                                            <span
                                                                class="category splitting-text-anim-4 scroll-animate fs-14 fw-semibold  text-uppercase"
                                                                data-splitting="chars" data-animate="active">{{
                                                                $singlePlan->name
                                                                }}</span>
                                                        </span>


                                                    </a>
                                                </div>
                                            </div>

                                            @endforeach
                                            {{-- end loop --}}




                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endWrapper --}}



                        </div>
                        {{-- endWrapper --}}



                        @endif
                        {{-- end if --}}




                        {{-- ------------------------------------ --}}
                        {{-- ------------------------------------ --}}
                        {{-- ------------------------------------ --}}
                        {{-- ------------------------------------ --}}















                        {{-- 1: summary --}}






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





    {{-- 1: datepicker --}}
    <script src="{{ url('assets/plugins/subscription/js/air-datepicker.js') }}"></script>





    {{-- hrLinks --}}
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('.btn--with-hr').removeClass('active');
            }, 1000);
        });

    </script>











    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}







    {{-- selectHandle --}}
    <script>
        $(document).on('change', "#customization--section .form--select", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);


      }); //end function
    </script>










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










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










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}








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








    {{-- ----------------------------------------------- --}}
    {{-- ----------------------------------------------- --}}









    {{-- 1.2: handleDatePicker --}}
    <script>
        $(document).on('initDatePicker', function() {



        initStartDate = @json(strtotime($instance->initStartDate ?? date('Y-m-d', strtotime('+48 hours'))));

        startDate = new Date(initStartDate * 1000);
        startDate.setDate(startDate.getDate());








        var localeEn = {
            days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            today: 'Today',
            clear: 'Clear',
            dateFormat: 'dd/MM/yyyy',
            timeFormat: 'hh:mm aa',
            firstDay: 0
        };






        // 3.5: Initialize
        setTimeout(() => {
            $('body #date--picker').each(function() {
                datepicker = new AirDatepicker(this, {
                    locale: localeEn,
                    minDate: startDate,
                    position: 'bottom center',
                    onSelect: ({date, formattedDate, datepicker}) => {
                        @this.set('instance.startDate', formattedDate);
                    } // end function
                });
            });
        }, 500);





    }); // end function


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




    {{-- information --}}
    <livewire:website.plans.plans-customization.components.plans-customization-information
        name='{{ $plan->nameURL }}' />





    {{-- bagDetails --}}
    <livewire:website.plans.plans-customization.components.plans-customization-bag-details />






    @endsection
    {{-- endSection --}}











    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}








</div>
{{-- endWrapper --}}
