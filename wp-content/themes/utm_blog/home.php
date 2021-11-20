<?php get_header() ?>

<div class="container">
      <div class="body__wrapper">
        <header>
          <nav class="navigation">
            <div class="burger-menu" id="burgerBtn">
              <span></span>
            </div>
            <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                        ))
                    ?>
         
          </nav>
      
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php $featuredSlide = new WP_Query( array(
                     'post_type' => 'post',
                     'posts_per_page' => 3,  
                ));
                ?>
             <?php if($featuredSlide->have_posts()) : while($featuredSlide->have_posts()) : $featuredSlide->the_post() ?>
              <div
                class="swiper-slide"
                style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"
              >
                <div class="swiper-slide__wrapper">
                  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                  <?php the_category() ?>
                </div>
              </div>
              <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>       
            </div>  
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </header>
        <section class="blog grid-col-2 grid-col-2__blog">
          <div class="blog__featured">
            <div class="blog__featured__header">
              <h3><span>Featured Post</span></h3>
            </div>
            <div class="blog__featured__wrapper grid-col-2">
            <?php $featuredPost = new WP_Query( array(
                     'post_type' => 'post',
                     'posts_per_page' => 4, 
                    //  'meta_key' => 'Featured',
                    //  'meta_value' => 'Post',
                   
                ));
                ?>
                  <?php if($featuredPost->have_posts()) : while($featuredPost->have_posts()) : $featuredPost->the_post() ?>
              <div class="card__blog__featured">
                <figure>
                <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
              }
              ?>
                </figure>

                <article class="card__content">
                  <div class="card__header">

                      <?php the_category() ?>
                    
                  
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                  </div>

                  <div class="card__body">
                  <?php echo wp_trim_words(get_the_content(), 20) ?>
                  </div>

                  <a href="<?php the_permalink() ?>" class="card__link font--bold">View Post</a>
                </article>
              </div>
              <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
              
              
              
            </div>
          </div>
          <div class="blog__sidebar">
                <?php get_sidebar() ?>
          </div>
        
        </section>
      </div>
    </div>

<?php get_footer() ?>