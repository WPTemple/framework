<?php
/**
 * Header of the Theme
 *
 * Displays all of the <head> section all the way to the opening body tag
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html>
<head>
    <?php tha_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<p> Hello World</p>
