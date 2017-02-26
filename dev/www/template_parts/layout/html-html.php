<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   20-02-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 26-02-2017
# @===================================
#
# @Templates SCSS file -> none
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Urbz.net</title>
  <!-- TODO: add META HEADER  with Drupal ... how it work? what we'got? -->
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <!-- Import layout page block -->
  <?php
    require_once './template_parts/layout/page.php';
  ?>
  <!--Import JS-->
  <script src="./js/bundle.min.js" charset="utf-8"></script>
  <script src="./js/tweeter_stream.js" charset="utf-8"></script>
  <script src="./js/app.js" charset="utf-8"></script>
</body>
</html>
