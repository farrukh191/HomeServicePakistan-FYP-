<?php  

include('db.php');

session_start();

unset($_SESSION['email']);
unset($_SESSION['password']);

session_destroy();
session_unset();
/*
?>

<script type="text/javascript">
	window.open('../index.php','self');
</script>

<?php

*/
header('location:clogin.php');


?>