<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   20-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 22-02-2017
# @===================================
#
# @Templates SCSS file -> ./dev/src/sass/layout/pages.scss

if(isset($_GET['page'])) {
  $title = $include_page = $_GET['page'];
} else {
  $include_page = "";
    $title = "User-generated Cities";
}
//print_r($include_page);
  
?>

<header class="header-front">
  <div class="primary-nav-trigger">
    <span class="menu-text"></span><span class="menu-icon"></span>
  </div>
  <a href="http://future.urbz.net/" class="brand-logo"></a>
  <h1 class="page-title hide-on-small-only"><?php echo $title ?></h1>
</header>

<!-- Navigation Menu Block -->
<nav role="navigation" class="primary-nav" >
  <div class="nav-wrapper">
      <?php require_once './template_parts/elements/blocks/menu.php';?>
      <?php require_once './template_parts/elements/blocks/header-search.php';?>
  </div>
</nav>

<main class="main-content row">

<?php
  
  // selection du layout en fonction du type de page
  switch($include_page) {
    
    //----------------------1 columns
    // ------------------------------------- collection detail
    // ------------------------------------- search result page, topics page, tags page
    // ------------------------------------- about
    // ------------------------------------- article detail
    // ------------------------------------- user detail
    // ------------------------------------- people
    case 'people':
    case 'user':
    case 'article':
    case 'about':
    case 'search':
    case 'collection':
?>
      <!-- Main col Full Block (header)-->
      <div class="row">
        <section class="col s12">
          <!-- TODO -->
        </section>
      </div>
      <div class="row">
        <!-- TODO -->
      </div>
      <div class="row">
        <!-- TODO -->
      </div>
<?php
    break;
    
    //----------------------2 columns
    // ------------------------------------- accueil
    // ------------------------------------- collection overview
    default:
?>
      <!-- Main col Left Block -->
      <section class="col m5">
        <?php 
          if($include_page == 'collection-overview') {
            require_once './template_parts/elements/blocks/workshop.php';
          } else {
            require_once './template_parts/elements/blocks/accueil-teaser.php';
          }
        ?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
      </section>

      <!-- Main col right Block -->
      <section class="col m7">
        <?php require './template_parts/elements/blocks/large-article-post.php';?>
        <?php require './template_parts/elements/blocks/small-article-post.php';?>
        <?php require './template_parts/elements/blocks/small-article-post.php';?>
        <?php require './template_parts/elements/blocks/medium-article-post.php';?>
        <?php require './template_parts/elements/blocks/small-article-post.php';?>
        <?php require './template_parts/elements/blocks/colored-article-post.php';?>
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
