<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Fenix|Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <!--/google fonts-->
    <!-- font awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- /font awesome -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="blogtitle"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
      <div class="description"><?php bloginfo('description'); ?></div>
      <div id="navbox">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>">home</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 79)); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.navbar-inner -->
      </div><!--/.navbar navbar-inverse navbar-fixed-top" -->
    </div><!--/.navbox-->
