<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-mission-section', true);

?>

<!--about section start-->
<section class="space-3 space-adjust">
        <div class="container sm-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"><?php echo esc_html($mark_section_meta['mission_heading']);?></h2>
                    </div>
                </div>

                <div class="col-lg-6 col-12 align-self-center">
                    <div class="quotatoin-wrap">
                        <div class="quotation-txt pr-md-5">
                        <?php echo esc_html($mark_section_meta['mission_sub_heading']);?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                <?php
                
                if(!empty($mark_section_meta['mission_description'])){
                    echo apply_filters('the_content', $mark_section_meta['mission_description']);
                }
                ?>
                </div>
            </div>

        </div>
    </section>
    <!--about section end-->