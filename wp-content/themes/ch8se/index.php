<?php
/**
 * The main template file.
 */

get_header(); ?>

<div class="content">
  <div class="carousel">
    <div><img src="http://www.ch8se.com/wp-content/uploads/2015/11/homeslider4.jpg"></div>
    <div><img src="http://www.ch8se.com/wp-content/uploads/2015/11/homeslider3.jpg"></div>
    <div><img src="http://www.ch8se.com/wp-content/uploads/2015/11/homeslider2.jpg"></div>
    <div><img src="http://www.ch8se.com/wp-content/uploads/2015/11/homeslider1.jpg"></div>
    <div><img src="http://www.ch8se.com/wp-content/uploads/2015/11/homeslider5.jpg"></div>
  </div>


  <div class="counter clearfix">
    <span class="trees">250</span>
    <span class="food">80</span>
    <span class="water">117</span>
  </div>

  <div class="block">
    <h1>Fashion Repurposed.</h1>

    <p>ch8se is the first fashion brand to say no to traditional advertising. Instead we plant trees, feed children and quench thirsts. The drive of our marketing is your good will. Today, with all the social media, it’s very simple, you help spread the word about us, and we don’t need to spend on ads. This way a single hoodie can plant as many as 93 trees, a t-shirt can provide 46 months of clean water, or feed a child for 20 days.</p>
  </div>

  <!-- <div class="graphic-video">
    <video src="<?php //echo get_template_directory_uri() ?>/video/ch8se-graphic.webm" autoplay loop></video>
  </div> -->
  
  <div class="graphic-slideshow">
    <img src="<?php echo get_template_directory_uri() ?>/img/trees-large.png" alt="">
    <img src="<?php echo get_template_directory_uri() ?>/img/food-large.png" alt="">
    <img src="<?php echo get_template_directory_uri() ?>/img/water-large.png" alt="">
  </div>

</div>
<div id="instafeed"></div>

<?php /*get_sidebar(); */?>
<?php get_footer(); ?>