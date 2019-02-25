<?php
global $mark_single_section;
global $tqi_counter;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-testimonials-section', true);
?>

<!--testimonial section start-->
<section class="space-3 space-adjust" id="testimonial">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title "><?php echo esc_html($mark_section_meta['testi_heading'])?></h2>
                    </div>
                </div>

                <div class="col-md-8">

                    <?php
                        if(!empty($mark_section_meta['testimonials'])){
                    ?>
                    <div id="js_testimonial<?php echo esc_attr($tqi_counter);?>" class="owl-carousel owl-theme text-center testimonial-wrapper">
                            
                        <?php
                        foreach($mark_section_meta['testimonials'] as $single_testi){
                            $testi_img = wp_get_attachment_image_src($single_testi['testimonial_image'], 'thumbnail');
                            ?>
                            <div class="item mb-5" data-dot="<img class='testimonial-thumb' src='<?php echo esc_url($testi_img[0]);?>'/>">
                            <img class="mb-5 quote" src="<?php echo get_theme_file_uri();?>/assets/img/quote.svg" alt=""/>
                            <?php echo apply_filters('the_content', $single_testi['testimonial_desc']);?>
                        </div>
                        <?php
                        }
                        ?>
                        

                        <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- testimonial section end-->
