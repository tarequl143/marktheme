<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-team-section', true);
?>

<!--team section start-->
<section class="space-3 space-adjust" id="team">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <?php
                        if(!empty($mark_section_meta['team_heading'])):
                        ?>
                        <h2 class="title"><?php echo esc_html($mark_section_meta['team_heading']);?></h2>
                        <?php
                        endif;
                        ?>
                        <?php
                        if(!empty($mark_section_meta['team_subheading'])):
                        ?>
                        <div class="sub-title"><?php echo esc_html($mark_section_meta['team_subheading']);?></div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if(!empty($mark_section_meta['team_members'])):
                    foreach($mark_section_meta['team_members'] as $single_member):
                        $single_member_photo = wp_get_attachment_image_src($single_member['member_image'], 'full');
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6 team-member">

                    <?php
                    if(!empty($single_member_photo[0])):
                    ?>
                    <div class="thumb">
                        <img src="<?php echo esc_url($single_member_photo[0]); ?>" alt="">
                    </div>
                    <?php
                    endif;
                    if(!empty($single_member['member_name'])):
                    ?>
                    <h3 class="team-title"><?php echo esc_html($single_member['member_name']);?></h3>
                    <?php
                    endif;
                    if(!empty($single_member['member_designation'])):
                    ?>
                    <div class="team-designation">
                    <?php echo esc_html($single_member['member_designation']);?>
                    </div>
                    <?php
                    endif;
                    ?>
                    
                    <?php
                        if(!empty($single_member['sc_profile_1']['sc_icon'])){
                            ?>
                            <div class="team-socail-links">
                            <?php
                            for($j=1; $j<11; $j++){
                                $fieldset = $single_member['sc_profile_'.$j];
                                if(!empty($fieldset['sc_icon'])){
                                    ?>
                                        <a href="<?php echo esc_url($fieldset['sc_url']);?>"><i class="<?php echo esc_attr($fieldset['sc_icon']);?>"></i></a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                            <?php
                        }
                    ?>

                </div>
                
                <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- team section end-->