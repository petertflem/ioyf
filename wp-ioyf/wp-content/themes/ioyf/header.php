<html>
  <head>
    <meta charset="utf-8" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="<?php echo ROOT; ?>/assets/css/vendor/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ROOT; ?>/assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ROOT; ?>/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ROOT; ?>/assets/css/slideout.css" rel="stylesheet" type="text/css" />
    
    <?php wp_head(); ?>
  </head>
  <body>
    <nav id="menu">
      <!--<div id="menu-toggle" class="menu-toggle"></div>-->
      <div class="menu">
        <?php wp_nav_menu(array(
            'theme_location' => 'header-nav-menu',
            'menu_class' => 'header-navigation'
          )); 
        ?>
        <img src="<?php echo ROOT; ?>/assets/images/facebook-icon.png" alt="facebook-ikon" class="icon" />
        <img src="<?php echo ROOT; ?>/assets/images/instagram-icon.png" alt="instagram-ikon" class="icon" />
        <img src="<?php echo ROOT; ?>/assets/images/oks-logo.png" alt="oks-logo" />
      </div>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
    </nav>
    <div class="main-wrapper" id="content" style="background-color: white;">
      <div class="menu-toggle"></div>