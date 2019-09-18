<?php /* Template Name: Basketfestivalen Single Page */ ?>

<?php get_header(); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       

$components = ['top_menu'];

foreach ($components as $component) {
  get_template_part( 'src/components/' . $component);
}

?>

 
  <? endwhile; endif;?>
 

 <?php  get_footer(); ?>