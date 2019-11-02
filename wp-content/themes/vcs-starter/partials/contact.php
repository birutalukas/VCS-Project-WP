<!-- CONTACT US STARTS -->
<section id="contact"	class="gradient__red">
    <div class="container contact">
        <div class="container heading center">
            <h2><?php the_field('c_section_heading'); ?></h2>
            <p><?php the_field('c_section_description'); ?></p>
        </div>
        <form>
            <?php echo do_shortcode(get_field('c_form_shortcode')); ?>
        </form>
    </div>
</section>
<!-- CONTACT US ENDS -->
