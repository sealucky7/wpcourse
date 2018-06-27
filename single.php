<?php get_header(); ?>

<!--////////////////////////////////////Container-->
<section id="container">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="<?php home_url(); ?>">Home</a></li>
                <li><a href="<?php the_permalink(); ?>">About</a></li>
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
                        <img src="<?php the_post_thumbnail('full') ?> "/>
                        <div class="excerpt">
                            <?php the_content(); ?>
                        <blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
                        <h2>Heading 1</h2>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor sit amet.</p>
                        <h2>Heading 2</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo.</p>
                        <p><code>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</code></p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

