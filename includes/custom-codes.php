<?php	$tt_options_css = get_option('tt_options_css');
		$tt_options_script = get_option('tt_options_script');
		$tt_options_html = get_option('tt_options_html');
?>
<?php echo $tt_options_html; ?>
<style>
<?php echo $tt_options_css; ?>
</style>
<script>
<?php echo $tt_options_script; ?>
</script>
