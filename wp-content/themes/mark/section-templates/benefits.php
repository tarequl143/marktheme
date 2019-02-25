<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-benefit-section', true);
$benefit_image = wp_get_attachment_image_src($mark_section_meta['benefit_image'], 'full');
?>
<!--block section start-->
<section class="space-3 section-gray">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="section-title mb-4">
                        <h2 class="title"><?php echo esc_html($mark_section_meta['benefit_heading'])?></h2>
                    </div>
                    <?php echo apply_filters('the_content', $mark_section_meta['benefit_description']);?>

                    <?php
                    if(!empty($mark_section_meta['benefits_list'])){?>
                        
                        <ul class="list-unstyled">
                        <?php
                        foreach($mark_section_meta['benefits_list'] as $single_list){?>
                            <li><i class="fa fa-check pr-2 text-purple"></i><?php echo esc_html($single_list['single_list']);?> </li>
                        <?php
                        }
                        ?>
                        </ul>
                        <?php
                    }
                    ?>
                    
                </div>

                <div class="col-md-6 order-md-first">
                    <?php
                    if(!empty($benefit_image[0])){
                        ?>
                        <img class="img-fluid mb-mt-0 mt-4" src="<?php echo esc_url($benefit_image[0]);?>" alt="<?php echo esc_html('Benefit Image');?>"/>
                        <?php
                    }
                    ?>
                    
                </div>

            </div>
        </div>
        <div class="arrow-bottom-shape pt-5"> </div>
    </section>
    <!--block section end-->