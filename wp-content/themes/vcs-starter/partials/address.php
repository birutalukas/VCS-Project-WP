<!-- ADDRESS SECTION STARTS -->
<section class="blue">
    <div class="container flex-container align__right">
        <div class="address-block">
            <h4><?php the_field('a_address'); ?></h4>
            <h4>
                <a href="mailto:<?php the_field('a_email'); ?>"><?php the_field('a_email'); ?></a>
            </h4>
            <h4>
                <a href="phone:<?php the_field('a_phone'); ?>"><?php the_field('a_phone'); ?></a>
            </h4>
        </div>
    </div>
</section>
<!-- ADDRESS SECTION ENDS -->

