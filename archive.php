<?php get_header(); ?>

<div class="main-content">

    <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">

                <div class="post">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="post__img">
                    <div class="post__content">
                        <h2 class="post__title"><?php the_title(); ?></h2>
                        <?php echo "<p class='post__text'>" . get_the_excerpt() . "<p>" ; ?>
                        <a href="#"><?php the_tags(); ?></a><a href="#"><?php the_date(); ?></a>
                    </div>
                </div>

            </a>
            <?php endwhile; ?>
        <?php else : ?>
            <p>投稿ありません。</p>

        <?php endif; ?>

</div>




<?php get_footer(); ?>