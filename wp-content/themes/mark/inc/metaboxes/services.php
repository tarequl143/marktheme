<?php

function mark_services_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-services-section',
        'title' => __('Services Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-services-type-section',
                'fields' => array(
                    array(
                        'id'=> 'services_heading',
                        'type' => 'text',
                        'title' => __('Services Heading', 'mark'),
                        'class' => 'mark-common-section mark-services-section-field'
                    ),
                    array(
                        'id'=> 'services-boxes',
                        'type'=> 'group',
                        'title'=> 'Add Service',
                        'button_title'=> __('New Service', 'mark'),
                        'accordion_title'=> __('Add New Service', 'mark'),
                        'fields'=> array(
                            array(
                                'id'=> 'service_box_heading',
                                'type' => 'text',
                                'title' => __('Service Box Heading', 'mark'),
                                'class' => 'mark-common-section mark-services-section-field'
                            ),
                            array(
                                'id'=> 'service_icon_class',
                                'type' => 'text',
                                'title' => __('Service Box Icon', 'mark'),
                                'class' => 'mark-common-section mark-services-section-field'
                            ),
                            array(
                                'id'=> 'service_description',
                                'type' => 'textarea',
                                'title' => __('Service Box Description', 'mark'),
                                'class' => 'mark-common-section mark-services-section-field'
                            )
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_services_section_metabox');
?>