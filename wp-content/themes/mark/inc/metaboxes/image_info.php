
<?php

function mark_image_info_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-image-info-section',
        'title' => __('Image Info Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-image-info-type-section',
                'fields' => array(
                    array(
                        'id'=> 'image_info_heading',
                        'type' => 'text',
                        'title' => __('Image Info Heading', 'mark'),
                        'class' => 'mark-common-section mark-image_info-section-field'
                    ),
                    array(
                        'id'=> 'image_info_description',
                        'type' => 'wysiwyg',
                        'title' => __('Image Info Description', 'mark'),
                        'class' => 'mark-common-section mark-image_info-section-field'
                    ),
                    array(
                        'id'=> 'image_info_image',
                        'type' => 'image',
                        'title' => __('Image Info Image', 'mark'),
                        'class' => 'mark-common-section mark-image_info-section-field'
                    ),
                    array(
                        'id'=> 'image_info_bgcolor',
                        'type' => 'color_picker',
                        'title' => __('Image Info Background Color', 'mark'),
                        'class' => 'mark-common-section mark-image_info-section-field'
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_image_info_section_metabox');
?>