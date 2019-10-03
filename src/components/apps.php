<?php 
$apps_text = get_field("apps_text");
$apps_logos = get_field("apps_logos");
?>
<div id="about" class="section">
    <div class="container">
        <div class="columns align-center">
            <div class="column">
                <p class="h4"><?php echo nl2br($apps_text);?></p>                
            </div>
            <div class="column">
                <? foreach ($apps_logos as $logos) {?>
                    <a href="<?=$logos["apps_link_to_store"];?>">
                        <img src="<?=$logos["apps_logos_image"]["url"];?>" alt="<?=$logos["apps_logos_image"]["title"];?>" width="250" />
                    </a><br/>
                <? } ?>
            </div>
        </div>
    </div>

</div>