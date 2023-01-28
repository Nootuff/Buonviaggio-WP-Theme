<!--<!DOCTYPE html>
<html>
    
    
    <head>
    <meta charset="utf-8">
  <title>Buonviaggio</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
       

    </head>
    <body>-->

<?
get_header();
//This is a wordpress function that looks for a a header.php file in the root of your theme file.

//get_template_part('template-parts/banner', 'title');
//Another wordpress function. It pulls in banner-title, note the way the title is pulled in, you can learn more about this function in the wordpress docs.
?>

<main>
    <section>
      
    <?php

/*if (have_posts()) { //If there are posts in the blog database...
  while (have_posts()) { //While you still have posts in the database...

    the_post(); //WP function, pulls each individual post's data from the loop.

    get_template_part('template-parts/content', 'exerpt'); //the first argument is the 'slug', this line of code takes the html template from the content-exerpt file.

  }
  //b2W_pagination(); //This makes pagination appear at the end of the posts list
} else {
  get_template_part('template-parts/content', 'none');
}*/

?>

    </section>
</main>

<?
get_footer();