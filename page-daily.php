<?php 
/* 
Template Name: 日報
*/ 
?>


<?php get_header(); ?>

<br>
<br>
<br>
<br>
<br>


<!-- the_field('フィールド名')を入れる -->
<p><?php the_field('day')?></p>
<p><?php the_field('content')?></p>
<p><?php the_field('img')?></p>
<img src="<?php the_field('img')?>" alt="">





<?php get_footer(); ?>