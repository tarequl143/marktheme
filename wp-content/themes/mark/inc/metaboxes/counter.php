<?php

function mark_counter_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-counter-section',
        'title' => __('Counter Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-counter-type-section',
                'fields' => array(
                    array(
                        'id'=> 'counter_columns',
                        'type' => 'select',
                        'options'  => array(
                            '1'  => 'One Column',
                            '2'   => 'Two Columns',
                            '3' => 'Three Columns',
                            '4' => 'Four Columns'
                          ),
                        'default'  => '4',
                        'title' => __('Counter Columns', 'mark'),
                        'class' => 'mark-common-section mark-counter-section-field'
                    ),
                    array(
                        'id'=> 'counters',
                        'type'=> 'group',
                        'title'=> 'Add Counter',
                        'button_title'=> __('New Counter', 'mark'),
                        'accordion_title'=> __('Add New Counter', 'mark'),
                        'fields'=> array(
                            array(
                                'id'=> 'counter_title',
                                'type' => 'text',
                                'title' => __('Counter Title', 'mark'),
                                'class' => 'mark-common-section mark-counter-section-field'
                            ),
                            array(
                                'id'=> 'counter_number',
                                'type' => 'number',
                                'title' => __('Counter Number', 'mark'),
                                'class' => 'mark-common-section mark-counter-section-field'
                            ),
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_counter_section_metabox');
?>