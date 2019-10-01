<?php /* Template Name: Single Page */ ?>
<?php 
// Global variables
global $post;

get_header();  

$components = ['top_menu'];

foreach ($components as $component) {
  get_template_part( 'src/components/' . $component);
}
?>
<div class="single-page-wrapper">
    <main>
        <div class="container">
            <div class="section">
                <article>
                    <h1><?=$post->post_title;?></h1>
                    <? the_content(); ?>
                </article>
            </div>
        </div>
    </main>
</div>
<? get_footer(); ?>