<?php  
    $partners_text = get_field('companies_text');
    $partnersLogos = get_field('companies_logos');
?>

<div id="partners" class="section">
    <div class="container">
        <div class="columns">
        
            <div class="column is-4">
            <h2>Partners</h2>
                <p>
                    <?php 
                        if($partners_text) 
                        echo $partners_text;
                    ?>
                </p>
            </div>

            <div class="column">
            
            
            <?php
                if($partnersLogos) {
                    ?>
                    <div class="image-grid">
                        <?php
                        foreach ($partnersLogos as $logo) {
                            ?>
                    
                                <img src="<?php echo ($logo['company_logo']);?>">
                        
                        <?php 
                        }
                        ?>
                    </div>
                    <?php
                }

            ?>
            </div>
          
        </div>
 </div>
</div>