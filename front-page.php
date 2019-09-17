<?php /* Template Name: Start Page*/ ?>

<?php get_header(); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       

$components = ['hero', 'about'];

foreach ($components as $component) {
  get_template_part( 'src/components/' . $component);
}

?>

 
  <? endwhile; endif;?>
 

