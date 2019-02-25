<?php

function mark_benefits_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-benefit-section',
        'title' => __('Benefit Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-benefits-type-section',
                'fields' => array(
                    array(
                        'id'=> 'benefit_heading',
                        'type' => 'text',
                        'title' => __('Benefit Heading', 'mark'),
                        'class' => 'mark-common-section mark-benefits-section-field'
                    ),
                    array(
                        'id'=> 'benefit_image',
                        'type' => 'image',
                        'title' => __('Benefit Image', 'mark'),
                        'class' => 'mark-common-section mark-benefits-section-field'
                    ),
                    array(
                        'id'=> 'benefit_description',
                        'type' => 'wysiwyg',
                        'title' => __('Benefit Description', 'mark'),
                        'class' => 'mark-common-section mark-benefits-section-field'
                    ),
                    array(
                        'id'=> 'benefits_list',
                        'type'=> 'group',
                        'title'=> 'Add Benefit',
                        'button_title'=> __('New Benefit', 'mark'),
                        'accordion_title'=> __('Add New Benefit', 'mark'),
                        'fields'=> array(
                            array(
                                'id'=> 'single_list',
                                'type' => 'text',
                                'title' => __('Single Benefit', 'mark'),
                                'class' => 'mark-common-section mark-benefits-section-field'
                            )
                            
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_benefits_section_metabox');
?>