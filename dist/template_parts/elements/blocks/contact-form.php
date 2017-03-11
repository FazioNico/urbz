<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   11-03-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 11-03-2017

?>
<div id="contact-form">
  <div class="field field--name-field-contact-form field--type-entity-reference field--label-hidden field__item">
    <form class="contact-message-feedback-form contact-message-form contact-form" data-user-info-from-browser="" data-drupal-selector="contact-message-feedback-form" action="/about" method="post" id="contact-message-feedback-form" accept-charset="UTF-8">

      <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
        <input data-drupal-selector="edit-name" type="text" id="edit-name" name="name" value="" size="60" maxlength="255" class="form-text required" required="required" aria-required="true" placeholder="Your name">
      </div>

      <input data-drupal-selector="form-bj64cxutrmaf7938cu9j7g24cgbowgm0b-mdiwtzhmy" type="hidden" name="form_build_id" value="form-BJ64cXUtRMaF7938Cu9j7g24CgbowgM0B-MdIwTzhMY">
      <input data-drupal-selector="edit-contact-message-feedback-form" type="hidden" name="form_id" value="contact_message_feedback_form">

      <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-mail form-item-mail">
        <input data-drupal-selector="edit-mail" type="email" id="edit-mail" name="mail" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" placeholder="Your email address">
      </div>

      <div class="field--type-string field--name-subject field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-subject-wrapper" id="edit-subject-wrapper">
        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-subject-0-value form-item-subject-0-value">
          <input class="js-text-full text-full form-text required" data-drupal-selector="edit-subject-0-value" type="text" id="edit-subject-0-value" name="subject[0][value]" value="" size="33" maxlength="100" placeholder="Subject" required="required" aria-required="true">
        </div>
      </div>

      <div class="field--type-language field--name-langcode field--widget-language-select js-form-wrapper form-wrapper" data-drupal-selector="edit-langcode-wrapper" id="edit-langcode-wrapper">
      </div>

      <div class="field--type-string-long field--name-message field--widget-string-textarea js-form-wrapper form-wrapper" data-drupal-selector="edit-message-wrapper" id="edit-message-wrapper">
        <div class="js-form-item form-item js-form-type-textarea form-type-textarea js-form-item-message-0-value form-item-message-0-value">
          <div class="form-textarea-wrapper">
            <textarea class="materialize-textarea js-text-full text-full form-textarea required resize-vertical" data-drupal-selector="edit-message-0-value" id="edit-message-0-value" name="message[0][value]" rows="12" cols="60" placeholder="Message" required="required" aria-required="true"></textarea>
          </div>
        </div>
      </div>

      <details class="captcha js-form-wrapper form-wrapper" open="open">
        <summary role="button" aria-expanded="true" aria-pressed="true">
          CAPTCHA
        </summary>
        <div class="details-wrapper">

          <div class="details-description">
            This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.
          </div>

          <input data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid" value="132">
          <input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token" value="d813b44f1af05002c9c3dd4816e5dd5b4c1acd23baa2664093eac96c555ada2b">

          <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-captcha-response form-item-captcha-response">
            <span class="field-prefix">1 + 3 = </span>
            <input autocomplete="off" data-drupal-selector="edit-captcha-response" aria-describedby="edit-captcha-response--description" type="text" id="edit-captcha-response" name="captcha_response" value="" size="4" maxlength="2" class="form-text required" required="required" aria-required="true" placeholder="Math question">
            <div id="edit-captcha-response--description" class="description">
              Solve this simple math problem and enter the result. E.g. for 1+3, enter 4.
            </div>
          </div>

        </div>
      </details>
      <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
        <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Send" class="btn blue-grey darken-2 button button--primary js-form-submit form-submit">
      </div>
    </form>
  </div>
</div>
