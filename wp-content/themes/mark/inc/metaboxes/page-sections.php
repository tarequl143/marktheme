
<?php

function mark_sort_page_sections($metaboxes){

    $pageid = 0;
    if(isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $pageid = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $current_page_template = get_post_meta($pageid, '_wp_page_template', true);
    if('page-templates/landing.php' != $current_page_template){
        return $metaboxes;
    }    
    
    $metaboxes[] = array(
        'id' => 'mark-page-sections',
        'title' => __('Sort Your Sections', 'mark'),
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-all-posted-sections',
                'fields' => array(
                    
                    array(
                        'id'=> 'mark-posted-sections',
                        'type'=> 'group',
                        'title'=> 'Add Sections',
                        'button_title'=> __('New Section', 'mark'),
                        'accordion_title'=> __('Add New Section', 'mark'),
                        'fields'=> array(
                            array(
                                'id' => 'mark-posted-section',
                                'type' => 'select',
                                'title' => __('Select Your Section'),
                                'options' => 'post',
                                'query_args' => array(
                                    'post_type' => 'section',
                                    'posts_per_page' => -1
                                )
                            )
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_sort_page_sections');
?>