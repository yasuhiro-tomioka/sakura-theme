<?php get_header(); ?>
<!-- the_postは書いておくべき。投稿ページを読み込むときに必要な関数 -->
<?php the_post(); ?>
<div class="main-content">
    <div><?php the_post_thumbnail('category-thumb'); ?></div>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>


</div>

<?php get_footer(); ?>