<?php namespace ProcessWire;

echo wireRenderFile("render/hero",
      [ 
          'enable' =>  true, // Enable Hero Content
          'height' => 70, // Height Hero Content
        // Intro
          'intro' =>  page()->title,
          'content' =>  page()->headline,
        // Bottom text and url
          'first_txt' => page()->ts['first_txt'], 
          'next_txt' => page()->ts['next_txt'], 
          'last_txt' => page()->ts['last_txt'], 
          'b_url' => 'https://processwire.com/',
        // Some Icons
          'icon' => 'github', // https://feathericons.com/
          'icon_url' => 'https://github.com/processwire'
      ]);?>

<div id='content-body'>

<section id='home-grid' class="container-fluid">

  <?php echo wireRenderFile("render/grid",
        [
          'enable_grid' =>  true,
          'item' => page()->opt['about_p'] // Render Grid from this page ( About Page )
        ]);?>

</section><!-- /#home-grid -->

<?php echo page('body');?>

</div><!-- /#content-body -->