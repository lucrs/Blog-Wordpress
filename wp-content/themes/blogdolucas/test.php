
<?php get_header(); ?>

<div class="w3-container">
    <h2><?php single_post_title(); ?></h2>

    <div class="w3-card-4" style="width:50%">
        <?php
        if(have_posts()):the_post();
            the_post_thumbnail('medium');
            the_content();
        endif;;
        ?>
    </div>
</div>
</div>







<?php get_footer();?>
