
<?php

function mark_section_type_metabox($metaboxes){

    $metaboxes[] = array(
        'id' => 'mark-sections-type',
        'title' => __('Section Type', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-section-type',
                'fields' => array(
                    array(
                        'id' => 'section-type',
                        'type' => 'select',
                        'title' => __('Select a Section Type'),
                        'options' => array(
                            'banner' => __('Banner', 'mark'),
                            'mission' => __('Mission', 'mark'),
                            'info' => __('Info', 'mark'),
                            'about' => __('About', 'mark'),
                            'services' => __('Services', 'mark'),
                            'benefits' => __('Benefits', 'mark'),
                            'testimonials' => __('Testimonials', 'mark'),
                            'image_info' => __('Image Info', 'mark'),
                            'counter' => __('Counter', 'mark'),
                            'cta' => __('CTA', 'mark'),
                            'team' => __('Team', 'mark'),
                            'portfolio' => __('Portfolio', 'mark'),
                            'pricing_plan' => __('Pricing Plan', 'mark'),
                            'shop' => __('Shop', 'mark'),
                            'blog' => __('Blog', 'mark'),
                            'clients' => __('Clients', 'mark'),
                            'newsletter' => __('Newsletter', 'mark'),
                            'contact' => __('Contact', 'mark'),
                        )
                    ) 
                )
            )
        )
);
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_section_type_metabox');
?>