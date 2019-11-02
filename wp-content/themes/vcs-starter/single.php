<?php get_header();
get_template_part('partials/nav_posts');

if(have_posts()):
    while(have_posts()):
        the_post();
        ?>
        <!-- HERO
        ================================================== -->
        <section>
            <!-- Cover -->
            <div class="hero--post" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
                <!-- Post Title -->
                <div class="container">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <h3>
                        <?php foreach(get_the_category() as $category) { echo $category->name;} ?>
                    </h3>
                </div>
            </div>
        </section>

        <!-- PAGES
        ================================================== -->
        <section class="container__small">
            <div>
                <h3>About The Project</h3>
            </div>
            <div class="flex-container">
                <div class="container--post">
                    <?php the_content(); ?>
                </div>         
                <aside>
                    <h3>All Categories</h3>
                <?php
                $categories = get_categories();
                // dump($categories);
                foreach($categories as $category) {
                    echo '<div><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                }
                ?>     
                </aside>
            </div>
        </section>
        <section class="container">
            <div>
                <h3>More Our Works</h3>
            </div>
            <div class="random-posts">
            <?php
                global $post;
                $args = array( 'posts_per_page' => 5, 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach ( $rand_posts as $post ) : 
                setup_postdata( $post ); ?>
                <div class="random-posts--item">
                    <div class="random-posts--photo">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="web design">
                        </a>
                    </div>
                    <div class="random-posts--content">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <h6 class="dark"><?php foreach(get_the_category() as $category) { echo $category->name;}?></h6>
                    </div>
                </div>
                <?php endforeach; 
                wp_reset_postdata(); ?>
            </div>
        </section>
        <?php
    endwhile;
endif;
?>
<?php get_footer(); ?>