<?php

function mark_mission_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-mission-section',
        'title' => __('Mission Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-mission-type-section',
                'fields' => array(
                    
                    array(
                        'id'=> 'mission_heading',
                        'type' => 'text',
                        'title' => __('Mission Heading', 'mark'),
                        'class' => 'mark-common-section mark-mission-section-field'
                    ),
                    array(
                        'id'=> 'mission_sub_heading',
                        'type' => 'text',
                        'title' => __('Mission Sub Heading', 'mark'),
                        'class' => 'mark-common-section mark-mission-section-field'
                    ),
                    array(
                        'id'=> 'mission_description',
                        'type' => 'wysiwyg',
                        'title' => __('Mission Description', 'mark'),
                        'class' => 'mark-common-section mark-mission-section-field'
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_mission_section_metabox');
?>