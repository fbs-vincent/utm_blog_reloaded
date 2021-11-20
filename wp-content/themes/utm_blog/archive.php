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
        
       
          <div class="blog__archive">
     
            <div class="blog__archive__header">
         
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
            </div>
           
            <div class="blog__archive__posts grid-col-2">
           
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
                     
               
                    <h2><?php the_title() ?></h2>
                  </div>

                  <div class="card__body">
                  <?php echo wp_trim_words(get_the_content(), 10) ?>
                  </div>

                  <a href="<?php the_permalink(); ?>" class="card__link font--bold">View Post</a>
                </article>
              </div>
            
            </div>
           
          </div>
     
             <div class="blog__sidebar">
          <?php get_sidebar() ?>
          </div>
        </section>
      </div>
    </div>



<?php get_footer() ?>
