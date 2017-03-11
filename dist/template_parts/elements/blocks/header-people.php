<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   11-03-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 11-03-2017

?>
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
