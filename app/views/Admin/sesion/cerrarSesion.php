<?php  

if (!isset($_SESSION)) session_start();
session_destroy();
?>
<script type="text/javascript">
	window.location="?controller=pagina&action=index"
</script>