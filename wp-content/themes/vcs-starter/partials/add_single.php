<!-- SINGLE PRODUCT SECTION STARTS -->
<section class="product green">
    <div class="container flex-container__small">
        <div class="product product--item">
            <?php
            $image = get_field('sp_image');
            ?>
            <img src="<?php echo $image['sizes']['phone'] ?>" alt="<?php echo $image['alt'] ?>">
        </div>
        <div class="product--description">
            <h2><?php the_field('sp_heading'); ?></h2>
            <h3><?php the_field('sp_sub_heading'); ?></h3>
            <div>
                <?php the_field('sp_description'); ?>
            </div>
        </div>
    </div>
</section>
<!-- SINGLE PRODUCT SECTION ENDS -->