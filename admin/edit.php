<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
<?php
	include 'conn.php';
	$id = $_GET['id'];
	$teks = $_GET['teks'];
	$db = $_GET['db'];
?>

<link rel="stylesheet" type="text/css" href="style.css">
<form method="POST" class="content-center">
	<textarea name="etext" id="etext"><?php echo $teks;?></textarea>
	<br><br>
	<button class="btlihat" type="submit" name="save" id="save" onclick="parent.close_frame();parent.reloadpage();parent.open_alert();">Save</button>
	<button class="btdelete" onclick="parent.close_frame();">Cancel</button>
</form>

<?php
	if (isset($_POST['save'])&isset($_POST['etext'])) {
		$t = $_POST['etext'];
		mysqli_query($conn, "UPDATE `".$db."` SET `teks` = '".$t."' WHERE `".$db."`.`id_".$db."` = ".$id.";");
	}
?>
