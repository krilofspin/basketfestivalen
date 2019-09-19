<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

  </div>
<?php endif; ?>


<div id="hero" class="section">

<div class="background-image" style="background-image: url('<?php echo $image[0]; ?>')">
    <div class="container">
        <div class="content-box">
            <?php 
                // HERO TEXT
                the_content();
            ?>
        </div>
    </div>

    
</div>




</div>
