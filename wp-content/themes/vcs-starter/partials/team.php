<!-- TEAM SECTION STARTS -->
<section>
    <div class="container flex-container">
        <div class="container heading__dark">
            <h2><?php the_field('team_heading'); ?></h2>
            <p><?php the_field('team_description'); ?></p>
        </div>
    </div>
    <div class="container flex-container center team">
        <?php
        if(have_rows('team_members')):
            while(have_rows('team_members')):
                the_row();
                ?>
                <div class="team--item">
                    <div class="team--photo">
                        <?php
                            $image = get_sub_field('member_photo');
                        ?>
                        <img src="<?php echo $image['sizes']['portfolio_thumb'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>
                    <div class="team--content">
                        <h3><?php the_sub_field('name'); ?></h3>
                        <h4><?php the_sub_field('qualification'); ?></h4>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<!-- TEAM SECTION ENDS -->