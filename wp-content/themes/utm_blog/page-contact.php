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
          <div class="blog__contact grid-col-2">
            <div class="blog__contact__details">
              <h2>contact me</h2>
              <p>
              <?php the_field('paragraph'); ?>
              </p>
              <ul>
                <li>address <span><?php the_field('contact_address'); ?></span></li>
                <li>phone <span><?php the_field('contact_phone'); ?></span></li>
                <li>email <span><?php the_field('contact_email'); ?></span></li>
              </ul>
            </div>
            <div class="blog__contact__form">
              <h3>Send Message</h3>
          
              <?php echo do_shortcode('[contact-form-7 id="72" title="Contact"]') ?>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </section>
      </div>
    </div>
<?php get_footer() ?>