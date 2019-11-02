<?php get_header(); ?>
<div>
    <?php get_template_part('partials/nav_posts'); 
    ?>
</div>
<section class="container">
    <h1>
        <?php foreach(get_the_category() as $category) { echo $category->name;}?>
    </h1>
</section>
<div class="container">
    <div class="flex-container">
        <div class="flex-container container--post">
            <?php
            if(have_posts()):
                while(have_posts()):
                    the_post();
                    ?>
                    <div class="category-post">
                        <div>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url('portfolio_thumb') ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div>
                            <h4 class="pt-5">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                        </div>
                        <div>
                            <?php the_excerpt(); ?> <!-- Automatiskai generuoja sutrumpinta teksta -->
                        </div>
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            _e('Read more', 'vcs-starter');
                            ?>
                        </a>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <aside>
            <h3>All Categories</h3>
                <?php
                $categories = get_categories();
                // dump($categories);
                foreach($categories as $category) {
                    echo'<div class="cat-nav">
                            <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
                        </div>';
                }
                ?>  
        </aside>
    </div>
</div>

<?php get_footer(); ?>