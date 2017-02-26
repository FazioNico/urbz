<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   24-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 25-02-2017

# Templates SCSS file -> dev/src/sass/elements/blocks/small-article-exhibition.scss
?>

<div class="row">
  <div class="col s12">
    <article role="article" about="" class="card small-article-exhibition z-depth-0 node node--type-project node--view-mode-teaser">

      <header>
        <a href="?page=collection">
          <?php require './template_parts/elements/picture/img-srcset.php';?>
        </a>

        <h2 class="title">
          <a href="?page=collection"  rel="bookmark">
            <span class="field field--name-title field--type-string field--label-hidden">
            Consequatur dolore impedit eveniet necessitatibus
            </span>
          </a>
        </h2>
      </header>

      <div class="card-content">

        <div class="field field--name-field-category field--type-entity-reference field--label-hidden field__items">
          <div class="field__item">
            <a href="?page=collection-overview" hreflang="en">
              Projects
            </a>
          </div>
        </div>

        <div class="clearfix text-formatted field field--name-field-description field--type-text-with-summary field--label-hidden field__item">
          <p>
            Spurred by an increasing ease in mobility, people are migrating across cities, states, countries and continents. Traveling to the village is not an experience of going back, but simply of going forward, repeate
          </p>
        </div>

      </div><!-- Eof .card-content -->

      <div class="card-action">
        <a href="?page=collection" class="grey-text text-lighten-1">more</a>
      </div>

    </article>
  </div><!-- Eof .col.s12 -->
</div><!-- Eof .row -->
