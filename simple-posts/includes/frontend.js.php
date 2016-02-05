/**
 * This file should contain frontend JavaScript that
 * will be applied to individual module instances.
 *
 * You have access to three variables in this file:
 *
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
 *
 */

<?php if ($settings->masonry == 'yes' ) { ?>
 (jQuery)('.fl-node-<?php echo $id; ?>').masonry({
   itemSelector: '.fl-sp-col'
 });
<?php } ?>
