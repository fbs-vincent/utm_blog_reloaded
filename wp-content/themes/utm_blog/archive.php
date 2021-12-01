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
        
       
          <div class="blog__archive">
       
            <div class="blog__archive__header">
            <?php
           
            $current_cat = get_the_category();
            $cat_ID = $current_cat[0]->cat_ID;
            $catHeader = new WP_Query( array(
                   
                     'posts_per_page' => 1,
                     'cat' => $cat_ID,  
                  
                ));
                ?>
             <?php if($catHeader->have_posts()) : while($catHeader->have_posts()) : $catHeader->the_post() ?>
              <h2>category post: <span><?php the_category() ?></span></h2>
              <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
              }
              ?>
           
              <div class="blog__archive__header__title">
                <h3>
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h3>
                <div class="blog__archive__header__title__meta">
                    <div class="blog__archive__header__title__meta__author">
                    by <?php the_author() ?> 
                    </div> -
                    <div class="blog__archive__header__title__meta__category">
                    <?php the_category() ?>
                    </div>
               

                
               
                </div>
              </div>
              <div class="blog__archive__header__content">
              <?php echo wp_trim_words(get_the_content(), 20) ?>
              </div>
              <a class="font--bold" href="<?php the_permalink() ?>">View Post</a>
              <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
            </div>
          
            <div class="blog__archive__posts grid-col-2">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                     
               
                    <h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 7 ); ?></a></h2>
                  </div>

                  <div class="card__body">
                  <?php echo wp_trim_words(get_the_content(), 10) ?>
                  </div>

                  <a href="<?php the_permalink(); ?>" class="card__link font--bold">View Post</a>
                </article>
              </div>
              <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
            

            </div>
            <div class="pagination t-center">
    <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        'format' => '?paged=%#%',
                        'prev_text' => __('Prev'),
                        'next_text' => __('Next '),
                        'current' => max( 1, get_query_var('paged') ),
                        // 'total' => wp_query()->max_num_pages
                        ));
                   ?>
            </div>


          </div>
          <?php get_sidebar(); ?>
        </section>
      </div>
    </div>



<?php get_footer() ?>
