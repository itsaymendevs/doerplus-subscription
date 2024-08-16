<div id='privacy--modal' class="izi--modal" data-width='1400px' wire:ignore.self>
    <div class="container pb-4">




        {{-- header --}}
        <div class="row  align-items-center mb-4 pb-2">
            <div class="col-10">
                <h5 class='my-0 fw-bold fs-4 izi--title'>Privacy Policy</h5>
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






        {{-- 1: who we are --}}
        <div class="section section-inner m-description section--spacing" style="margin-top: 50px !important;">
            <div class="container">


                {{-- mainRow --}}
                <div class="row">



                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3">
                        <div class="m-titles mb-4">
                            <div class="m-title scrolla-element-anim-1 scroll-animate plan--single-title"
                                data-animate="active">Who We Are</div>
                        </div>
                    </div>



                    {{-- content --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        <div class="description-text scrolla-element-anim-1 scroll-animate" data-animate="active">
                            <p>Website is owned and managed by HealthyBite, a dedicated meal planners who simplify your
                                life
                                by crafting personalized based in United Arab Emirates is our country of
                                domicile</p>
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












        {{-- 2: general --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Genearl Points</div>
                        </div>
                    </div>






                    {{-- reasons --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">


                            {{-- loop - general --}}
                            @foreach ($generalPolicies ?? [] as $generalPolicy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $generalPolicy }}
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











        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 3: infoWeHave --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">What Sort of Personal Information We Hold</div>
                        </div>
                    </div>






                    {{-- reasons --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">


                            {{-- : reset --}}
                            @php $globalSNCounter = 1; @endphp






                            {{-- loop - general --}}
                            @foreach ($informationPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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
















        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 4: legalPolicy --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Our Legal Basis for Processing Your Personal Information</div>
                        </div>
                    </div>






                    {{-- reasons --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">


                            {{-- : reset --}}
                            @php $globalSNCounter = 1; @endphp






                            {{-- loop - general --}}
                            @foreach ($legalPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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
















        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 5: personalPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">How Do We Use Your Personal Information</div>
                        </div>
                    </div>








                    {{-- wrapper --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">


                        {{-- breif --}}
                        <div class="description-text scrolla-element-anim-1 scroll-animate mb-5 d-none"
                            data-animate="active">
                            <p>There are a number of ways in which we use your personal information, depending on how
                                you
                                interact with us. If you do not provide your information to us, then we will be unable
                                to
                                interact with you in that way, we may use your information in the following ways:
                            </p>
                        </div>





                        {{-- list --}}
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - personalPolicies --}}
                            @foreach ($personalPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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













        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 6: cookiesPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Cookies and Similar Technologies</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - cookiesPolicies --}}
                            @foreach ($cookiesPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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















        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 7: sharingPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Who Might We Share Your Personal Information With</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - sharingPolicies --}}
                            @foreach ($sharingPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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












        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 8: productPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Keeping You Informed About Our Products and Services</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - productPolicies --}}
                            @foreach ($productPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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









        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 9: productPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Keeping You Informed About Our Products and Services</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - productPolicies --}}
                            @foreach ($productPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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












        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 10: rightsPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Your Rights</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - rightsPolicies --}}
                            @foreach ($rightsPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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











        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 11: refundPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Refunds</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - refundPolicies --}}
                            @foreach ($refundPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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














        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 12: profilePolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Automated Decision Making and Profiling</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - profilePolicies --}}
                            @foreach ($profilePolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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
















        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 13: keepingPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">How Long Will We Keep Your Personal Information For</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - keepingPolicies --}}
                            @foreach ($keepingPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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














        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 14: securityPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Security</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - securityPolicies --}}
                            @foreach ($securityPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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


















        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 15: deliveryPolicies --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Delivery</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">



                            @php $globalSNCounter = 1; @endphp



                            {{-- loop - deliveryPolicies --}}
                            @foreach ($deliveryPolicies ?? [] as $policy)

                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">
                                        <span class="number me-2">{{ $globalSNCounter++ }}.</span>{{ $policy }}
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















        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------- --}}












        {{-- 17: changes --}}
        <div class="section section-inner m-description section--spacing">
            <div class="container">
                <div class="row">


                    {{-- title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-3 ">
                        <div class="m-titles">
                            <div class="m-title scrolla-element-anim-1 scroll-animate mb-4 plan--single-title"
                                data-animate="active">Policy Change</div>
                        </div>
                    </div>








                    {{-- list --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                        <div class="description-list-items plan--list">


                            <div class="description-list-item scrolla-element-anim-1 scroll-animate policy--point"
                                data-animate="active">
                                <div class="desc">

                                    <div class="name">This privacy policy was most recently updated in
                                        Augest 2024. If we make changes to it, then we will take appropriate steps to
                                        bring
                                        those changes to your attention.
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- end reasons --}}

                </div>
            </div>
        </div>







    </div>
</div>
{{-- endModal --}}