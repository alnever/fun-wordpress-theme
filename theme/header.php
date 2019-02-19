<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo (get_template_directory_uri()); ?>/style.css">
    <link rel="stylesheet" href="<?php echo (get_template_directory_uri()); ?>/css/style.css">
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
