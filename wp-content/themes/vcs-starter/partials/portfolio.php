<!-- PORTFOLIO SECTION STARTS -->
<section id="portfolio" class="green">
    <div class="container">
        <!-- PORTFOLIO NAVIGATION STARTS -->
        <div class="container heading">
            <h2><?php the_field('p_section_heading'); ?></h2>
            <p><?php the_field('p_section_description'); ?></p>
        </div>
        <div class="container flex-container portfolio-nav">
            <button class="btn-portfolio btn-portfolio__active" data-category="all">all</button>
            <button class="btn-portfolio" data-category="web">web</button>
            <button class="btn-portfolio" data-category="photography">photography</button>
            <button class="btn-portfolio" data-category="design">graphic design</button>
        </div>
        <!-- PORTFOLIO NAVIGATION ENDS -->
    
        <!-- PORTFOLIO CONTENT STARTS -->
        <div class="flex-container portfolio hidden">
            <?php
            $params = [
                'cat' => get_field('p_category'),
                'posts_per_page' => get_field('p_post_limit')
            ];
            $result = new WP_QUERY($params);
            if($result->have_posts()):
                while($result->have_posts()):
                $result->the_post();
                ?>
                <div class="portfolio--item" data-category="<?php foreach(get_the_category() as $category) { echo $category->slug;}?>">
                    <div class="portfolio-photo">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('portfolio_thumb')?>" alt="web design">
                        </a>
                    </div>
                    <div class="portfolio-content">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <h5 class="dark"><?php foreach(get_the_category() as $category) { echo $category->name;}?></h5>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <!-- PORTFOLIO CONTENT ENDS -->

        <!-- PORTFOLIO EXPANDER STARTS -->
        <div class="flex-container center portfolio">
            <button id="expander" class="rotate">
                <i class="fas fa-arrow-alt-circle-down"></i>
            </button>
        </div>
        <!-- PORTFOLIO EXPANDER ENDS -->
    </div>
</section>
<!-- PORTFOLIO SECTION ENDS -->

