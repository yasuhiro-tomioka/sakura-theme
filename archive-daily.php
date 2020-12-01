<?php get_header(); ?>

<div class="main-content">
    <h2>日報一覧</h2>
    <div class="card-box">
        <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
    
                    <div class="card">
                        
                        <h2 class="card__title"><?php the_title(); ?></h2>
                        
                        </div>
                    </div>
    
                </a>
                <?php endwhile; ?>
            <?php else : ?>
                <p>投稿ありません。</p>
    
            <?php endif; ?>


    </div>

</div>




<?php get_footer(); ?>