<?php

function mark_testimonials_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-testimonials-section',
        'title' => __('Testimonials Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-testimonials-type-section',
                'fields' => array(
                    array(
                        'id'=> 'testi_heading',
                        'type' => 'text',
                        'title' => __('Testimonials Heading', 'mark'),
                        'class' => 'mark-common-section mark-testimonials-section-field'
                    ),
                    array(
                        'id'=> 'testimonials',
                        'type'=> 'group',
                        'title'=> 'Add Testimonial',
                        'button_title'=> __('New Testimonial', 'mark'),
                        'accordion_title'=> __('Add New Testimonial', 'mark'),
                        'fields'=> array(
                            array(
                                'id'=> 'testimonial_desc',
                                'type' => 'textarea',
                                'title' => __('Testimonial Description', 'mark'),
                                'class' => 'mark-common-section mark-testimonials-section-field'
                            ),
                            array(
                                'id'=> 'testimonial_image',
                                'type' => 'image',
                                'title' => __('Testimonial Image', 'mark'),
                                'class' => 'mark-common-section mark-testimonials-section-field'
                            )
                            
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_testimonials_section_metabox');
?>