<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-cta-section', true);
$cta_bg = wp_get_attachment_image_src($mark_section_meta['cta_bg_image'], 'full');
?>

<!-- parallax section start -->
<section class="space-3 parallax base-gradient" style="background-image: url('<?php echo esc_url($cta_bg[0]);?>');">
        <div class="arrow-bottom-shape"> </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8 text-center light-txt">
                    <?php
                    if(!empty($mark_section_meta['cta_heading'])):
                    ?>
                    <h2 class="mb-3">
                        <?php echo esc_html($mark_section_meta['cta_heading']);?>
                    </h2>
                    <?php
                    endif;
                    ?>
                    <?php
                    if(!empty($mark_section_meta['cta_subheading'])):
                    ?>
                    <h5 class="text-uppercase letter-space-1"><?php echo esc_html($mark_section_meta['cta_subheading']);?></h5>
                    <?php
                    endif;
                    ?>

                    <?php
                    if(!empty($mark_section_meta['cta_btn_one']) || !empty($mark_section_meta['cta_btn_two'])):
                    ?>
                    <div class="space-3 pt-4">
                        <?php
                        if(!empty($mark_section_meta['cta_btn_one'])):
                        ?>
                        <a href="<?php echo esc_url($mark_section_meta['cta_btn_one_link']);?>" class="btn btn-light-solid"><?php echo esc_html($mark_section_meta['cta_btn_one']);?></a>
                        <?php
                        endif;
                        ?>
                        <?php
                        if(!empty($mark_section_meta['cta_btn_two'])):
                        ?>
                        <a href="<?php echo esc_url($mark_section_meta['cta_btn_two_link']);?>" class="btn btn-light-border"><?php echo esc_html($mark_section_meta['cta_btn_two']);?></a>
                        <?php
                        endif;
                        ?>
                    </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- parallax section end -->