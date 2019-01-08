<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<form method="POST" class="content-center">
	<p>Apakan anda ingin menghapus abstrack ini?</p>
	<button class="btdelete" type="submit" name="yes" id="yes" onclick="parent.close_frame(); parent.reloadpage(); parent.open_alertdel();">Yes</button>
	<button class="btedit" onclick="parent.close_frame()">No</button>
</form>

<?php
		include 'conn.php';
		$id = $_GET['id'];
		$db = $_GET['db'];
		if (isset($_POST['yes'])) {
			mysqli_query($conn,"DELETE FROM `".$db."` WHERE `".$db."`.`id_".$db."` = ".$id."");	
		}	
?>