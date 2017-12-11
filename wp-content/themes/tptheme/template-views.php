<?php
/*
    Template Name: Accueil
*/

get_header();
global $post; 
        $args = array( 'post_type' =>'slider', 'numberposts' => -1, 'orderby' => 'ASC' ); 
        $slider = get_posts($args); ?> 
        <?php  
        if($slider) { ?> 
    
        <div id="slider"> 
            <?php 
        foreach($slider as $post) :   
            the_post_thumbnail();
            endforeach; ?> 
        <?php wp_reset_postdata(); ?> 
        </div><!--/slider nivoSlider--> 
    
        <?php } ?>	
<div class="flex">
    <div class="left-side">
        <div class="content">
            <?php 
            while( have_posts() ){ 
                the_post();
                the_title("<h1 class='cath1'>","</h1>");
                the_content("<p class='contenu>","<p>");
            }
            ?>
        </div>
    </div>
    <div class="right-side">
        <?php 
            dynamic_sidebar( "right_sidebar" ); 
        ?>
    </div>
</div>
    
<?php
get_footer();