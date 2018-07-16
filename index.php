<?php get_header(); ?>


<!-- start banner Area -->
<section class="banner-area relative blog-home-banner" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Dude You’re Getting
          a Telescope
        </h1>
        <p class="text-white">
          There is a moment in the life of any aspiring astronomer that it is time to buy that first
        </p>
        <a href="blog-single.html" class="primary-btn">View More</a>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start top-category-widget Area -->
<section class="top-category-widget-area pt-90 pb-90 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="single-cat-widget">
          <div class="content relative">
            <div class="overlay overlay-bg"></div>
            <a href="#" target="_blank">
              <div class="thumb">
                <img class="content-image img-fluid d-block mx-auto" src="<?php echo P_IMG_DIR ?>blog/cat-widget1.jpg" alt="">
              </div>
              <div class="content-details">
                <h4 class="content-title mx-auto text-uppercase">Social life</h4>
                <span></span>
                <p>Enjoy your social life together</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-cat-widget">
          <div class="content relative">
            <div class="overlay overlay-bg"></div>
            <a href="#" target="_blank">
              <div class="thumb">
                <img class="content-image img-fluid d-block mx-auto" src="<?php echo P_IMG_DIR ?>blog/cat-widget2.jpg" alt="">
              </div>
              <div class="content-details">
                <h4 class="content-title mx-auto text-uppercase">Politics</h4>
                <span></span>
                <p>Be a part of politics</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-cat-widget">
          <div class="content relative">
            <div class="overlay overlay-bg"></div>
            <a href="#" target="_blank">
              <div class="thumb">
                <img class="content-image img-fluid d-block mx-auto" src="<?php echo P_IMG_DIR ?>blog/cat-widget3.jpg" alt="">
              </div>
              <div class="content-details">
                <h4 class="content-title mx-auto text-uppercase">Food</h4>
                <span></span>
                <p>Let the food be finished</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End top-category-widget Area -->

<!-- Start post-content Area -->
<section class="post-content-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
          <?php if ( have_posts()): ?>
              <?php while ( have_posts()): the_post();?>

              <div class="single-post row">
                <div class="col-lg-3  col-md-3 meta-details">
                  <ul class="tags">
                    <?php the_category(', '); ?>
                  </ul>
                  <div class="user-details row">
                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo get_the_author(); ?></a> <span class="lnr lnr-user"></span></p>
                    <p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo get_the_date(); ?></a> <span class="lnr
                    lnr-calendar-full"></span></p>
                    <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
                    <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
                  </div>
                </div>
                <div class="col-lg-9 col-md-9 ">
                  <div class="feature-img">
                      <?php the_post_thumbnail(); ?>
<!--                    <img class="img-fluid" src="" alt="images">-->
                  </div>
                  <a class="posts-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                  <p class="excert">
                    <?php echo get_field('description'); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="primary-btn">View More</a>
                </div>
              </div>

            <?php endwhile; ?>
          <?php endif; ?>

        <nav class="blog-pagination justify-content-center d-flex">
            <?php the_posts_pagination(array(
              'show_all'     => false, // показаны все страницы участвующие в пагинации
              'end_size'     => 2,     // количество страниц на концах
              'mid_size'     => 2,     // количество страниц вокруг текущей
              'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
              'prev_text'    => __('<span class="lnr lnr-chevron-left"></span>'),
              'next_text'    => __('<span class="lnr lnr-chevron-right"></span>'),
              'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
              'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
              'screen_reader_text' => __( ' ' ),
            )); ?>
          <ul class="pagination">
            <li class="page-item">
              <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
              </a>
            </li>
            <li class="page-item"><a href="#" class="page-link">01</a></li>
            <li class="page-item active"><a href="#" class="page-link">02</a></li>
            <li class="page-item"><a href="#" class="page-link">03</a></li>
            <li class="page-item"><a href="#" class="page-link">04</a></li>
            <li class="page-item"><a href="#" class="page-link">09</a></li>
            <li class="page-item">
              <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<!-- End post-content Area -->


<?php get_footer(); ?>
