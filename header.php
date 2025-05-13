<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
     <div class="toggle-container">
  <label class="switch">
    <input type="checkbox" id="darkModeToggle">
    <span class="slider"></span>
  </label>
</div>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <nav>
      <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
    </nav>
 


  </header>
