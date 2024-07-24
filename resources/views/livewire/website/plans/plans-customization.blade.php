{{-- wrapper --}}
<div class="wrapper">







    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}









    {{-- progress --}}
    @section('progress')

    {{--
    <livewire:website.plans.plans-customization.components.plans-customization-progress key='progress-bar-1'
        value='{{ 45 }}' /> --}}
    @endsection









    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}








    {{-- section --}}
    <div class="section section-inner m-description plan--section">
        <div class="container">
            <div class="row">





                {{-- leftCol --}}
                <div class="col-12 col-lg-8">



                    {{-- topRow --}}
                    <div class="row justify-content-center mb-5">
                        <div class="col-12 col-lg-5 text-center">



                            {{-- switch --}}
                            <div class="btn-group mx-auto" role="group" aria-label="Basic example">


                                {{-- regular --}}
                                <button type="button"
                                    class="btn btn--regular sm border--bottom btn--collapse fw-500 fs-14"
                                    data-bs-toggle="collapse" data-bs-target="#collapse--regular-plan"
                                    aria-expanded="false" aria-controls="collapse--regular-plan">Regular</button>


                                {{-- cart --}}
                                <button type="button"
                                    class="btn btn--regular sm border--bottom btn--collapse collapsed fw-500 fs-14"
                                    data-bs-toggle="collapse" data-bs-target="#collapse--cart-plan"
                                    aria-expanded="false" aria-controls="collapse--cart-plan">Cart To Go</button>
                            </div>

                        </div>
                    </div>
                    {{-- endRow --}}







                    {{-- -------------------------------------- --}}
                    {{-- -------------------------------------- --}}







                    {{-- planInformation --}}
                    <div class="row justify-content-center justify-content-sm-start">


                        {{-- wrapper --}}
                        <div class="col-12 col-lg-5 mb-4">




                            {{-- swiper --}}
                            <div class="swiper plans--overview-swiper">
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






                                    {{-- slide --}}
                                    @if ($plan->thirdImageFile)

                                    <div class="swiper-slide">
                                        <img src='{{ url("{$storagePath}/menu/plans/{$plan->thirdImageFile}") }}'
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
                        <div class="col-10 col-sm-12 col-lg-6 mb-4 ">

                            {{-- name --}}
                            <div class="m-titles mb-4">
                                <div class="m-title plan--single-title">{{ $plan->name }}
                                </div>
                            </div>




                            {{-- description --}}
                            <span class="desc me-4" style='max-width: 100px !important;'>
                                <span
                                    class="category splitting-text-anim-1 scroll-animate plan--custom-subtitle fw-500 fs-6"
                                    data-splitting="chars" data-animate="active">{{ $plan->desc }}</span>
                            </span>




                            {{-- viewButton --}}
                            <div class='d-flex justify-content-end mt-3'>
                                <a href='javascript:void(0);' class='btn--with-hr'>
                                    <hr>
                                    <span class='ms-2 '>See More</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    {{-- endRow --}}











                    {{-- -------------------------------------- --}}
                    {{-- -------------------------------------- --}}





                    {{-- bundles --}}
                    <div class="row mt-5 justify-content-center justify-content-md-start">




                        {{-- title --}}
                        <div class="col-12">
                            <div class="m-titles mb-0">
                                <div class="m-title plan--single-title fs-4 mb-3 fw-semibold ">
                                    <div
                                        class="d-flex align-items-center justify-content-center justify-content-sm-start title--with-hr">
                                        <hr>
                                        <div class='ms-2 splitting-text-anim-1 scroll-animate' data-splitting="chars"
                                            data-animate="active">
                                            Customize Your Meal Plan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                        {{-- ---------------------------------- --}}
                        {{-- ---------------------------------- --}}






                        {{-- bundles --}}
                        @foreach ($plan?->bundles ?? [] as $bundle)

                        <div class="col-10 col-sm-6 col-lg-4 mb-4 scrolla-element-anim-1 scroll-animate"
                            key='single-bundle-{{ $bundle->id }}' data-animate="active">
                            <a href='javascript:void(0);' class="bundle--card zoom--wrapper">



                                {{-- select --}}
                                <span class='bundle--select motion--slow animation--floating'>Pick</span>





                                {{-- imageFile --}}
                                <div class="motion--slow overflow-hidden">
                                    <img src='{{ url("{$storagePath}/menu/plans/bundles/{$bundle->imageFile}") }}'
                                        class='of-cover zoom--target'>
                                </div>




                                {{-- title --}}
                                <div class="bundle--title-wrap scrolla-element-anim-1 scroll-animate"
                                    data-animate="active">
                                    <h5 class='bundle--title '>{{
                                        $bundle->name }}</h5>
                                </div>



                            </a>
                        </div>


                        @endforeach
                        {{-- end loop --}}


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











                {{-- rightCol --}}
                <div class="col-12 col-lg-4 mt-5 mt-lg-0">






                    {{-- section --}}
                    <div class="section section-inner started-heading mb-5 mt-0" style="z-index: 1000">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="h-titles">

                                        {{-- title --}}
                                        <div class="h-title  fs-5 fw-bold pointer collapse--title motion--slow plans--other-toggler no-events"
                                            data-bs-toggle="collapse" data-bs-target="#collapse--other-plans"
                                            aria-expanded="false" aria-controls="collapse--other-plans"
                                            data-splitting="chars">
                                            <div class="d-flex justify-content-between">
                                                <span>Pick Your Preferences</span>
                                                <i class="bi bi-chevron-compact-down collapse--icon"></i>
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




                    <div class="collapse show mt-4" id="collapse--other-plans">
                        <div class="section section-inner m-works">
                            <div class="container">
                                <div
                                    class="works-items row classic column-3-offset portfolio-infinite-scrolling justify-content-center">




                                    {{-- loop - plans --}}
                                    @foreach ($plans ?? [] as $key => $singlePlan)


                                    <div class="works-col mx-auto plans--other-col col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 sorting-photography "
                                        key='single-other-plan-{{ $key }}'>
                                        <div class="works-item other--item
                                        @if (($key + 1) % 2 == 0) active @endif scrolla-element-anim-1 scroll-animate"
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
                                                        class="category splitting-text-anim-4 scroll-animate fs-14 fw-semibold text-white text-uppercase"
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



    <script>
        if (window.matchMedia("(max-width: 992px)").matches)
        {






        // 2: desktop
        } else {


            $(document).ready(function() {
                setTimeout(() => {
                    $('.plans--other-toggler').trigger('click');
                    $('.plans--other-toggler').removeClass('no-events');
                }, 2500);
            });


        } // end if



    </script>


    @endsection
    {{-- endSection --}}








</div>
{{-- endWrapper --}}