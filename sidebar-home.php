<!-- Sidebar especifica para home -->
<?php 
if(is_active_sidebar('sidebar-1')){
	dynamic_sidebar('sidebar-1');
}
?>
<?php echo do_shortcode('[contact-form-7 id="121" title="Formulário Sidebar"]') ?>