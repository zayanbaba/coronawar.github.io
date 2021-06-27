<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "corono_db";

$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	<script>
// 		alert("connection ok");
	</script>
	<?php
}else{
	?>
	 <script type="text/javascript">
// 		alert("connection fail");
	</script>
	<?php
}



?>
