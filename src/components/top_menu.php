<?php 
    $menu = wp_get_nav_menu_items("top_menu" );

    echo "<div class='top-header'>";
    echo "<div class='logo'>" . get_bloginfo() . "</div>";
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
 
?>