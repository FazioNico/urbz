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
<nav role="navigation" class="primary-nav" >
  <div class="nav-wrapper">
      <?php require_once './template_parts/navigation/menu.php';?>
      <?php require_once './template_parts/elements/form/header-search.php';?>
  </div>
</nav>

<main class="main-content row">

  <!-- Main col Left Block -->
  <section class="col m5">
    <?php require_once './template_parts/layout/main-col-left.php';?>
  </section>

  <!-- Main col right Block -->
  <section class="col m7">
    <?php require_once './template_parts/layout/main-col-right.php';?>
  </section>

</main>

<!-- Aside Panel Block -->
<div class="side-panel">
  <div class="panel-header"><span class="title">Meanwhile</span></div>
  <div class="panel-container">
    <div id="feed" class="region-feed">
    </div>
  </div>
</div>
