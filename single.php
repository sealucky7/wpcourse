<?php get_header(); ?>

<!--////////////////////////////////////Container-->
<section id="container">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                <li><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <?php the_post(); ?>
                <article>
                    <div class="art-header">
                        <div class="entry-title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="info">By <a href="#">Danny</a> on April 14, 2015</div>
                    </div>
                    <div class="art-content">
                        <?php the_post_thumbnail('full') ?>
                        <div class="excerpt">
                            <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

