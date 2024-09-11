<div class="wrapper">



    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Our Plans</title>

    <meta name="description"
        content="Effortlessly plan your meals with our intuitive meal planner software. Create customized meal plans, track your nutrition, and discover delicious recipes to suit your dietary preferences. Simplify your meal planning today!">




    @endsection
    {{-- endHead --}}










    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}







    {{-- colors --}}
    <livewire:website.components.colors.colors-plans />







    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}














    {{-- swiper --}}
    <div class="section full-slider full--slider"
        data-dispimgpath="{{ url('assets/plugins/subscription/images/clouds.jpg') }}">
        <div class="swiper-container">
            <div class="swiper-wrapper">



                {{-- loop - plans --}}
                @foreach ($plans ?? [] as $plan)

                <div class="swiper-slide plan--slide @if ($settings->planCardAlignment == 'center') justify-content-center text-center @endif"
                    key='single-plan-{{ $plan->id }}'>






                    {{-- imageFile --}}
                    <div class="slide">
                        <img src='{{ url("{$storagePath}/menu/plans/{$plan->fifthImageFile}") }}'
                            class="full-slide-item__image" alt="" />
                    </div>



                    {{-- content --}}
                    <div class="slide-titles bottom">
                        <div class="titles">


                            {{-- caption --}}
                            @if ($plan?->desc)

                            <div class="label splitting-text-anim-1 plan--slide-caption fs-6 mb-3
                            @if ($settings->planCardAlignment == 'center') left-0 right-0 mx-auto @endif"
                                style="max-width: 80%" data-splitting>{{ $plan?->desc }}</div>

                            @endif
                            {{-- end if --}}






                            {{-- title --}}
                            <div class="title">
                                <a @if ($renewEmail) href='javascript:void(0);'
                                    wire:click="prepExistingCustomer('{{ $plan->id }}')" @else
                                    href="{{ route('website.plans.customization', [$plan->nameURL]) }}" @endif>
                                    <span class="title-inner splitting-text-anim-2 plan--slide-title" data-splitting>{{
                                        $plan->name }}</span>
                                </a>
                            </div>
                        </div>
                    </div>



                    {{-- viewButton --}}
                    <div class="view-btn @if ($settings->planCardAlignment == 'center') left-0 right-0 mx-auto @endif">
                        <a @if ($renewEmail) href='javascript:void(0);'
                            wire:click="prepExistingCustomer('{{ $plan->id }}')" @else
                            href="{{ route('website.plans.customization', [$plan->nameURL]) }}" @endif data-splitting
                            class="fw-500 splitting-text-anim-1 plan--slide-button fw-semibold">View
                            Plan</a>
                    </div>
                </div>

                @endforeach
                {{-- end loop --}}




            </div>
            {{-- endWrapper --}}








            {{-- --------------------------------------- --}}
            {{-- --------------------------------------- --}}
            {{-- --------------------------------------- --}}






            {{-- pagination --}}
            <div class="swiper-pagination scrolla-element-anim-1 scroll-animate" data-animate="active"></div>



            {{-- navigations --}}
            <div class="swiper-buttons">
                <div class="swiper-button-prev scene-nav scene-nav--prev scrolla-element-anim-1 scroll-animate"
                    data-animate="active"></div>
                <div class="swiper-button-next scene-nav scene-nav--next scrolla-element-anim-1 scroll-animate"
                    data-animate="active"></div>
            </div>



        </div>
        {{-- endWrapper --}}





        {{-- -------------------------------- --}}
        {{-- -------------------------------- --}}






        {{-- fullSlider --}}
        <div class="canvas full-slider-items__image"></div>

    </div>
    {{-- endSwiper --}}



</div>
{{-- endWrapper --}}