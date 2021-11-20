<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_home() ? bloginfo('title') : wp_title('') ?></title>
   
    <link
      rel="preload"
      as="font"
      href="../fonts/Poppins-Bold.woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      as="font"
      href="../fonts/Poppins-Regular.woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      as="font"
      href="../fonts/Poppins-Light.woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      as="font"
      href="../fonts/Poppins-SemiBold.woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      as="font"
      href="../fonts/Poppins-ExtraLight.woff2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link rel="icon" href="./img/favicon.ico" />
    <?php wp_head(); ?>
   
    
  </head>
  <section class="top-header" style="background: url('http://localhost/utm_blog/wp-content/uploads/2021/11/top-header.jpg')">
      <h1><a href="<?php echo site_url('/') ?>">unleashed the masterpiece</a></h1>
  </section>
  <body class="body">
