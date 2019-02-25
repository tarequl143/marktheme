
<?php

function mark_pricing_plan_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-pricing-plan-section',
        'title' => __('Pricing Plan Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-pricing-plan-type-section',
                'fields' => array(
                    array(
                        'id'=> 'pricing_plan_heading',
                        'type' => 'text',
                        'title' => __('Pricing Plan Heading', 'mark'),
                        'class' => 'mark-common-section mark-pricing_plan-section-field'
                    ),
                    array(
                        'id'=> 'pricing_plan_subheading',
                        'type' => 'text',
                        'title' => __('Pricing Plan Sub Heading', 'mark'),
                        'class' => 'mark-common-section mark-pricing_plan-section-field'
                    ),
                    array(
                        'id'=> 'pricing_plans',
                        'type' => 'group',
                        'title' => __('Pricing Plans', 'mark'),
                        'button_title'=> __('New Pricing Plan', 'mark'),
                        'accordion_title'=> __('Add New Pricing Plan', 'mark'),
                        'fields'=> array(
                            array(
                                'id'=> 'plan_title',
                                'type' => 'text',
                                'title' => __('Plan Title', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field'
                            ),
                            array(
                                'id'=> 'plan_price',
                                'type' => 'text',
                                'title' => __('Plan Price', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field'
                            ),
                            array(
                                'id'=> 'plan_tenure',
                                'type' => 'text',
                                'title' => __('Plan Tenure', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field'
                            ),
                            array(
                                'id'=> 'plan_details',
                                'type' => 'textarea',
                                'title' => __('Plan Details', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field',
                                'after' => __('<p class="cs-text-muted">Give a line break for every single plan optons.</p>', 'mark'),
                            ),
                            array(
                                'id'=> 'plan_action_button_label',
                                'type' => 'text',
                                'title' => __('Plan Button', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field'
                            ),
                            array(
                                'id'=> 'plan_action_button_url',
                                'type' => 'text',
                                'title' => __('Plan Button Url', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field',
                                'dependency' => array('plan_action_button_label', '!=', '')
                            ),
                            array(
                                'id'=> 'featured_plan',
                                'type' => 'switcher',
                                'title' => __('Feature Plan', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field'
                            ),
                            array(
                                'id'=> 'featured_plan_Label',
                                'type' => 'text',
                                'title' => __('Featured Plan Label', 'mark'),
                                'class' => 'mark-common-section mark-pricing_plan-section-field',
                                'dependency' => array('featured_plan', '!=', '')
                            ),
                        )
                    )
                    
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_pricing_plan_section_metabox');
?>