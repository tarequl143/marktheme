<?php

/*
Template Name: CPTUI
*/

?>

<?php get_header(); ?>

<div class="wrapper" style="margin-top: 150px;">

<?php
$args = array(
"post_type" => "test"
);

$query = new WP_Query($args);

if($query->have_posts()): while ($query->have_posts()): $query->the_post();

?>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<?php
endwhile;
endif;

?>

</div>

<?php get_footer(); ?>