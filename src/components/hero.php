<?php 

    $hero_text = get_field('hero_text');
    $hero_subtext = get_field('sub_hero_text');
    $action_text = get_field('action_text');
    $action_url = get_field('action_url');
?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')"></div>
<?php endif; ?>

<div id="hero" class="section">
    <div class="background-image" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="container">
            <div class="content-box">
                <h1><?php echo $hero_text; ?></h1>
                <p><?php echo $hero_subtext; ?></p>

                <a class="btn" href="<?php echo $action_url; ?>"><?php echo $action_text; ?></a>
            </div>
        </div>
    </div>
</div>
