<?php  

include('../db.php');

session_start();

unset($_SESSION['emai']);
unset($_SESSION['pass']);

session_destroy();
session_unset();
/*
?>

<script type="text/javascript">
	window.open('../index.php','self');
</script>

<?php

*/
header('location:demo.php');


?>