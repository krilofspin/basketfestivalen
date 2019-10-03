<?php 
$custom_logo_id = get_theme_mod( "custom_logo" );
$image = wp_get_attachment_image_src( $custom_logo_id , "full" );
?>
<pre><? //var_dump($menu); die();?></pre>
<div id="top-menu" class="wrapper">
    <div class="container">
        <div class="top-header">
            <div class="logo">
                <a href="<?=get_bloginfo("url");?>" title="<?=get_bloginfo();?>">
                    <img src="<?=$image[0];?>">
                </a>
                <span><?=get_bloginfo();?></span>
            </div>

            <?php wp_nav_menu([
                'theme_location' => 'my-custom-menu'
            ]);?>
        </div>
    </div>
</div>