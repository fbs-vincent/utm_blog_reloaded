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
          <div class="blog__contact grid-col-2">
            <div class="blog__contact__details">
              <h2>contact me</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                beatae facilis repellat, ducimus possimus voluptatum et
                accusantium ullam deserunt quod, eos nesciunt voluptas fugit
                nulla nisi cum numquam molestiae ipsum quibusdam pariatur,
                incidunt eligendi excepturi commodi! Sequi atque natus commodi?
              </p>
              <ul>
                <li>address <span>akshdhasdlk</span></li>
                <li>phone <span>(800) 362-9446</span></li>
                <li>email <span>contact@utm.com</span></li>
              </ul>
            </div>
            <div class="blog__contact__form">
              <h3>Send Message</h3>
          
              <?php echo do_shortcode('[contact-form-7 id="72" title="Contact"]') ?>
            </div>
          </div>
          <?php require_once( get_template_directory() . '/template/template-sidebar.php'); ?>
        </section>
      </div>
    </div>
<?php get_footer() ?>