<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-about-section', true);
$about_bg = wp_get_attachment_image_src($mark_section_meta['about_image'], 'full');
?>

<!-- parallax section start -->
<section class=" parallax base-gradient light-txt" style="background-image: url('<?php echo esc_url($about_bg[0]);?>');">
        <div class="container-full">
            <div class="row">
                <div class="col-md-6 text-center space-3 align-self-center">
                    <h5 class="text-uppercase letter-space-2"><?php echo esc_html($mark_section_meta['about_sub_heading']);?></h5>
                </div>
                <div class="col-md-6 space-3 pl-5 dark-bg-opacity">
                    <div class="row">
                        <div class="col-lg-8 col-11">
                            <h2 class="text-light mb-3"><?php echo esc_html($mark_section_meta['about_heading']);?></h2>

                            <?php
                
                            if(!empty($mark_section_meta['about_description'])){
                            echo apply_filters('the_content', $mark_section_meta['about_description']);
                            }
                            ?>
                            <?php
                            if('1' == $mark_section_meta['about_button_dependency']):?>
                            <a href="<?php echo esc_url($mark_section_meta['about_button_url']);?>" class="btn btn-primary-solid"><?php echo esc_html($mark_section_meta['about_button']);?></a>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- parallax section end -->