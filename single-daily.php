<?php 
/* 
Template Name: 日報
*/ 
?>


<?php 
get_header();
the_post();
?>

<div class="main-content">
    <div class="daily">

    <img class="daily__img" src="<?php the_field('img')?>" alt="">
    <h2>これは、日報用PHPです。</h2>
    <!-- the_field('フィールド名')を入れる -->
    <p><?php the_field('day')?></p>
    <p><?php the_field('content')?></p>
    <!-- <p><?php the_field('img')?></p> -->

    </div>

</div>






<?php get_footer(); ?>