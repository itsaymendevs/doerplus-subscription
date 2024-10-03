<div class="container-fluid global--footer">
    <div class="row w-100 align-items-center">



        {{-- 1: copyrights--}}
        <div class="col-4 d-none">
            <p class='global--footer-copyrights'>
                <i class='bi bi-c-circle'></i>{{ date('Y') }}. All rights reserved
            </p>
        </div>




        {{-- 2: powered by --}}
        <div class="col-4">
            <a href="https://doer.ae" target='_blank' class='global--footer-provider'>
                <img src="{{ url('assets/plugins/subscription/images/doer-dark.png') }}" alt="">
                <img class='caption' src="{{ url('assets/plugins/subscription/images/powered-by-regular-1.png') }}"
                    alt="">
            </a>
        </div>







        {{-- 3: privacy / terms --}}
        <div class="col-8">
            <div class='global--footer-links'>
                <a href="{{ route('website.privacy') }}">Privacy Policy</a>
                <a href="{{ route('website.privacy') }}">Terms & Conditions</a>
            </div>
        </div>



    </div>
</div>
{{-- endWrapper --}}