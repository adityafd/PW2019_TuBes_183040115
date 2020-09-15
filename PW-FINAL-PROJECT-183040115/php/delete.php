<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

	$id = $_GET['id'];

	if(delete($id) > 0) {
		echo 
		"<script>
			alert('Data successfully deleted!');
			document.location.href = 'admin.php';
		</script>";
	}else{
		echo 
		"<script>
            alert('Data failed deleted!');
            document.location.href = 'admin.php';
       	</script>";
		}

?>