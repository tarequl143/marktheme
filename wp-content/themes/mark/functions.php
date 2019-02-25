<?php


add_filter('show_admin_bar', '__return_false');

if(file_exists(get_template_directory().'/inc/mark-theme-setup.php')){
	require_once (get_template_directory()."/inc/mark-theme-setup.php");
}
if(file_exists(get_template_directory().'/inc/enqueue.php')){
	require_once (get_template_directory().'/inc/enqueue.php');
}
if(file_exists(get_template_directory().'/lib/csf/cs-framework.php')){
	require_once (get_template_directory().'/lib/csf/cs-framework.php');

	define( 'CS_ACTIVE_FRAMEWORK',   false  );
	define( 'CS_ACTIVE_METABOX',     true  );
	define( 'CS_ACTIVE_TAXONOMY',    false  );
	define( 'CS_ACTIVE_SHORTCODE',   false  );
	define( 'CS_ACTIVE_CUSTOMIZE',   false  );
}
if(file_exists(get_template_directory().'/inc/metaboxes/sections.php')){
	require_once (get_template_directory().'/inc/metaboxes/sections.php');
}

if(file_exists(get_template_directory().'/inc/metaboxes/admin-section-js.php')){
	require_once (get_template_directory().'/inc/metaboxes/admin-section-js.php');
}

if(file_exists(get_template_directory().'/inc/metaboxes/page-sections.php')){
	require_once (get_template_directory().'/inc/metaboxes/page-sections.php');
}


if(file_exists(get_template_directory().'/inc/metaboxes/banner.php')){
	require_once (get_template_directory().'/inc/metaboxes/banner.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/mission.php')){
	require_once (get_template_directory().'/inc/metaboxes/mission.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/info.php')){
	require_once (get_template_directory().'/inc/metaboxes/info.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/about.php')){
	require_once (get_template_directory().'/inc/metaboxes/about.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/services.php')){
	require_once (get_template_directory().'/inc/metaboxes/services.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/benefits.php')){
	require_once (get_template_directory().'/inc/metaboxes/benefits.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/testimonials.php')){
	require_once (get_template_directory().'/inc/metaboxes/testimonials.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/image_info.php')){
	require_once (get_template_directory().'/inc/metaboxes/image_info.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/counter.php')){
	require_once (get_template_directory().'/inc/metaboxes/counter.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/cta.php')){
	require_once (get_template_directory().'/inc/metaboxes/cta.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/team.php')){
	require_once (get_template_directory().'/inc/metaboxes/team.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/portfolio.php')){
	require_once (get_template_directory().'/inc/metaboxes/portfolio.php');
}
if(file_exists(get_template_directory().'/inc/metaboxes/pricing_plan.php')){
	require_once (get_template_directory().'/inc/metaboxes/pricing_plan.php');
}



function mark_team_social_fields(){

	$mark_team_sc_profiles_fields = array();
	$mark_sc_field_no = array('1','2','3','4','5','6','7','8','9','10');

	$team_name_field = array(
		'id'=> 'member_name',
		'type' => 'text',
		'title' => __('Member Name', 'mark'),
		'class' => 'mark-common-section mark-team-section-field'
	);
	$team_img_field = array(
		'id'=> 'member_image',
		'type' => 'image',
		'title' => __('Member Image', 'mark'),
		'class' => 'mark-common-section mark-team-section-field'
	);
	$team_desgin_field = array(
		'id'=> 'member_designation',
		'type' => 'text',
		'title' => __('Member Designation', 'mark'),
		'class' => 'mark-common-section mark-team-section-field'
	);
	array_push($mark_team_sc_profiles_fields, $team_name_field, $team_img_field, $team_desgin_field);
	foreach($mark_sc_field_no as $single_field){
		$profile_id = "sc_profile_".$single_field;
		$mark_single_profile = array(
			'id'        => $profile_id,
			'type'      => 'fieldset',
			'title'     => __('Social Profile '.$single_field, 'mark'),
			'fields'    => array(
			  array(
				'id'    => 'sc_icon',
				'type'  => 'icon',
				'title' => __('Icon', 'mark'),
			  ),
			  array(
				'id'    => 'sc_url',
				'type'  => 'text',
				'title' => __('URL', 'mark'),
			  )
			)
			
		);
		array_push($mark_team_sc_profiles_fields, $mark_single_profile);
	}
	return $mark_team_sc_profiles_fields;	
}


function mark_csf_init(){
	CSFramework_metabox::instance(array());
}
add_action('init', 'mark_csf_init');