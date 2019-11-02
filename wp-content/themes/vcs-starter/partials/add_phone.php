<!-- PHONE ADD SECTION STARTS -->
<section class="phone-add__positioning">
    <div class="container flex-container__small phone-add center">
        <div>
            <?php
                $image = get_field('ap_image');
                           
            ?>
            <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
        </div>
        <div class="heading__dark">
            <h2><?php the_field('ap_heading'); ?></h2>
            <?php
                $link = get_field('ap_link');
                if($link['title'] != ""){
            ?>
            <a href="<?php echo $link['url'] ?>" class="btn__red" <?php echo $link['target'] ? 'target="_blank"' : ''; ?>>
                <?php echo $link['title'] ?>
            </a>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<!-- PHONE ADD SECTION ENDS -->
