<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   20-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 11-03-2017
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
    ?>
    <section>
      <div class="row">

        <div class="header-slide">
          <?php require './template_parts/elements/blocks/full-slide.php';?>
          <div class="js-form-item form-item js-form-type-select form-type-select js-form-item-team form-item-team">
            <label for="edit-team">People</label>
            <select data-drupal-selector="edit-team" id="edit-team" name="Team" class="form-select initialized">
              <option value="All" selected="selected">- Any -</option>
              <option value="184">Bangkok</option>
              <option value="148">Berlin</option>
              <option value="211">Chile</option>
              <option value="147">Goa</option>
              <option value="212">Italy</option>
            </select>
          </div>
        </div>

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

        <header class="col s12">
          <div typeof="schema:Person" about="/user/1" class="profile">

            <h1 id="people-name" class="center-align">
              <span class="field field--name-field-first-name field--type-string field--label-hidden field__item">
                Christian
              </span>
              <span class="field field--name-field-family-name field--type-string field--label-hidden field__item">
                Vallebella
              </span>
            </h1>

            <div id="center-specialisation">
              <div class="field field--name-field-team-category field--type-entity-reference field--label-hidden field__item">
                <p class="flow-text center-align">
                  Volunteer
                </p>
              </div>
            </div>

            <div class="field field--name-field-content field--type-entity-reference-revisions field--label-hidden field__items">

              <!-- item -->
              <div class="field__item">
                <div class="paragraph paragraph--type--image-text paragraph--view-mode--default">
                  <div class="blazy field field--name-field-image-demo field--type-image field--label-hidden field__item blazy--on" data-blazy="" data-colorbox-gallery="">

                      <a href="#" class="blazy__colorbox litebox" data-colorbox-trigger="" >
                        <div class="media media--blazy  media--switch media--switch--colorbox media--responsive media--image">
                            <?php require './template_parts/elements/picture/img-srcset.php';?>
                        </div>
                        <div class="litebox-caption visually-hidden">
                          an image in a paragraph over 2 column
                        </div>
                        <div class="blazy__caption">
                          <div class="blazy__description">
                            an image in a paragraph over 2 column
                          </div>
                        </div>
                      </a>

                  </div>
                </div>
              </div>

            </div>
          </div> <!-- eof item article people detail -->
        </header><!-- eof header article people detail-->

        <div class="row">
          <div class="col s12 m6">
            <?php require './template_parts/elements/blocks/img-legende.php';?>
          </div>
          <div class="col s12 m6">
            <?php require './template_parts/elements/blocks/simple-text.php';?>
            <?php require './template_parts/elements/blocks/google-map.php';?>
          </div>
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
        elseif ($include_page == 'article') {
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
