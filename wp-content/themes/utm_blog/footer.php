<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <?php wp_footer(); ?>
   

   
<footer class="footer">
      <div class="container">
        <a class="footer__logo" href="<?php echo site_url('/') ?>">unleashed the masterpiece</a>
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
       
        <p>Unleashed the Masterpiece @ <?php echo get_the_date('Y') ?></p>
      </div>
    </footer>
   


    
<?php if (is_user_logged_in()) {
   global $template;
   echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';
  
}?>

  </body>
</html>
