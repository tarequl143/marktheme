<?php

function mark_team_section_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'mark-team-section',
        'title' => __('Team Section', 'mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-team-type-section',
                'fields' => array(
                   
                    array(
                        'id'=> 'team_heading',
                        'type' => 'text',
                        'title' => __('Team Heading', 'mark'),
                        'class' => 'mark-common-section mark-team-section-field'
                    ),
                    array(
                        'id'=> 'team_subheading',
                        'type' => 'text',
                        'title' => __('Team Sub Heading', 'mark'),
                        'class' => 'mark-common-section mark-team-section-field'
                    ),
                    array(
                        'id'=> 'team_members',
                        'type'=> 'group',
                        'title'=> 'Add Member',
                        'button_title'=> __('New Member', 'mark'),
                        'accordion_title'=> __('Add New Member', 'mark'),
                        'fields'=> mark_team_social_fields()
                    )
                )
            )
        )
    );
    return $metaboxes;
}

add_filter('cs_metabox_options', 'mark_team_section_metabox');
?>