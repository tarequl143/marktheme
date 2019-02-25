<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-pricing-plan-section', true);
$pricing_plans = $mark_section_meta['pricing_plans'];
?>

<!-- pricing section start -->
<section class="price-table-section" id="pricing">
        <div class="space-3 parallax price-bg-height" style="background-image: url('<?php echo get_theme_file_uri();?>/assets/img/parallax.jpg');">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="section-title text-center light-txt">
                            <h2 class="title "><?php echo esc_html($mark_section_meta['pricing_plan_heading']);?></h2>
                            <div class="sub-title"><?php echo esc_html($mark_section_meta['pricing_plan_subheading']);?></div>
                        </div>
                    </div>
                </div>

                <?php
                if(!empty($pricing_plans)):
                ?>

                <div class="row">
                    <?php
                    
                    foreach($pricing_plans as $pricing_plan):
                        
                    ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="price-list text-center <?php if(!empty($pricing_plan['featured_plan'])){ echo "featured-price";}?>">
                            
                            <?php
                            if(!empty($pricing_plan['featured_plan'])):
                            ?>
                            <!--only for featured price-->
                            <div class="ribbon">
                                <img src="<?php echo get_theme_file_uri();?>/assets/img/ribbon.png" srcset="<?php echo get_theme_file_uri();?>/assets/img/ribbon@2x.png 2x" alt="">
                            </div>
                            <div class="recommanded"><?php if(!empty($pricing_plan['featured_plan_Label'])){ echo esc_html($pricing_plan['featured_plan_Label']); }?></div>
                            <!--only for featured price-->
                            <?php
                            endif;
                            ?>

                            <h2 class="price-title"><?php echo esc_html($pricing_plan['plan_title']);?></h2>
                            <div class="price-value">
                                <sup><?php _e('$', 'mark');?></sup> <?php echo esc_html($pricing_plan['plan_price']);?>
                                <div class="price-duration">Per <?php echo esc_html($pricing_plan['plan_tenure']);?></div>
                            </div>
                            <?php
                            if(!empty($pricing_plan['plan_details'])):
                            ?>
                            <ul class="list-unstyled price-info-list">
                                <?php
                                $pricing_plan_details = explode("\n", $pricing_plan['plan_details']);

                                ?>
                                <?php
                                foreach($pricing_plan_details as $pricing_plan_detail):
                                ?>
                                <li><?php echo esc_html($pricing_plan_detail);?></li>
                                <?php
                                endforeach;
                                ?>
                                
                            </ul>
                            <?php
                            endif;
                            ?>
                            <a href="<?php echo esc_attr($pricing_plan['plan_action_button_url']);?>" class="btn <?php if(!empty($pricing_plan['featured_plan'])){ echo "btn-primary-solid"; } else { echo "btn-gray-border"; }?>"><?php echo esc_html($pricing_plan['plan_action_button_label']);?></a>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- pricing section end -->