<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   21-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 12-03-2017

// Element display header search page
// Templates SCSS file -> ./dev/src/sass/elements/form/header-serch.scss
?>
<header class="col s12">
  <div class="container views-exposed-form block block-views block-views-exposed-filter-blocksearch-page-1" data-drupal-selector="views-exposed-form-search-page-1" id="block-exposedformsearchpage-1-2">
    <form action="/search" method="get" id="views-exposed-form-search-page-1" accept-charset="UTF-8">
    <div class="form--inline clearfix">
      <div class="input-field js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-search-api-fulltext form-item-search-api-fulltext">
        <i class="material-icons prefix">search</i>
        <input data-drupal-selector="edit-search-api-fulltext" type="text" id="edit-search-api-fulltext" name="search_api_fulltext" value="scale" size="30" maxlength="128" class="form-text required" required="required" aria-required="true" placeholder="search">
      </div>
      <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
        <input data-drupal-selector="edit-submit-search" type="submit" id="edit-submit-search" value="Search" class="button js-form-submit form-submit">
      </div>
    </div>
    </form>
  </div>
</header>
