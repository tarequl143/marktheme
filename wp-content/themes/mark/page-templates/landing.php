<?php
/*
Template Name: Mark Landing Page
*/
?>
<?php get_header(); ?>


<?php
$mark_sections = get_post_meta(get_the_ID(), 'mark-page-sections', true);

if(isset($mark_sections['mark-posted-sections']) && is_array($mark_sections['mark-posted-sections'])){
    $tqi_counter = 1;
    foreach($mark_sections['mark-posted-sections'] as $mark_single_section){
        $tqi_counter++;
        $mark_section_meta = get_post_meta($mark_single_section['mark-posted-section'], 'mark-sections-type', true);
        $mark_section_type = isset($mark_section_meta['section-type']) ? $mark_section_meta['section-type'] : '';
        get_template_part("section-templates/{$mark_section_type}");
    }
}
?>

<?php get_footer(); ?>