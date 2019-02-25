<?php

function mark_banner_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-banner-section',
        'title' => __('Banner Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-banner-type-section',
                'fields' => array(
                    array(
                        'id'=> 'banner_image',
                        'type' => 'image',
                        'title' => __('Banner Image', 'mark'),
                        'class' => 'mark-common-section mark-banner-section-field'
                    ),
                    array(
                        'id'=> 'banner_heading',
                        'type' => 'text',
                        'title' => __('Banner Heading', 'mark'),
                        'class' => 'mark-common-section mark-banner-section-field'
                    ),
                    array(
                        'id'=> 'banner_description',
                        'type' => 'textarea',
                        'title' => __('Banner Description', 'mark'),
                        'class' => 'mark-common-section mark-banner-section-field'
                    ),
                    array(
                        'id'=> 'banner_btn_one',
                        'type' => 'text',
                        'title' => __('Banner Button One Label', 'mark'),
                        'class' => 'mark-common-section mark-banner-section-field'
                    ),
                    array(
                        'id'=> 'banner_btn_one_link',
                        'type' => 'text',
                        'title' => __('Banner Button One Target', 'mark'),
                        'dependency'   => array( 'banner_btn_one', '!=', '' ),
                        'class' => 'mark-common-section mark-banner-section-field'
                    ),
                    array(
                        'id'=> 'banner_btn_two',
                        'type' => 'text',
                        'title' => __('Banner Button Two Label', 'mark'),
                        'class' => 'mark-common-section mark-banner-section-field'
                    ),
                    array(
                        'id'=> 'banner_btn_two_link',
                        'type' => 'text',
                        'title' => __('Banner Button Two Target', 'mark'),
                        'dependency'   => array( 'banner_btn_two', '!=', '' ),
                        'class' => 'mark-common-section mark-banner-section-field'
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_banner_section_metabox');
?>