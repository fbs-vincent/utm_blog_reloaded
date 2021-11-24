<?php get_header() ?>

<div class="container">
      <div class="body__wrapper">
        <header>
          <nav class="navigation">
            <div class="burger-menu" id="burgerBtn">
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
          
     
            
         
          
      

          <div class="swiper">
            <div class="swiper-wrapper">
           
               
            <?php
           while(have_posts()) : the_post();
          $slides="";
          // $slides = get_field('slider_list', get_the_ID()); 
          $slides = get_field('slider_list');
          ?>
          <?php      foreach($slides as $slide) :
                  // print_r($slide) ; 
                  
                  $category_detail = get_the_category($slide->ID);
               
                  foreach($category_detail as $cd) {
                    $cd_slug = $cd->slug;
                  };   ?>
               
              <div
                class="swiper-slide"
                style="background-image: url('<?php echo get_the_post_thumbnail_url($slide) ?>')"
              >
                <div class="swiper-slide__wrapper">
                  <h2><a href="<?php the_permalink($slide) ?>"><?php echo $slide->post_name ?></a></h2>
                  <a href="<?php echo site_url('category/'.$cd_slug.'') ?>"><?php echo get_the_category($slide->ID)[0]->name; ?></a>
                 
                </div>
              </div>
           

              <?php     endforeach;
           endwhile;
                     ?>

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
            <?php 
           
            $featuredPost = new WP_Query( array(
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
                  the_post_thumbnail('utmblog_thumb');
              }
              ?>
                </figure>

                <article class="card__content">
                  <div class="card__header">

                      <?php the_category() ?>
                    
                  
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                  </div>

                  <div class="card__body">
                  <?php echo wp_trim_words(get_the_content(), 10) ?>
                  </div>

                  <a href="<?php the_permalink() ?>" class="card__link font--bold">View Post</a>
                </article>
              </div>
              <?php endwhile;
              
              else : 
	              esc_html_e( '<p>Sorry, no posts matched your criteria.</p>' );
            endif; 
            ?>
              
              
              
            </div>
            
          </div>
    <?php get_sidebar(); ?>
        
        </section>
      </div>
    </div>
<?php get_footer(); ?>