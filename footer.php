<footer>
<div id="footer-column-container">

<?php if (is_active_sidebar('footer_widget_column_one')): ?>
<div class="footer-column">
<?php dynamic_sidebar('footer_widget_column_one'); ?>
</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_widget_column_two')): ?>
<div class="footer-column">
<?php dynamic_sidebar('footer_widget_column_two'); ?>
</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_widget_column_three')): ?>
<div class="footer-column">
<?php dynamic_sidebar('footer_widget_column_three'); ?>
</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_widget_column_four')): ?>
<div class="footer-column">
<?php dynamic_sidebar('footer_widget_column_four'); ?>
</div>
<?php endif; ?>

</div>

<?php if (is_active_sidebar('footer_bottom_left')  || is_active_sidebar('footer_bottom_centre') ||  is_active_sidebar('footer_bottom_right')): ?>
<div id="footer-bottom">

<?php if (is_active_sidebar('footer_bottom_left')): ?>
<!--is_active_sidebar() Determines whether a sidebar contains widgets, don't render teh div unless there are widgets inside.-->
<div class="footer-bottom-left-column">
<?php dynamic_sidebar('footer_bottom_left'); ?>
</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_bottom_centre')): ?>
<div class="footer-bottom-centre">
<?php dynamic_sidebar('footer_bottom_centre'); ?>
</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_bottom_right')): ?>
<div class="footer-bottom-right-column">
<?php dynamic_sidebar('footer_bottom_right'); ?>
</div>
<?php endif; ?>

</div>
<?php endif; ?>
</footer>
<?php wp_footer(); ?><!-- Imports the js files tagged with "true" from functions .php -->

</body>

</html>