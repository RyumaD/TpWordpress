<?php 
/*
    Template Name: accueil template
*/

get_header();
?>

    <div id="accueil-page">

            <?php

                while(have_posts()){

                    the_post();

                    $title = get_the_title();
                    $content = get_the_content();

                    $article_posts = new WP_Query(array(
                        "cat" => get_option("accueil_category"),
                        "order" => "ASC",
                        "orderby" => "date"
                    ));

                    ?>
                    
                    <h1 class="accueil-title"> <?= $title ?> </h1>

                    <div class="accueil-content">
                        <?= apply_filters("the_content", $content) ?>

                    </div>   
                    <?php
                }
            ?>
    </div>


<?php
get_footer();