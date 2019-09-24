<?php /* Template Name: Start Page*/ ?>






<?php get_header(); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       

$components = ['top_menu','hero', 'about', 'news', 'partners','social_media'];

foreach ($components as $component) {
  get_template_part( 'src/components/' . $component);
}

?>

 
  <? endwhile; endif;?>
 
  <?php get_footer(); ?>
