<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   20-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 12-03-2017
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
    case 'search':
    ?>
      <section id="search">
        <div class="row">
          <?php require './template_parts/elements/blocks/header-search.php';?>
        </div>
        <div class="row">
          <?php require './template_parts/elements/blocks/count-search.php';?>
          <?php require './template_parts/elements/blocks/large-search.php';?>
          <?php require './template_parts/elements/blocks/large-search.php';?>
          <?php require './template_parts/elements/blocks/large-search.php';?>
          <?php require './template_parts/elements/blocks/large-search.php';?>
          <?php require './template_parts/elements/blocks/large-search.php';?>
        </div>
      </section>
    <?php
    break;

    case 'people':
    ?>
    <section>
      <div class="row">
        <?php require './template_parts/elements/blocks/header-people.php';?>
      </div>
      <div class="row">
        <!--  grid of people -->
        <div class="item-list--blazy item-list--blazy-column item-list">
          <ul class="blazy blazy--grid block-column block-count-55 small-block-column-1 medium-block-column-2 large-block-column-4 blazy--on" data-blazy="&quot;&quot;">
            <?php require './template_parts/elements/blocks/small-people.php';?>
            <?php require './template_parts/elements/blocks/small-people.php';?>
            <?php require './template_parts/elements/blocks/small-people.php';?>
            <?php require './template_parts/elements/blocks/small-people.php';?>
            <?php require './template_parts/elements/blocks/small-people.php';?>
            <?php require './template_parts/elements/blocks/small-people.php';?>
            <?php require './template_parts/elements/blocks/small-people.php';?>
            <?php require './template_parts/elements/blocks/small-people.php';?>
          </ul>
        </div>
      </div>
    </section>
    <?php
    break;

    case 'user':
    ?>
    <section id="people-detail">
      <div class="row">

        <?php require './template_parts/elements/blocks/header-poeple_detail.php';?>

        <div class="col s12 m6">
          <?php require './template_parts/elements/blocks/img-legende.php';?>
        </div>
        <div class="col s12 m6">
          <?php require './template_parts/elements/blocks/simple-text.php';?>
          <?php require './template_parts/elements/blocks/google-map.php';?>
        </div>


      </div>
    </section>
    <section id="related-footer" class="row">
      <h2>Related projects</h2>
      <?php require './template_parts/elements/blocks/related-footer.php';?>
      <?php require './template_parts/elements/blocks/related-footer.php';?>
      <?php require './template_parts/elements/blocks/related-footer.php';?>
      <?php require './template_parts/elements/blocks/related-footer.php';?>

    </section>
    <?php
    break;

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
        elseif ($include_page == 'search') {
          // TODO
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
          <?php if($include_page == 'about') { ?>
            <h2>Drop us a line</h2>
            <?php require './template_parts/elements/blocks/simple-text.php';?>
          <?php } else {?>
            <h2>Articles of this project</h2>
            <?php require './template_parts/elements/blocks/small-article-post.php';?>
            <?php require './template_parts/elements/blocks/small-article-post.php';?>
            <?php require './template_parts/elements/blocks/small-article-post.php';?>
          <?php } ?>
        </section>
        <section class="col m6">
          <?php if($include_page == 'about') { ?>
            <?php require './template_parts/elements/blocks/contact-form.php';?>
          <?php } else {?>
            <h2>Information</h2>
            <div id="inline_fields" class="col s12 ">
              <?php require './template_parts/elements/fields/label-date_creation.php';?>
              <?php require './template_parts/elements/fields/label-location.php';?>
              <?php require './template_parts/elements/fields/label-authors.php';?>
              <?php require './template_parts/elements/fields/label-people.php';?>
              <?php require './template_parts/elements/fields/label-topic.php';?>
              <?php require './template_parts/elements/fields/label-tags.php';?>
            </div>
          <?php } ?>

          <?php //require './template_parts/elements/blocks/simple-text.php';?>
        </section>
    </div>

    <section id="related-footer" class="row">
      <h2>Related projects</h2>
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
      <section class="col m5">
        <?php
          if($include_page == 'accueil') {
            require_once './template_parts/elements/blocks/accueil-teaser.php';
          } else {
            require_once './template_parts/elements/blocks/workshop.php';
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
        <?php require './template_parts/elements/blocks/small-pdf-post.php';?>
      </section>
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
