<!-- MAIN COVER STARTS -->
<section id="home" class="hero">
    <h1><?php the_field('h_heading'); ?></h1>
    <?php
        $link = get_field('h_link');
        if($link['title'] != ""){
    ?>
    <a class="btn__red" href="<?php echo $link['url'] ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?>>
        <?php echo $link['title'] ?>
    </a>
    <?php
        }
    ?>
</section> 
<!-- MAIN COVER ENDS -->