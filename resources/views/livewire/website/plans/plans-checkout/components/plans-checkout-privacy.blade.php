<div id='privacy--modal' class="izi--modal" data-width='1400px' wire:ignore.self>
    <div class="container pb-4">




        {{-- header --}}
        <div class="row  align-items-center mb-4 pb-2">
            <div class="col-10">
                <h5 class='my-0 fw-bold fs-4 izi--title'>{{ $header[0] }}</h5>
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






        {{-- 1: introduction --}}
        <div class="section section-inner m-description section--spacing" style="margin-top: 50px !important;">
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
        {{-- endSection --}}






    </div>
</div>
{{-- endModal --}}