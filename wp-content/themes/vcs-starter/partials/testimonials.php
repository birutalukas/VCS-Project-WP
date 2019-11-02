<!-- TESTIMONIALS STARTS -->
<section class="container quotes">
    <div class="container heading__dark center">
        <h2><?php the_field('t_section_heading'); ?></h2>
        <p><?php the_field('t_section_description'); ?></p>
    </div>
    <div class="container flex-container center">
        <?php 
        if(have_rows('t_testimonial')):
            while(have_rows('t_testimonial')):
                the_row();
                ?>
                <div class="quotes--item">
                    <h3><?php the_sub_field('name'); ?></h3>
                    <h4><?php the_sub_field('profession'); ?></h4>
                    <p><?php the_sub_field('testimonial'); ?></p>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<!-- TESTIMONIALS ENDS -->