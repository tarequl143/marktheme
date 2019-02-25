<?php

/*
Template Name: CPTUI
*/

?>

<?php get_header(); ?>

<div class="wrapper" style="margin-top: 150px;">

<?php

while(have_posts()): the_post();
?>

<h2><?php the_title(); ?></h2>
<p><?php the_field('test_field');?></p>


<?php
endwhile;

?>

</div>

<?php get_footer(); ?>