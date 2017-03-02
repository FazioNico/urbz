<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   25-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 02-03-2017

# Template: -> ./dev/src/sass/elements/blocks/large-post.scss
?>


  <div class="col s12">

<article role="article" about="/articles/sao-paulo-calling" class="card large-article-post z-depth-0 node node--type-article node--view-mode-overview-small">

  <!-- BEGIN OUTPUT from 'core/themes/classy/templates/field/field.html.twig' -->
  <div class="card-image field field--name-field-overview-image field--type-image field--label-hidden field__item">

    <!-- THEME HOOK: 'responsive_image_formatter' -->
    <!-- BEGIN OUTPUT from 'core/themes/stable/templates/field/responsive-image-formatter.html.twig' -->
      <a href="?page=article">

        <!-- THEME HOOK: 'responsive_image' -->
        <!-- BEGIN OUTPUT from 'core/themes/stable/templates/field/responsive-image.html.twig' -->
        <?php require './template_parts/elements/picture/img-srcset.php';?>
        <!-- END OUTPUT from 'core/themes/stable/templates/field/responsive-image.html.twig' -->

      </a>
      <!-- END OUTPUT from 'core/themes/stable/templates/field/responsive-image-formatter.html.twig' -->

  </div>
  <!-- END OUTPUT from 'core/themes/classy/templates/field/field.html.twig' -->

  <!-- BEGIN OUTPUT from 'core/themes/classy/templates/field/field.html.twig' -->
  <div class="field field--name-field-date-of-creation field--type-datetime field--label-hidden field__item">

    <!-- BEGIN OUTPUT from 'core/themes/classy/templates/field/time.html.twig' -->
    <time datetime="2017-02-17T12:00:00Z" class="datetime">Feb 17 2017</time>
    <!-- END OUTPUT from 'core/themes/classy/templates/field/time.html.twig' -->

  </div>
  <!-- END OUTPUT from 'core/themes/classy/templates/field/field.html.twig' -->


  <h2 class="truncate">
    <a href="?page=article" rel="bookmark">
        <!-- BEGIN OUTPUT from 'core/themes/classy/templates/field/field--node--title.html.twig' -->
        <span class="field field--name-title field--type-string field--label-hidden">Sao Paulo Calling</span>
        <!-- END OUTPUT from 'core/themes/classy/templates/field/field--node--title.html.twig' -->
    </a>
  </h2>

  <!-- BEGIN OUTPUT from 'core/themes/classy/templates/field/field--text-with-summary.html.twig' -->
  <div class="content-card clearfix text-formatted field field--name-field-description-article field--type-text-with-summary field--label-hidden field__item">
    <p>
				Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus...
		</p>
  </div>
  <!-- END OUTPUT from 'core/themes/classy/templates/field/field--text-with-summary.html.twig' -->

  <?php require './template_parts/elements/fields/authors.php';?>

</article>

  </div>
