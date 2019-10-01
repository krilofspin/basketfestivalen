<?php 
    $about_image = get_field('about_image');
    $about_text = get_field('about_text');
?>
<div id="about" class="section">
    <div class="container">
        <div class="columns align-center">
            <div class="column">
                <img src="<?php echo $about_image ?>" />
            </div>
            <div class="column about-text">
                <p class="h4"><?php echo $about_text?></p>
            </div>
        </div>
    </div>

</div>