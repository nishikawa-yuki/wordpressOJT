 <!DOCTYPE html>
  <html lang="<?php language_attributes(); ?>"> 

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", array(), '3.3.1');
    ?>
  <title>AmericanVillage</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="header">
    <div class="header-left">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" alt="logo">
      </div>
      <div class="header-right">
        <div class="menu-btn">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <?php wp_nav_menu(); ?>
          <!-- <ul class="nav">
            <li><a href="Menu01">Menu01</a></li>
            <li><a href="Menu02">Menu02</a></li>
            <li><a href="Menu03">Menu03</a></li>
            <li><a href="Menu04">Menu04</a></li>
          </ul> -->
      </div>
    </div>
  </header>