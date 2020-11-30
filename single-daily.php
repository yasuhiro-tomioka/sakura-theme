<?php 
/* 
Template Name: 日報
*/ 
?>


<?php 
get_header();
the_post();
?>

<br>
<br>
<br>
<br>
<br>

<?php the_post_thumbnail(); ?>
<h2>これは、日報用PHPです。</h2>
<!-- the_field('フィールド名')を入れる -->
<p><?php the_field('day')?></p>
<p><?php the_field('content')?></p>
<p><?php the_field('img')?></p>
<img src="<?php the_field('img')?>" alt="">





<?php get_footer(); ?>