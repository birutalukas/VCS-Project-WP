<!-- STATISTICS SECTION STARTS -->
<section class="dark">
    <div class="container flex-container center">
        <?php 
        if(have_rows('stats')):
            while(have_rows('stats')):
                the_row();
                ?>
                <div class="statistics--item">
                    <?php the_sub_field('icon'); ?>					
                    <h3><?php the_sub_field('counter'); ?></h3>
                    <p><?php the_sub_field('done'); ?></p>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<!-- STATISTICS SECTION ENDS-->