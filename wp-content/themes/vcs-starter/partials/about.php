<!-- ABOUT STARTS -->
<section id="about">
    <div class="container flex-container center about">
        <div class="about--photo">
            <?php
                $image = get_field('a_image');
            ?>
            <img src="<?php echo $image['sizes']['about'] ?>" alt="<?php echo $image['alt'] ?>">
        </div>
        <div class="about--description">
            <h2><?php the_field('a_heading'); ?></h2>
            <?php the_field('a_description'); ?>
        </div>
    </div>
</section>
<!-- ABOUT ENDS -->
