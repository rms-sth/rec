<?php
function redirect($file){
	?>
	<script type="text/javascript">
		window.location = "<?php echo $file;  ?>"
	</script>
	<?php
}
?>