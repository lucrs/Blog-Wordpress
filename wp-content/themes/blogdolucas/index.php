<?php
    get_header('header');

?>
<main>
    <div class="container">
        <div class="row">
            <div class="card col-md-9">
                <?php



?>
    <?php if(have_posts()){ ?>

            <?php
            while(have_posts()):the_post(); ?>
    <div class="w3-container ">
            <div class="w3-panel w3-card">
                <?php
                $categoria = get_the_category();
                $category = $categoria[0]->cat_name;
                echo '<h2 id="title-category">';echo $category; echo '</h2>';
                ?>

               <?php  get_template_part('adicionais');
                the_post_thumbnail('medium');
                the_content();
      ?>
        </div>
    </div>
                <?php
            endwhile;;
        ?>
    <?php    } ?>

            </div>

                <?php get_sidebar(); ?>

        </div>
        </div>



</main>

<?php get_footer('footer'); ?>
