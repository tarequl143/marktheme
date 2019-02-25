<?php

function mark_cta_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-cta-section',
        'title' => __('CTA Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-cta-type-section',
                'fields' => array(
                    array(
                        'id'=> 'cta_bg_image',
                        'type' => 'image',
                        'title' => __('CTA Background Image', 'mark'),
                        'class' => 'mark-common-section mark-cta-section-field'
                    ),
                    array(
                        'id'=> 'cta_heading',
                        'type' => 'text',
                        'title' => __('CTA Heading', 'mark'),
                        'class' => 'mark-common-section mark-cta-section-field'
                    ),
                    array(
                        'id'=> 'cta_subheading',
                        'type' => 'text',
                        'title' => __('CTA Sub Heading', 'mark'),
                        'class' => 'mark-common-section mark-cta-section-field'
                    ),
                    array(
                        'id'=> 'cta_btn_one',
                        'type' => 'text',
                        'title' => __('CTA Button One Label', 'mark'),
                        'class' => 'mark-common-section mark-cta-section-field'
                    ),
                    array(
                        'id'=> 'cta_btn_one_link',
                        'type' => 'text',
                        'title' => __('CTA Button One Target', 'mark'),
                        'dependency'   => array( 'cta_btn_one', '!=', '' ),
                        'class' => 'mark-common-section mark-cta-section-field'
                    ),
                    array(
                        'id'=> 'cta_btn_two',
                        'type' => 'text',
                        'title' => __('CTA Button Two Label', 'mark'),
                        'class' => 'mark-common-section mark-cta-section-field'
                    ),
                    array(
                        'id'=> 'cta_btn_two_link',
                        'type' => 'text',
                        'title' => __('CTA Button Two Target', 'mark'),
                        'dependency'   => array( 'cta_btn_two', '!=', '' ),
                        'class' => 'mark-common-section mark-cta-section-field'
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_cta_section_metabox');
?>