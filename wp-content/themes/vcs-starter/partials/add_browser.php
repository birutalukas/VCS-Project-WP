<!-- BROWSER ADD SECTION STARTS -->
<section class="gradient__red" id="try-it">
    <div class="container heading">
        <h2><?php the_field('ab_heading'); ?></h2>
        <p><?php the_field('ab_description'); ?></p>
    </div>
    <div class="flex-container">
        <?php
            $image = get_field('ab_image');
        ?>
        <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>" class="browser-add">
    </div>
</section>
<!-- BROWSER ADD SECTION ENDS -->
