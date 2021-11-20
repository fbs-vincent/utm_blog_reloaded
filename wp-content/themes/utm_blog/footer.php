<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <?php wp_footer(); ?>
   

   
<footer class="footer">
      <div class="container">
        <a class="footer__logo" href="<?php echo site_url('/') ?>">unleashed the masterpiece</a>
     
        <?php
	        	wp_nav_menu(
	            array(
		        'theme_location' => 'footer_menu',
	          )
          );
	?>
        <p>Unleashed the Masterpiece @ <?php echo get_the_date('Y') ?></p>
      </div>
    </footer>
   


    
<?php if (is_user_logged_in()) {
   global $template;
   echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';
  
}?>

  </body>
</html>
