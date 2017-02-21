<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   20-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 22-02-2017
# @===================================
#
# @Templates SCSS file -> ./dev/src/sass/navigation/main-nav.scss
?>

<nav role="navigation" class="primary-nav" >
  <div class="nav-wrapper">
    <ul id="nav-mobile" class="nav-content ">
      <?php require_once './template_parts/navigation/menu.php';?>
    </ul>
      <?php require_once './template_parts/elements/form/header-search.php';?>
  </div>
</nav>
