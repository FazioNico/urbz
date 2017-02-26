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

<?php

  if(isset($_GET['page'])) {
    $include_page = $_GET['page'];
  } else {
    $include_page = "";
  }
  //print_r($include_page);
  
  // selection du layout en fonction du type de page
  switch($include_page) {
    
    // --------------------- collection overview
    case 'collection_overview':
?>
      <!-- Main col Left Block -->
      <section class="col m5">
        <?php require_once './template_parts/elements/blocks/workshop.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
      </section>

      <!-- Main col right Block -->
      <section class="col m7">
        <?php require_once './template_parts/layout/main-col-right.php';?>
      </section>
<?php
    break;
    
    // --------------------- collection detail
    case 'collection':
?>
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
<?php
    break;
    
    // --------------------- people
    case 'people':
?>
      <!-- TODO -->
<?php
    break;
    
    // --------------------- user detail
    case 'user':
?>
      <!-- TODO -->
<?php
    break;
    
    // --------------------- article detail
    case 'article':
?>
      <!-- TODO -->
<?php
    break;
    
    // --------------------- about 
    case 'about':
?>
      <!-- TODO -->
<?php
    break;
    
    // --------------------- search result page, topics page, tags page
    case 'search':
?>
      <!-- TODO -->
<?php
    break;
    
    // --------------------- accueil
    default:
?>
      <!-- Main col Left Block -->
      <section class="col m5">
        <?php require_once './template_parts/elements/blocks/accueil-teaser.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
      </section>

      <!-- Main col right Block -->
      <section class="col m7">
        <?php require_once './template_parts/layout/main-col-right.php';?>
      </section>
<?php
  }
?>

</main>

<!-- Aside Panel Block -->
<div class="side-panel">
  <div class="panel-header"><span class="title">Meanwhile</span></div>
  <div class="panel-container">
    <div id="feed" class="region-feed">
    </div>
  </div>
</div>
