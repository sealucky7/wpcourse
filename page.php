<?php get_header(); ?>

<!-- start breadcrumbs Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?php the_title(); ?>
                </h1>
                <p class="text-white link-nav">
                    <a href="<?php echo home_url(); ?>">Home </a>
                    <span class="lnr lnr-arrow-right"></span>  <span> <?php the_title(); ?></span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumbs Area -->

<?php if ( have_posts()): ?>
    <?php while ( have_posts()): the_post();?>

        <?php the_content(); ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
