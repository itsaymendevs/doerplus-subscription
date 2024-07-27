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



                    {{-- personal Information --}}
                    <div class="row justify-content-center justify-content-md-start">


                        {{-- mainTitle --}}
                        <div class="col-10 col-sm-12" wire:ignore>
                            <div class="m-titles mb-0">
                                <div class="m-title plan--single-title fs-4 mb-0 fw-semibold ">
                                    <div
                                        class="d-flex align-items-center justify-content-center justify-content-sm-start title--with-hr">


                                        {{-- hr --}}
                                        <hr>

                                        {{-- collapseToggler --}}
                                        <div class="ps-2 splitting-text-anim-1 scroll-animate motion--slow collapse--title w-100"
                                            data-splitting="chars" data-animate="active">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Delivery Information</span>
                                                <a href="#" class='pointer animation--plus'
                                                    data-izimodal-open="#address--modal"
                                                    data-izimodal-transitionin="fadeInDown">
                                                    <i class="bi bi-plus fs-1 color--theme"></i>
                                                </a>
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
                        <div class="col-10 col-sm-12">
                            <div class="collapse show mt-4 pt-3" id="collapse--location" wire:ignore.self>






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




    {{-- information --}}
    <livewire:website.plans.plans-checkout.components.plans-checkout-address />



    @endsection
    {{-- endSection --}}











    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









</div>
{{-- endWrapper --}}