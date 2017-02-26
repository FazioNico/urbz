<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   26-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 26-02-2017
# @Templates SCSS file -> ./dev/src/sass/layout/pages.scss
?>

<header class="header-front">
  <div class="primary-nav-trigger">
    <span class="menu-text"></span><span class="menu-icon"></span>
  </div>
  <a href="http://future.urbz.net/" class="brand-logo"></a>
  <h1 class="page-title hide-on-small-only">User-generated Cities</h1>
</header>

<!-- Navigation Menu Block -->
<?php require_once './template_parts/navigation/main-nav.php';?>

<main class="main-content row">

  <!-- Main col Full Block (header)-->
  <?php require_once './template_parts/layout/main-col-full.php';?>

  <div class="row">
    <!-- Import Block: main-col-half-size -->
    <?php //require './template_parts/layout/main-col-half-size.php';?>
      <!-- Import Block: col-half-right -->
    <?php //require './template_parts/layout/main-col-half-size.php';?>
  </div>

  <div class="row">
    <!-- Import Block: Articles of this project -->
    <?php //require './template_parts/layout/main-col-half-size.php';?>
    <!-- Import Block: Information -->
    <?php //require './template_parts/layout/main-col-half-size.php';?>
  </div>

</main>

<!-- Aside Panel Block -->
<?php require_once './template_parts/aside/side-panel.php';?>
