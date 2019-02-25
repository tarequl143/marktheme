<?php

function mark_about_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-about-section',
        'title' => __('About Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-about-type-section',
                'fields' => array(
                    
                            array(
                                'id'=> 'about_heading',
                                'type' => 'text',
                                'title' => __('About Heading', 'mark'),
                                'class' => 'mark-common-section mark-about-section-field'
                            ),
                            array(
                                'id'=> 'about_sub_heading',
                                'type' => 'text',
                                'title' => __('About Sub Heading', 'mark'),
                                'class' => 'mark-common-section mark-about-section-field'
                            ),
                            array(
                                'id'=> 'about_image',
                                'type' => 'image',
                                'title' => __('About Background Image', 'mark'),
                                'class' => 'mark-common-section mark-about-section-field'
                            ),
                            array(
                                'id'=> 'about_description',
                                'type' => 'wysiwyg',
                                'title' => __('About Description', 'mark'),
                                'class' => 'mark-common-section mark-about-section-field'
                            ),
                            array(
                                'id'=> 'about_button_dependency',
                                'type' => 'switcher',
                                'title' => __('Display Button', 'mark'),
                                'default' => true,
                                'label' => 'Do you want to show the button?',
                                'class' => 'mark-common-section mark-about-section-field'
                            ),
                            array(
                                'id'=> 'about_button',
                                'type' => 'text',
                                'title' => __('Button Label', 'mark'),
                                'dependency' => array('about_button_dependency', '==', '1'),
                                'class' => 'mark-common-section mark-about-section-field'
                            ),
                            array(
                                'id'=> 'about_button_url',
                                'type' => 'text',
                                'title' => __('Button URL', 'mark'),
                                'dependency' => array('about_button_dependency', '==', '1'),
                                'class' => 'mark-common-section mark-about-section-field'
                            )
                    
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_about_section_metabox');
?>