<header class="banner">
  <div class="container-fluid">
   
    <div class="row">
    <nav class="navbar navbar-default" role="navigation"> 
        <!-- Brand and toggle get grouped for better mobile display --> 
          <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
            </button> 
            <a class="navbar-brand" href="#">
              <?php if (has_header_image()): ?>
        <img src="<?php header_image(); ?>" height="auto" width="30px" alt="" />
    <?php else: ?>
      <?php bloginfo('name'); ?>
    <?php endif; ?>
            </a> 
          </div> 
          <!-- Collect the nav links, forms, and other content for toggling --> 
          <div class="collapse navbar-collapse navbar-ex1-collapse"> 
            <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
          </div>
        </nav>
    </div>
 
  </div>
</header>
