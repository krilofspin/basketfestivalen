<?php
$html_classes = [];

if (is_admin_bar_showing()) {
    $html_classes[] = "has-admin-bar";
}
?>
<!DOCTYPE html>
<html lang="sv" class="<?=implode(" ", $html_classes);?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:url" content="https://basketballfestival.se"/>
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Basketfestivalen" />
  <meta property="og:description" content="" />
  <meta property="og:image:secure_url" content="https://basketballfestival.se/wp-content/themes/basketfestivalen/screenshot.png" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/main.bundle.css">
  <link rel="icon" href="https://basketballfestival.se/wp-content/uploads/sport_basketball_favicon.png"/>
  <title><?= the_title(); ?> - <?= get_bloginfo(); ?></title>
  <?php wp_head() ?>
</head>

<body id="basketfestivalen" class="<?php if(is_404()) echo 'not-found' ?>">
<div class="main-wrapper">