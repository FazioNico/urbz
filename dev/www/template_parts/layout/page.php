<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   20-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 22-02-2017
# @===================================
#
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

    <!-- Main col Left Block -->
    <?php require_once './template_parts/layout/main-col-left.php';?>

    <!-- Main col right Block -->
    <?php require_once './template_parts/layout/main-col-right.php';?>

  </main>

  <!-- Aside Panel Block -->
  <?php require_once './template_parts/aside/side-panel.php';?>
