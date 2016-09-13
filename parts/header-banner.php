<?php
if(is_front_page()):
    $ember_parallax="data-parallax='scroll' data-image-src='" . get_template_directory_uri() . "/assets/images/preview/fire.jpg' style='background: rgba(0, 0, 0, 0.35);'";
    $parallax_active="parallax_active";
    ?>

    <section class="ssbanner frontpage-banner <?php if(isset($parallax_active)){echo $parallax_active;} ?>" <?php if(isset($ember_parallax)){echo $ember_parallax;} ?>>
        <div class="container">
            <div class="banner-wrap" data-sr='wait 0.4s, scale up 25%'>
                <div class="banner-title">Find Bands In Your Area</div>
<!--                <div class="banner-sub-title">Find Bands In Your Area</div>-->
                <div class="banner-link-button"><a class="btn-ember" href="#">Go To The Map</a></div>
            </div>
        </div>
    </section>

<?php wp_reset_postdata(); ?>
<?php endif; ?>
