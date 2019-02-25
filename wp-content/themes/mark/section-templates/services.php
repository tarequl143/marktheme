<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-services-section', true);
?>


<!--service section start-->
<section class="space-3" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"><?php echo esc_html($mark_section_meta['services_heading'])?></h2>
                    </div>
                </div>
                <?php
                if(!empty($mark_section_meta['services-boxes'])){
                    foreach($mark_section_meta['services-boxes'] as $single_service_box){
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-gap">
                            <div class="services-list text-left">
                                <div class="services-icon">
                                    <i class="bi <?php echo esc_attr($single_service_box['service_icon_class']);?>"></i>
                                </div>
                                <h4 class="services-title">
                                    <?php echo esc_html($single_service_box['service_box_heading'])?>
                                </h4>
                                <p class="services-info"><?php echo esc_html($single_service_box['service_description'])?></p>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>    
            </div>
        </div>
    </section>
    <!--service section end-->