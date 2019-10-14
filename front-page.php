<?php /* Template Name: Start Page */ ?>
<?php 
get_header(); 

$components = [
    "top_menu", 
    "hero", 
    "main_content", 
    "about", 
    "apps", 
    // "news",
    // "social_media"
];

foreach ($components as $component) {
    get_template_part( "src/components/" . $component);
}
?>

<?php get_footer();?>