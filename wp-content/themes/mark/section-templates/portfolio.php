<?php
global $mark_single_section;

$mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-portfolio-section', true);
$get_filters = array();
$mark_portfolios = $mark_section_meta['portfolios'];
if(!empty($mark_portfolios)){
    foreach($mark_portfolios as $single_portfolio) {
        $mark_portfolio_filters = explode(",", $single_portfolio['portfolio_filter']);
        foreach($mark_portfolio_filters as $single_filter_item) {
            $get_filters[strtolower(trim($single_filter_item))] = trim($single_filter_item);
        }
    }
}

?>

<!--portfolio section start-->
<section class="space-3 space-adjust" id="portfolio">
        <div class="section-title text-center">
            <?php
            if(!empty($mark_section_meta['portfolio_heading'])):
            ?>
            <h2 class="title"><?php echo esc_html($mark_section_meta['portfolio_heading']);?></h2>
            <?php
            endif;
            ?>
        </div>
        <!--portfolio-->
        <div class="container">

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li class="active"><a href="#" data-filter="*"> All</a></li>

                    <?php
                    foreach($get_filters as $mark_filter ):
                    ?>
                    <li><a href="#" data-filter=".<?php echo esc_attr($mark_filter);?>"><?php echo esc_html($mark_filter);?></a></li>
                    <?php
                    endforeach;
                    ?>
                </ul>
            </div>
            

            <?php
            if(!empty($mark_portfolios)):
            ?>
            <div class="row portfolio portfolio-gallery column-3 gutter "><!--portfolio grid option col-2 - col-6 -->
                
                <?php
                foreach($mark_portfolios as $mark_single_portfolio):
                    $big_port_img = wp_get_attachment_image_src($mark_single_portfolio['portfolio_image'], "large");
                    $mid_port_img = wp_get_attachment_image_src($mark_single_portfolio['portfolio_image'], "medium");
                ?>
                <div class="portfolio-item <?php echo esc_attr(str_replace(",", " ", str_replace(" ", "", $mark_single_portfolio['portfolio_filter'])));?>">
                    <a href="<?php echo esc_attr($big_port_img[0]);?>" class="thumb popup-gallery" title="<?php echo esc_attr($mark_single_portfolio['portfolio_title']);?>">
                        <img src="<?php echo esc_attr($mid_port_img[0]);?>" alt="<?php echo esc_attr($mark_single_portfolio['portfolio_title']);?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-description">
                                <h4 class="mb-1"><?php echo esc_html($mark_single_portfolio['portfolio_title']);?></h4>
                                <p><?php echo esc_attr(trim($mark_single_portfolio['portfolio_filter']));?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endforeach;
                ?>
                    
            </div>
            <?php
            endif;
            ?>
            
        </div>
        <!--portfolio-->
</section>
    <!--portfolio section end-->