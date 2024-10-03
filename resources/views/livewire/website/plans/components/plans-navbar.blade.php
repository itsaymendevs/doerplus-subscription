<header class="header">
    <div class="header__builder">



        {{-- logo --}}
        <div class="logo-image">
            <a href="javascript:void(0);" class='logo--wrap'>
                <img src='{{ url("{$storagePath}/profile/{$profile->imageFile}") }}' alt="logo" />
            </a>
        </div>




        {{-- menuButton --}}
        <a href="#" class="menu-btn full"><span></span></a>





        {{-- ---------------------------------------- --}}
        {{-- ---------------------------------------- --}}
        {{-- ---------------------------------------- --}}






        {{-- menuOverlay --}}
        <div class="menu-full-overlay">



            {{-- container --}}
            <div class="menu-full-container position-relative">



                {{-- poweredBy - shortcut --}}
                <li class='menu--powered-by d-none'>
                    <a href="https://doer.ae" target='_blank' class='global--footer-provider'>
                        <img src="{{ url('assets/plugins/subscription/images/doer-dark.png') }}" alt="">
                        <img class='caption' src="{{ url('assets/plugins/subscription/images/powered-by-extra.png') }}"
                            alt="">
                    </a>
                </li>



                {{-- --------------------------------------- --}}
                {{-- --------------------------------------- --}}




                <div class="container ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-1 ">


                            {{-- fullMenu --}}
                            <div class="menu-full">
                                <ul class="menu-full">



                                    {{-- home --}}
                                    <li class="menu-item mb-2">
                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                            href="{{ $globalProfile->websiteURL }}">Home</a>
                                    </li>




                                    {{-- plans --}}
                                    <li class="menu-item mb-2">
                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                            href="{{ route('website.plans') }}">Plans</a>
                                    </li>



                                    {{-- blogs --}}
                                    <li class="menu-item d-none">
                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                            href="javascript:void(0);">Blogs</a>
                                    </li>






                                    {{-- contact --}}
                                    <li class="menu-item">
                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                            href="{{ route('website.plans') }}">Contact</a>
                                    </li>







                                    {{-- login --}}
                                    <li class="menu-item login--item">
                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                            href="{{ $globalProfile->applicationURL }}">Login</a>
                                    </li>





                                </ul>
                            </div>
                            {{-- endMenu --}}



                        </div>
                    </div>
                </div>
            </div>






            {{-- --------------------------- --}}
            {{-- --------------------------- --}}






            {{-- socials --}}
            <div class="menu-social-links">









                {{-- 1: instagram --}}
                @if ($socials->instagramURL)

                <a href="{{ $socials->instagramURL }}" target="blank" class="scrolla-element-anim-1"
                    title="Instagram">Instagram</a>

                @endif
                {{-- end if --}}



                {{-- 2: Facebook --}}
                @if ($socials->facebookURL)

                <a href="{{ $socials->facebookURL }}" target="blank" class="scrolla-element-anim-1"
                    title="Facebook">Facebook</a>

                @endif
                {{-- end if --}}





                {{-- 3: Twitter --}}
                @if ($socials->twitterURL)

                <a href="{{ $socials->twitterURL }}" target="blank" class="scrolla-element-anim-1"
                    title="X / Twitter">X</a>

                @endif
                {{-- end if --}}





                {{-- 4: tiktok --}}
                @if ($socials->tiktokURL)

                <a href="{{ $socials->tiktokURL }}" target="blank" class="scrolla-element-anim-1"
                    title="TikTok">TikTok</a>

                @endif
                {{-- end if --}}




                {{-- 5: snapChat --}}
                @if ($socials->snapchatURL)

                <a href="{{ $socials->snapchatURL }}" target="blank" class="scrolla-element-anim-1"
                    title="Snapchat">Snapchat</a>

                @endif
                {{-- end if --}}




                {{-- 6: LinkedIn --}}
                @if ($socials->instagramURL)

                <a href="{{ $socials->linkedInURL }}" target="blank" class="scrolla-element-anim-1"
                    title="Linkedin">Linkedin</a>

                @endif
                {{-- end if --}}




                {{-- 7: privacy --}}
                <a href="{{ route('website.privacy') }}" class="scrolla-element-anim-1">Privacy Policy</a>



            </div>
            {{-- endSocials --}}




        </div>
    </div>
</header>