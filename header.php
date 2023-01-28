<?php
/**
 * This is The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buonviaggio
 * @since 1.0
 */
?>

<?php

$blog_info = get_bloginfo('name'); //This is what a php variable looks like. 
//get_bloginfo() is s wp function, here it is getting the name of this blog and storing it in this variable.
$description = get_bloginfo('description', 'display');
//Get the description of the blog and filter by display.

?>

<!DOCTYPE html>
<html <?php /*language_attributes();*/?>><!--Will detect the language of the person viewing your site-->

<head>
  <meta charset="utf-8">
  <title>Buonviaggio</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <!--
  None of this html stuff needed, all being handled by the function up above.  
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font/flaticon.css">
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">-->
</head>

<body <?php body_class(); ?>>

  <nav id="top-navigation">


    <?php
    if ($blog_info) {
      ?>

      <h1 class="tag-line sub-title">
        <?php echo esc_html($blog_info)
          ?>
      </h1>
    <?php //contains the closing bracket within php
    }
    ?>

    <?php
    if ($description) {
      ?>
      <h3>
        <?php echo esc_html($description) ?>
      </h3>
    <?php 
    }
    ?>

  </nav>