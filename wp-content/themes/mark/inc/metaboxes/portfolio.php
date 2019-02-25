<?php

function mark_portfolio_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-portfolio-section',
        'title' => __('Portfolio Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-portfolio-type-section',
                'fields' => array(
                   
                    array(
                        'id'=> 'portfolio_heading',
                        'type' => 'text',
                        'title' => __('Portfolio Heading', 'mark'),
                        'class' => 'mark-common-section mark-portfolio-section-field'
                    ),
                    array(
                        'id'=> 'portfolios',
                        'type'=> 'group',
                        'title'=> 'Add Portfolio',
                        'button_title'=> __('New Portfolio', 'mark'),
                        'accordion_title'=> __('Add New Portfolio', 'mark'),
                        'fields'=> array(
                            array(
                                'id'=> 'portfolio_title',
                                'type' => 'text',
                                'title' => __('Portfolio Title', 'mark'),
                                'class' => 'mark-common-section mark-portfolio-section-field'
                            ),
                            array(
                                'id'=> 'portfolio_image',
                                'type' => 'image',
                                'title' => __('Portfolio Image', 'mark'),
                                'class' => 'mark-common-section mark-portfolio-section-field'
                            ),
                            array(
                                'id'=> 'portfolio_filter',
                                'type' => 'text',
                                'title' => __('Portfolio Filters', 'mark'),
                                'after' => __('<p class="cs-text-muted">Use Comma Seperator</p>', 'mark'),
                                'class' => 'mark-common-section mark-portfolio-section-field'
                            )
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_portfolio_section_metabox');
?>