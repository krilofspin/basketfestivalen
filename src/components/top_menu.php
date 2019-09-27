<?php 
    $menu = wp_get_nav_menu_items("top_menu" );
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  

    echo "<div id='top-menu' class='wrapper'>";
        echo "<div class='container'>";
            echo "<div class='top-header'>";
            echo "<div class='logo'><img src='" . $image[0] ." '></img><span>" . get_bloginfo() . "</span></div>";
           
                    if($menu) { 
                        echo "<div class='menu'>";
                        foreach($menu as $menu_item) {
                            echo "<a href='". $menu_item->url ."'>" . $menu_item->title . "</a>";
                        }
                        echo "</div>";    
                        echo "<button id='toggle-menu-button'> <ion-icon name='menu'></ion-icon> <ion-icon class='hide' name='close'></ion-icon></button>";

                    } else {
                        echo "The name of the menu is not found...Check header.php";
                    }

            echo "</div>";
        echo "</div>";
    echo "</div>";
    
 
?>