<?php 
/* 
Template Name: 会社概要 
*/ 
?>

<?php get_header(); ?>
<!-- the_postは書いておくべき。投稿ページを読み込むときに必要な関数 -->
<?php the_post(); ?>
<div><?php the_post_thumbnail('category-thumb'); ?></div>
<h1><?php the_title(); ?></h1>
<h2>会社概要です！</h2>
<p><?php the_content(); ?></p>
<?php get_footer(); ?>