<?php 
/*
    Template Name: Category template
*/

get_header();
$posts = new WP_Query(array(
    "cat" => get_option("home_category"),
    "order" => "ASC",
    "orderby" => "date"
));
?>
    <div class="flex" id="cate">

        

<?php
get_footer();