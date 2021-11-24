<?php get_header() ?>
<div class="container">
      <div class="body__wrapper">
        <header>
          <nav class="navigation">
            <div class="burger-menu">
              <span></span>
            </div>
            <div class="menu-top-bar-container">
            <ul>
                <li><a href="<?php echo site_url('/') ?>">home</a></li>
                <?php 
                $categories = get_categories();
                foreach ($categories as $category) {
                  $site_url = site_url('category/'.$category->slug.'');
                  // echo '<li><a href="../category/'.$category->slug.'">'.$category->name.'</a></li>';
                  echo '<li><a href="'.$site_url.'">'.$category->name.'</a></li>';
                };
                ?>
                <li><a href="<?php echo site_url('/contact') ?>">contact</a></li>
              </ul>
            </div>
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
          <?php get_sidebar(); ?>
        </section>
      </div>
    </div>
<?php get_footer() ?>