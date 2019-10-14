<?php
// Use dynamic fields later saved in a custom options page
// $partner_logos = get_field("partner_logos");
// $social_media_icons = get_field("social_media_icons");
// $footer_text_and_links = get_field("footer_text_and_links");
?>
<script src="<?php echo get_template_directory_uri();?>/dist/js/main.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <footer id="footer" class="footer">
        <?/* Allow dynamic logos and text later 
        <div class="container">
            <div class="partners">
                <? foreach ($partner_logos as $partner_logo) {?>
                    <img src="<?=$partner_logo["logo"]["url"];?>" alt="" />
                <? } ?>
            </div>
        </div>

        <div class="container">
            <div>
                <?=$footer_text_and_links;?>
            </div>

            <div class="social-media-box">
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-instagram"></ion-icon>
                <ion-icon name="logo-youtube"></ion-icon>
            </div>
        </div>
        */?>

        <? // Static partners and text atm ?>
        <div class="container">
            <div class="partners">
                <img src="/wp-content/uploads/2019/09/scandic_logo.jpg" alt="">
                <img src="/wp-content/uploads/2019/09/2win-basket-butik-logo.png" alt="">
                <img src="/wp-content/uploads/2019/09/liseberg-logotyp.jpg" alt="">
                <img src="/wp-content/uploads/2019/10/spinit_logo_700.png" alt="">
                <img src="/wp-content/uploads/2019/09/rjlshb6qdpx1zb03ibg8.jpg" alt="">
            </div>
        </div>

        <div class="container">
            <nav class="footer-nav">
                <div class="links-powered-by">
                    <a href="https://basketballfestival.se/admin">Logga in</a> | 
                    <a href="/cookies">Cookies</a> | 
                    <a href="/integritetspolicy">Privacy policy</a> | 
                    Powered by <a href="http://www.cupmanager.net/">Cup Manager</a> and <a href="http://superinvite.no/">SuperInvite</a> | 
                    Göteborg Basketball Festival | 
                    Ängåsvallen 20 421 47 , Västra Frölunda
                </div>

                <div class="social-media-box">
                    <a href="https://twitter.com/gbgfestival2019" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://www.facebook.com/basketballfestival/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.instagram.com/explore/tags/gbgbasketballfestival2019/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://www.youtube.com/channel/UCs00L3AZ9JUAtv80uNqUbEA" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
                </div>
            </nav>
        </div>
        
    </footer>

    <!-- Ending of the class main-wrapper (starting in header.php)-->
</div> 
<?php wp_footer(); ?>
 </body>
</html>