<!-- SERVICES SECTION STARTS -->
<section id="services" class="container flex-container column"> 
    <div class="flex-container">
    <?php 
        if(have_rows('s_service')):
            while(have_rows('s_service')):
                the_row();
                ?>
                <div class="services--item">
                    <div>                  
                        <i class="<?php the_sub_field('icon'); ?> fa-fw"></i>
                    </div>
                    <h3><?php the_sub_field('heading'); ?></h3>
                    <p><?php the_sub_field('description'); ?></p>
                </div>
                <?php
            endwhile;
        endif;
        ?>        
    </div>
    <div class="flex-container center">
    <?php
        $link = get_field('s_link');
        if($link['title'] != ""){
        ?>
        <a href="<?php echo $link['url'] ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="btn__red">
            <?php echo $link['title'] ?>
        </a>
        <?php
        }
    ?>
        
    </div>
</section>
<!-- SERVICES SECTIONS ENDS -->