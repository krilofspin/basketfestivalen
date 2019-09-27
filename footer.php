<?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>


<script src="<?php echo get_template_directory_uri();?>/dist/js/main.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


    <div id="footer">
        <div class="container">
            <div><?php echo get_bloginfo('name') ?> </div>
            <div class="social-media-box">
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-instagram"></ion-icon>
                <ion-icon name="logo-youtube"></ion-icon>
            </div>
        </div>
    </div>

    <!-- Ending of the class main-wrapper (starting in header.php)-->
</div> 
<?php wp_footer(); ?>
 </body>
</html>