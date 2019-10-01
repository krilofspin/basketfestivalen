<?php 
$menu = wp_get_nav_menu_items("top_menu" );
$custom_logo_id = get_theme_mod( "custom_logo" );
$image = wp_get_attachment_image_src( $custom_logo_id , "full" );
?>
<div id="top-menu" class="wrapper">
    <div class="container">
        <div class="top-header">
            <div class="logo">
                <img src="<?=$image[0];?>">
                <span><?=get_bloginfo();?></span>
            </div>
        
            <? if($menu) { ?>
                <div class="menu">
                    <? foreach($menu as $menu_item) { ?>
                        <a href="<?=$menu_item->url;?>"><?=$menu_item->title;?></a>
                    <? } ?>
                </div>

                <button id="toggle-menu-button">
                    <ion-icon name="menu"></ion-icon>
                    <ion-icon class="hide" name="close"></ion-icon>
                </button>
            <? } else { ?>
                <p>The name of the menu is not found...Check header.php</p>
            <? } ?>
        </div>
    </div>
</div>