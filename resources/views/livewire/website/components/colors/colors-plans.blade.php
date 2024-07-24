{{-- wrapper --}}
<div>



    {{-- styles --}}
    @section('styles')




    <style>
        :root {


            /* fonts */
            --font-body: <?php echo "$profile->textFont" ?>;
            --font-heading: <?php echo "$profile->headingFont" ?>;

            /* colors */
            --color-theme: <?php echo "$settings->textColor" ?>;
            --color-body: <?php echo "$settings->bodyBackgroundColor" ?>;
            --color-swiper-bullets: <?php echo "$settings->sliderBulletsColor" ?>;
            --color-swiper-line: <?php echo "$settings->sliderLineColor" ?>;
            --color-cursor: <?php echo "$settings->cursorColor" ?>;
            --color-cursor-hover: <?php echo "$settings->cursorHoverColor" ?>;
            --color-plan-title: <?php echo "$settings->planCardTitleColor" ?>;
            --color-plan-subtitle: <?php echo "$settings->planCardSubtitleColor" ?>;
            --color-plan-caption: <?php echo "$settings->planCardCaptionColor" ?>;
            --color-plan-hr: <?php echo "$settings->planCardHrColor" ?>;
            --color-plan-button: <?php echo "$settings->planCardButtonColor" ?>;
            --color-plan-button-hover: <?php echo "$settings->planCardButtonHoverColor" ?>;


            --color-preloader-line: <?php echo "$settings->preloaderLineColor" ?>;
            --color-navbar-menu: <?php echo "$settings->navbarMenuColor" ?>;
            --color-navbar-menu-active: <?php echo "$settings->navbarMenuActiveColor" ?>;
            --color-navbar-menu-links: <?php echo "$settings->navbarLinksColor" ?>;
            --color-navbar-menu-links-hover: <?php echo "$settings->navbarLinksHoverColor" ?>;
            --color-navbar-menu-social-links: <?php echo "$settings->navbarSocialLinksColor" ?>;



            /* forPlan */
            --color-plan-side-title: <?php echo "$settings->planSideTitleColor" ?>;
            --color-plan-filter-links: <?php echo "$settings->planFilterLinksColor" ?>;
            --color-plan-filter-links-hover-border: <?php echo "$settings->planFilterLinksHoverBorderColor" ?>;
            --color-plan-list-numbers: <?php echo "$settings->planListNumbersColor" ?>;
            --color-plan-meal-diet: <?php echo "$settings->planMealDietColor" ?>;
            --color-plan-testimonial-title: <?php echo "$settings->planReviewsTitleColor" ?>;
            --color-plan-meals-border: <?php echo "$settings->planMealsBorderColor" ?>;







            /* -------------------------------------------------- */
            /* -------------------------------------------------- */
            /* -------------------------------------------------- */






            /* background */
            --background-plan-card: <?php echo "$settings->planCardBackgroundColor" ?>;
            --background-plan-button: <?php echo "$settings->planCardButtonBackgroundColor" ?>;

            --background-navbar: <?php echo "$settings->navbarBackgroundColor" ?>;






            /* -------------------------------------------------- */
            /* -------------------------------------------------- */
            /* -------------------------------------------------- */






            /* radius */
            --radius-plan: <?php echo "$settings->planCardRadius" ?>px;





            /* -------------------------------------------------- */
            /* -------------------------------------------------- */
            /* -------------------------------------------------- */


            /* align */
            --align-plan-content: <?php echo "$settings->planCardAlignment" ?>;


        }
    </style>


    @endsection
    {{-- endSection --}}





</div>
{{-- endWrapper --}}