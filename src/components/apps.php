<?php 
$apps_image = get_field("apps_image");
$apps_text = get_field("apps_text");
$apps_logos = get_field("apps_logos");
?>
<div id="apps" class="section">
    <div class="container">
        <div class="columns align-center">
            <? if (!empty($apps_image)) {?>
                <div class="column">
                    <img src="<?=$apps_image;?>" alt="" />           
                </div>
            <? } ?>

            <div class="column">
                <p class="h4"><?php echo nl2br($apps_text);?></p>
                <? foreach ($apps_logos as $logos) {?>
                    <a href="<?=$logos["apps_link_to_store"];?>">
                        <img src="<?=$logos["apps_logos_image"]["url"];?>" alt="<?=$logos["apps_logos_image"]["title"];?>" width="190" />
                    </a><br/>
                <? } ?>
            </div>
        </div>
    </div>

</div>