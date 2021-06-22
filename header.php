<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' - ';
                                    } ?><?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <?php get_template_part('template-parts/common/preload'); ?>
    <?php get_template_part('template-parts/common/menu'); ?>