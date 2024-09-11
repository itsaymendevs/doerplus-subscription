{{-- wrapper --}}
<div class="wrapper">







    {{-- head --}}
    @section('head')



    {{-- title - description - keywords meta --}}
    <title>Privacy Policy</title>

    <meta name="description" content="Our Privacy Policy">

    <meta name="keywords"
        content="Healthy Meal Plans Provider in Dubai, Best Healthy Meal Plans Provider in Dubai, Healthy Meal Plans Provider">


    @endsection
    {{-- endHead --}}









    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}









    {{-- colors --}}
    <livewire:website.components.colors.colors-plans />







    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}









    {{-- 1: hero --}}
    <div class="section hero-started  bottom mb-5 plan--hero-section" style="max-height: 400px !important">




        <div class="canvas started-items__image" data-top="top: 0px;" data-top-bottom="top: -100px;"></div>




        {{-- content --}}
        <div class="container flex-column justify-content-end align-items-start">
            <div class="titles">
                <div class="title splitting-text-anim-1 scroll-animate  pb-4 plan--single-title" data-splitting="chars"
                    data-animate="active">{{ $header[0] }}</div>
            </div>

        </div>
    </div>
    {{-- endSection --}}









    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}








    {{-- 1: Introduction --}}
    <div class="section section-inner m-description section--spacing">
        <div class="container">


            {{-- mainRow --}}
            <div class="row">



                {{-- title --}}
                <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3">
                    <div class="m-titles mb-4">
                        <div class="m-title scrolla-element-anim-1 scroll-animate plan--single-title"
                            data-animate="active">Introduction</div>
                    </div>
                </div>



                {{-- content --}}
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="description-text scrolla-element-anim-1 scroll-animate" data-animate="active">
                        <p>{{ $header[1] }}</p>
                    </div>
                </div>


            </div>
            {{-- endRow --}}


        </div>
    </div>
    {{-- endSection --}}












    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}













    {{-- 2: titles --}}
    @foreach ($titles ?? [] as $key => $title)

    <div class="section section-inner m-description section--spacing">
        <div class="container">
            <div class="row">


                {{-- title --}}
                <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                    <div class="m-titles">
                        <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                            data-animate="active">{{ $title }}</div>
                    </div>
                </div>






                {{-- reasons --}}
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                    <div class="description-list-items plan--list">


                        {{-- 2.5: loop - content --}}
                        @foreach ($content[$key] ?? [] as $innerKey => $contentText)

                        <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                            data-animate="active">
                            <div class="desc">

                                <div class="name">
                                    <span class="number me-2">{{ $innerKey + 1 }}.</span>{{ $contentText }}
                                </div>

                            </div>
                        </div>

                        @endforeach
                        {{-- end loop --}}

                    </div>
                </div>
                {{-- end reasons --}}

            </div>
        </div>
    </div>

    @endforeach
    {{-- end loop --}}


















    {{-- ------------------------------------------------- --}}
    {{-- ------------------------------------------------- --}}



    @section('scripts')


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






    {{-- ------------------------------------------------- --}}
    {{-- ------------------------------------------------- --}}








</div>
{{-- endWrapper --}}