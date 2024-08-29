{{-- switch --}}
@if ($settings->hasPlanCustomization && $settings->hasPlanCart)

<div class="btn-group mx-auto mb-5" role="group" aria-label="Basic example">


    {{-- regular --}}
    <button
        class="btn btn--regular sm border--bottom btn--collapse @if ($type == 'cart') collapsed @endif fw-500 fs-14">
        <a class='regular--link stretched-link'
            href="{{ route('website.plans.customization', $plan->nameURL) }}">Regular</a>
    </button>




    {{-- cart --}}
    <button
        class="btn btn--regular sm border--bottom btn--collapse @if ($type == 'regular') collapsed @endif fw-500 fs-14">
        <a class='regular--link stretched-link' href="{{ route('website.plans.cart', $plan->nameURL) }}">Cart To Go</a>
    </button>

</div>





{{-- noSwitch --}}
@else


{{-- empty --}}
<div></div>



@endif
{{-- end if --}}