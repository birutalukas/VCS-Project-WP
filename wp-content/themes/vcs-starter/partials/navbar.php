<!-- BRAND AND NAVIGATION STARTS -->
<header>
    <div class="container flex-container nav-bar">
        <div class="logo">
            <a href="#home">
                <?php  
                $image = get_field('logo', 'option');
                ?>
                <img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        
        <!-- <nav> -->
        <?php 
            $menu_settings = [
                'menu_class' => '',
                'container' => 'nav',
                'theme_location' => 'primary-navigation',
                'walker' => new custom_navwalker()
            ];

        wp_nav_menu($menu_settings);
        ?>
        <!-- </nav> -->
        <div id="burger">	<!-- MOBILE NAVIGATION STARTS -->
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <div id="burger--menu">
                <?php 
                    $menu_settings = [
                        'menu_class' => '',
                        'container' => false,
                        'theme_location' => 'primary-navigation',
                        'walker' => new custom_navwalker()
                    ];

                wp_nav_menu($menu_settings);
                ?>
            </div>
        </div>	<!-- MOBILE NAVIGATION ENDS -->						
    </div>
</header>
<!-- BRAND AND NAVIGATION ENDS -->
