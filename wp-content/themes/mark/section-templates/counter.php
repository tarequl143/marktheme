<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-counter-section', true);
$counter_column_val = !empty($mark_section_meta['counter_columns']) ? 12 / $mark_section_meta['counter_columns'] : 12 / 4;

?>
<!-- fun factor section start -->
<section class="space-3">
        <div class="container">
            <div class="row">
                <?php
                if(!empty($mark_section_meta['counters'])):
                    $counter_count = 0;
                    foreach($mark_section_meta['counters'] as $single_counter):
                        $counter_count++;
                        $count_seperator_class = "fun-separator";
                        if($counter_count % $mark_section_meta['counter_columns'] == 0){
                            $count_seperator_class = "";
                        }
                ?>
                <div class="col-lg-<?php echo esc_attr($counter_column_val);?> col-md-6 col-6">
                    <div class="fun-box text-center <?php echo esc_attr($count_seperator_class);?>">
                        <div class="value" data-target="<?php echo esc_attr($single_counter['counter_number']);?>">0</div>
                        <div class="title"><?php echo esc_html($single_counter['counter_title']);?></div>
                    </div>
                </div>

                <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- fun factor section end -->