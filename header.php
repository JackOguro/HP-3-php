<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name');?></title>
  <meta name="description" content="<?php bloginfo('description');?>"/>
  <meta name="keywords" content="IT,プログラミング,コミュニティ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="プログラミング教材「WithCode」">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://withcode-plus.tech">
  <!-- <meta property="og:image" content="img/logo.png"> -->
  <meta property="og:description" content="「人生をコードと共に」というビジョンを達成するべく、皆さんのプログラミング学習をサポートします。">
  <meta property="og:site_name" content="プログラミング教材">
  <!-- <link rel="icon" href="favicon.ico"> -->
  <!-- <link rel="apple-touch-icon" sizes="180×180" href="img/logo.png"> -->
  <!-- google fontsの読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
  <!-- Slickファイルの読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <!-- cssの読み込み -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/common.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/photos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/contact.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/blog.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/single.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
</head>
<body>
  <!-- ヘッダー -->
  <header id="header">
    <nav>
    <?php
      $args = array(
        'menu' => 'menu',
        'menu_Class' => '',
        'containder' => false,
      );
        wp_nav_menu($args);
      ?>
    </nav>
  </header>