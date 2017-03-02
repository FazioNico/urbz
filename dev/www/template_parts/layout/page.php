<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   20-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 02-03-2017
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
    <section>
      <div class="row">
        <?php
        if($include_page == 'collection') {
          require './template_parts/elements/blocks/full-collection.php';
        }
        else {
          require './template_parts/elements/blocks/full-article.php';
        }
        ?>
      </div>
      <div class="row">
        <div class="col m6">
          <?php require './template_parts/elements/blocks/img-modal.php';?>
          <?php require './template_parts/elements/blocks/img-legende.php';?>
        </div>
        <div class="col m6">
          <!-- Block text simple -->
          <?php require './template_parts/elements/blocks/simple-text.php';?>
          <?php require './template_parts/elements/blocks/simple-text.php';?>
          <?php require './template_parts/elements/blocks/google-map.php';?>
        </div>
        <div class="col m12">
          <?php require './template_parts/elements/blocks/img-modal.php';?>
        </div>
      </div>
    </section>

    <div id="related" class="row">
        <section class="col m6">
          <h2>Articles of this project</h2>
          <?php require './template_parts/elements/blocks/small-article-post.php';?>
          <?php require './template_parts/elements/blocks/small-article-post.php';?>
          <?php require './template_parts/elements/blocks/small-article-post.php';?>
        </section>
        <section class="col m6">
          <h2>Information</h2>
          <?php require './template_parts/elements/blocks/simple-text.php';?>
        </section>
    </div>

    <section id="related-footer" class="row">
      <?php require './template_parts/elements/blocks/related-footer.php';?>
      <?php require './template_parts/elements/blocks/related-footer.php';?>
      <?php require './template_parts/elements/blocks/related-footer.php';?>
      <?php require './template_parts/elements/blocks/related-footer.php';?>

    </section>

<?php
    break;

    //----------------------2 columns
    // ------------------------------------- accueil
    // ------------------------------------- collection overview
    default:
?>
      <!-- Main col Left Block -->
      <div class="col m5">
        <?php
          if($include_page == 'collection-overview') {
            require_once './template_parts/elements/blocks/accueil-teaser.php';
          } else {
            require_once './template_parts/elements/blocks/workshop.php';
          }
        ?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
        <?php require './template_parts/elements/blocks/small-collection.php';?>
      </div>

      <!-- Main col right Block -->
      <div class="col m7">
        <?php require './template_parts/elements/blocks/large-article-post.php';?>
        <?php require './template_parts/elements/blocks/small-article-post.php';?>
        <?php require './template_parts/elements/blocks/small-article-post.php';?>
        <?php require './template_parts/elements/blocks/medium-article-post.php';?>
        <?php require './template_parts/elements/blocks/small-article-post.php';?>
        <?php require './template_parts/elements/blocks/colored-article-post.php';?>
        <?php require './template_parts/elements/blocks/small-pdf-post.php';?>
      </div>
<?php
  }
?>

</main>

<!-- Aside Panel Block -->
<aside class="side-panel">
  <div class="panel-header"><span class="title">Meanwhile</span></div>
  <div class="panel-container">
    <div id="feed" class="region-feed">
    </div>
  </div>
</aside>
