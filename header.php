<?php ini_set('display_errors', 0); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="キーワードでサイトを説明">
    <meta name="description" content="どんなサイトか短い文章で説明">
    <title>サイトのタイトル</title>

    <link rel="shortcut icon" href="favicon.ico">
    <!-- <link rel="stylesheet" type="text/css" media="screen and ( min-width:769px )" href="<?php echo get_template_directory_uri(); ?>/css/style_pc.css"> -->
	<!-- <link rel="stylesheet" type="text/css" media="screen and ( max-width:768px )" href="<?php echo get_template_directory_uri(); ?>/css/style_sp.css"> -->

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- jquery & iScroll -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script> -->
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.fadethis.min.js"></script> -->

    <!-- <script type="text/javascript" src="js/common.js"></script> -->
    <link rel="stylesheet" type="text/css" media="screen and ( min-width:769px )" href="./css/style_pc.css">
    <link rel="stylesheet" type="text/css" media="screen and ( max-width:768px )" href="./css/style_sp.css">
    <?php wp_head(); ?>
</head>

    <body class="drawer drawer--left">
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li><a class="drawer-brand" href="#">Brand</a></li>
        <li><a class="drawer-menu-item" href="#">Nav1</a></li>
        <li><a class="drawer-menu-item" href="#">Nav2</a></li>
      </ul>
    </nav>
  </header>
  <main role="main">
    <!-- Page content -->
