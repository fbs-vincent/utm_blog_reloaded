<?php get_header() ?>
<div class="container">
      <div class="body__wrapper">
        <header>
          <nav class="navigation">
            <div class="burger-menu">
              <span></span>
            </div>
              <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                        ))
                    ?>
          </nav>
        </header>
        <section class="blog grid-col-2 grid-col-2__blog">
          <div class="blog__single">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog__single__header">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="blog__single__header__meta">
                <div class="blog__single__header__meta__author">by <?php the_author(); ?></div> -
                <div class="blog__single__header__meta__category"><?php the_category(); ?></div>
              </div>
            </div>
            <div class="blog__single__content">
            <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
              }
              ?>
              <?php the_content(); ?>
            </div>
            <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
          </div>
          <?php require_once( get_template_directory() . '/template/template-sidebar.php'); ?>
        </section>
      </div>
    </div>
<?php get_footer() ?>