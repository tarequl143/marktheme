<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-image-info-section', true);
$image_info_img = wp_get_attachment_image_src($mark_section_meta['image_info_image'], 'full');
?>

<!--block section start-->
<section class="bg-dark light-txt" style="background-color:<?php echo esc_attr($mark_section_meta['image_info_bgcolor'])?> !important;">
        <!--<div class="">-->
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="img-block-txt">
                        <?php
                        if(!empty($mark_section_meta['image_info_heading'])):
                        ?>
                        <h2 class="mb-3"><?php echo esc_html($mark_section_meta['image_info_heading'])?></h2>
                        <?php
                        endif;
                        ?>
                        <?php
                        echo apply_filters('the_content', $mark_section_meta['image_info_description']);
                        ?>
                    </div>
                </div>
                <div class="col-md-6 block-bg-height" style="background: url('<?php echo esc_url($image_info_img[0]);?>') center center / cover no-repeat; "> </div>
            </div>
        <!--</div>-->
    </section>
    <!--block section end-->