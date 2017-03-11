<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   11-03-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 11-03-2017

?>
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
