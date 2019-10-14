<?php 

    $hero_text = get_field('hero_text');
    $hero_subtext = get_field('sub_hero_text');
    $action_text = get_field('action_text');
    $action_url = get_field('action_url');
    $hero_background_color = get_field('hero_background_color');
    $hero_text_color = get_field('hero_text_color');
    $hero_background_opacity = get_field('hero_background_opacity');

    // Convert hex colors to RGB
    $hero_background_color_rgb = sscanf($hero_background_color, "#%02x%02x%02x");

    $hero_background_color = sprintf("rgb(%d, %d, %d, %.1f)", 
        $hero_background_color_rgb[0], 
        $hero_background_color_rgb[1], 
        $hero_background_color_rgb[2], 
        $hero_background_opacity
    );
?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')"></div>
<?php endif; ?>

<?php if (!empty($hero_text)) {?>
    <div id="hero" class="section">
        <div class="background-image" style="background-image: url('<?php echo $image[0]; ?>')">
            <div class="container">
                <div class="content-box" style="background-color: <?=$hero_background_color;?>; color: <?=$hero_text_color;?>;">
                    <h1><?php echo $hero_text; ?></h1>
                    <p><?php echo $hero_subtext; ?></p>

                    <a class="btn" href="<?php echo $action_url; ?>"><?php echo $action_text; ?></a>
                </div>
            </div>
        </div>
    </div>
<? } ?>