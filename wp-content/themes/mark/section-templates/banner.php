<?php

global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-banner-section', true);
$banner_img_id = $mark_section_meta['banner_image'];
$banner_img = wp_get_attachment_image_src($banner_img_id, 'full');
?>

<!--hero section start-->
<div id="home">
        <section class="hero js_full_height base-gradient " style="background-image: url('<?php echo esc_url($banner_img[0]);?>');">
            <div class="arrow-bottom-shape"> </div>
            <div class="hero-content light-txt text-center">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10" data-wow-duration="2s" data-wow-delay="1s">
                            <h1 class="hero-title"><?php echo esc_html($mark_section_meta['banner_heading'])?></h1>
                            <div class="hero-sub-title"><?php echo esc_html($mark_section_meta['banner_description'])?></div>
                            <div class="hero-action">
                                <!--<a href="#" class="btn btn-primary-solid">our uniqueness</a>-->
                                <?php
                                if(!empty($mark_section_meta['banner_btn_one'])){
                                   echo "<a href='".esc_url($mark_section_meta['banner_btn_one_link'])."'"."class='btn btn-light-solid'>".esc_html($mark_section_meta['banner_btn_one'])."</a>";
                                }
                                if(!empty($mark_section_meta['banner_btn_two'])){
                                    echo "<a href='".esc_url($mark_section_meta['banner_btn_two_link'])."'"."class='btn btn-light-solid'>".esc_html($mark_section_meta['banner_btn_two'])."</a>";
                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--hero section end-->