<?php get_header(); ?>

<!--////////////////////////////////////Container-->

<section id="container">
  <div class="wrap-container zerogrid">
<!--    <div class="crumbs">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="archive.html">Archive</a></li>
      </ul>
    </div>-->
    <div id="main-content">
      <div class="wrap-content">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <article>
              <div class="art-header">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              </div>
              <div class="art-content">
                <?php the_post_thumbnail('middle') ?>
             <!--   <img src="<?php /*echo IMG_DIR */?>/4.jpg" />-->
                <div class="info"><i class="fa fa-calendar"></i> <?php the_date(); ?> <i class="fa fa-comments"></i> 1 Comment <i
                    class="fa
                fa-tag"></i> Event, New</div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
              </div>
              <a class="button bt1" href="<?php the_permalink(); ?>">MORE</a>
            </article>
          <?php endwhile; ?>
       <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
