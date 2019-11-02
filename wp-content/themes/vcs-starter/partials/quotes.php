<!-- QUOTES STARTS -->
<section class="gradient__red">
    <div class="container heading">
        <i class=" <?php the_field('q_icon'); ?> dark "></i>       
    </div>
    <div class="container owl-carousel owl-theme">
    <?php 
        if(have_rows('q_quotes')):
            while(have_rows('q_quotes')):
                the_row();
                ?>
                <div>
                    <div class="flex-container__col heading__small center">
                        <h2><?php the_sub_field('quote'); ?></h2>
                        <h4><?php the_sub_field('name'); ?></h4>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<!-- QUOTES ENDS -->