<?php
/**
 * Template for displaying the footer
 *
 */
?>

<?php tha_footer_before(); ?>
<footer>
 <?php tha_footer_top(); ?>

 <?php do_action( 'wpt_footer' ); ?>

 <?php tha_footer_bottom(); ?>
</footer>
<?php tha_footer_after(); ?>
<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>
</body>
</html>
