<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-info-section', true);
?>

<!--feature section start-->
<section class="space-3 section-gray">
        <div class="arrow-top-shape"> </div>
        <div class="container">
            <div class="row justify-content-md-center">

                <?php
                if(isset($mark_section_meta['info-boxes'])){
                    foreach ($mark_section_meta['info-boxes'] as $single_box){
                        $info_image = wp_get_attachment_image_src($single_box['infobox_image'], 'full');
                        ?>

                        <div class="col-lg-4 col-md-6">
                    <div class="feature-list text-center">
                        <div class="feature-list-img">
                            <img src="<?php echo esc_url($info_image[0]);?>" alt="<?php esc_attr_e($single_box['infobox_heading']);?>">
                        </div>
                        <h3 class="feature-title">
                            <?php echo esc_html($single_box['infobox_heading']);?>
                        </h3>
                        <div class="feature-info">
                        <?php echo esc_html($single_box['infobox_description']);?>
                        </div>
                    </div>
                </div>


                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--feature section end-->