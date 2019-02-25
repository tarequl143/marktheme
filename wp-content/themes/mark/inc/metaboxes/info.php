<?php

function mark_info_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-info-section',
        'title' => __('Info Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-info-type-section',
                'fields' => array(
                    array(
                        'id'=> 'info-boxes',
                        'type'=> 'group',
                        'title'=> 'Add Box',
                        'button_title'=> __('New Box', 'mark'),
                        'accordion_title'=> __('Add New Box', 'mark'),
                        'fields'=> array(
                            array(
                                'id'=> 'infobox_heading',
                                'type' => 'text',
                                'title' => __('Info Box Heading', 'mark'),
                                'class' => 'mark-common-section mark-info-section-field'
                            ),
                            array(
                                'id'=> 'infobox_image',
                                'type' => 'image',
                                'title' => __('Info Box Image', 'mark'),
                                'class' => 'mark-common-section mark-info-section-field'
                            ),
                            array(
                                'id'=> 'infobox_description',
                                'type' => 'textarea',
                                'title' => __('Info Box Description', 'mark'),
                                'class' => 'mark-common-section mark-info-section-field'
                            )
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_info_section_metabox');
?>