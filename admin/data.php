	<?php 
		session_start();
		include 'conn.php';
		$d1 = "multimedia";
		$d2 = "hs";
		$d3 = "ai";
		$d4 = "network";
		$q1 = mysqli_query($conn,"SELECT * from ".$d1.";");
		$q2 = mysqli_query($conn,"SELECT * from ".$d2.";");
		$q3 = mysqli_query($conn,"SELECT * from ".$d3.";");
		$q4 = mysqli_query($conn,"SELECT * from ".$d4.";");
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.act-abs{
			color: #fff;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
	<form method="POST">
		<select name="table">
			<option value="0">all</option>
			<option value="1">multimedia</option>
			<option value="2">Hardware</option>
			<option value="3">Artificial Intelligence</option>
			<option value="4">Network</option>
		</select>
		<button name="show">Show</button>
	</form>
		<table>
			<tr class="headtable">
				<th>ID</th>
				<th>Text</th>
				<th>Option</th>
			</tr>
			<tbody>
			<?php
				if (isset($_POST['show'])) {
					$v = $_POST['table'];	
					if ($v == "0") {
						while ($row = mysqli_fetch_array($q1)){
							echo "<tr>";
							echo "<th>".$row['id_multimedia']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_multimedia'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d1;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_multimedia'];?>&db=<?php echo $d1;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
						while ($row = mysqli_fetch_array($q2)) {
							echo "<tr>";
							echo "<th>".$row['id_hs']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_hs'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d2;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_hs'];?>&db=<?php echo $d2;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
						while ($row = mysqli_fetch_array($q3)) {
							echo "<tr>";
							echo "<th>".$row['id_ai']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_ai'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d3;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_ai'];?>&db=<?php echo $d3;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
						while ($row = mysqli_fetch_array($q4)) {
							echo "<tr>";
							echo "<th>".$row['id_network']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_network'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d4;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_network'];?>&db=<?php echo $d4;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
					}elseif ($v == "1") {
						while ($row = mysqli_fetch_array($q1)){
							echo "<tr>";
							echo "<th>".$row['id_multimedia']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_multimedia'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d1;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_multimedia'];?>&db=<?php echo $d1;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
						
					}elseif ($v == "2") {
						while ($row = mysqli_fetch_array($q2)) {
							echo "<tr>";
							echo "<th>".$row['id_hs']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_hs'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d2;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_hs'];?>&db=<?php echo $d2;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
						
					}elseif ($v == "3") {
						while ($row = mysqli_fetch_array($q3)) {
							echo "<tr>";
							echo "<th>".$row['id_ai']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_ai'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d3;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_ai'];?>&db=<?php echo $d3;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
						
					}elseif ($v == "4") {
						while ($row = mysqli_fetch_array($q4)) {
							echo "<tr>";
							echo "<th>".$row['id_network']."</th>";
							echo "<th>".$row['teks']."</th>";
							?>
							<th>
								<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
								<a target="myiframe" href="edit.php?id=<?php echo $row['id_network'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d4;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
								<a target="myiframe" href="delete.php?id=<?php echo $row['id_network'];?>&db=<?php echo $d4;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
							</th>
							<?php
							echo "</tr>";
						}
						
					}else{
						
					}
				}else{

					while ($row = mysqli_fetch_array($q1)){
						echo "<tr>";
						echo "<th>".$row['id_multimedia']."</th>";
						echo "<th>".$row['teks']."</th>";
						?>
						<th>
							<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
							<a target="myiframe" href="edit.php?id=<?php echo $row['id_multimedia'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d1;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
							<a target="myiframe" href="delete.php?id=<?php echo $row['id_multimedia'];?>&db=<?php echo $d1;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
						</th>
						<?php
						echo "</tr>";
					}
					while ($row = mysqli_fetch_array($q2)) {
						echo "<tr>";
						echo "<th>".$row['id_hs']."</th>";
						echo "<th>".$row['teks']."</th>";
						?>
						<th>
							<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
							<a target="myiframe" href="edit.php?id=<?php echo $row['id_hs'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d2;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
							<a target="myiframe" href="delete.php?id=<?php echo $row['id_hs'];?>&db=<?php echo $d2;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
						</th>
						<?php
						echo "</tr>";
					}
					while ($row = mysqli_fetch_array($q3)) {
						echo "<tr>";
						echo "<th>".$row['id_ai']."</th>";
						echo "<th>".$row['teks']."</th>";
						?>
						<th>
							<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
							<a target="myiframe" href="edit.php?id=<?php echo $row['id_ai'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d3;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
							<a target="myiframe" href="delete.php?id=<?php echo $row['id_ai'];?>&db=<?php echo $d3;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
						</th>
						<?php
						echo "</tr>";
					}
					while ($row = mysqli_fetch_array($q4)) {
						echo "<tr>";
						echo "<th>".$row['id_network']."</th>";
						echo "<th>".$row['teks']."</th>";
						?>
						<th>
							<a target="iframe_l" href="lihat.php?teks=<?php echo $row['teks'];?>"><button class="btlihat" onclick="l_iframe()">Lihat</button></a>
							<a target="myiframe" href="edit.php?id=<?php echo $row['id_network'];?>&teks=<?php echo $row['teks'];?>&db=<?php echo $d4;?>"><button class="btedit" onclick="open_frame()">Edit</button></a>
							<a target="myiframe" href="delete.php?id=<?php echo $row['id_network'];?>&db=<?php echo $d4;?>"><button class="btdelete" onclick="open_frame()">Delete</button></a>
						</th>
						<?php
						echo "</tr>";
					}
				}
			?>
			</tbody>
		</table>
	</div>
	<div class="bgpopup" id="lihat">
		<div class="content_popup">
			<iframe src="" name="iframe_l"></iframe><br>
			<button onclick="l_close()" class="btblue">Close</button>
		</div>
	</div>
	<div class="bgpopup" id="other">
		<div class="content_popup">
			<iframe src="" name="myiframe"></iframe><br>
		</div>
	</div>

	<div class="bgpopup" id="myalert">
		<div class="alert_popup alertsuccess">
			<p>Abstract berhasil di Edit</p>
		</div>
	</div>

	<div class="bgpopup" id="myalertdel">
		<div class="alert_popup alertwarning">
			<p>Abstract berhasil di Hapus</p>
		</div>
	</div>

	<script type="text/javascript">
		var lihat = document.getElementById('lihat');
		var myframe = document.getElementById('other');

		function l_iframe() {
		 	lihat.style.display = "block";
		}
		function l_close(){
			lihat.style.display = "none";
		}

		function open_frame() {
		 	myframe.style.display = "block";
		}

		function close_frame() {
		 	myframe.style.display = "none";
		}
		
		function reloadpage(){
			setTimeout(function(){
				window.location.reload();
			}, 2000);
		}
		var myalert = document.getElementById('myalert');
		function open_alert() {
			 	myalert.style.display = "block";
			}

		window.onclick = function(event) {
	    	if (event.target == myalert) {
	        	myalert.style.display = "none";
	    	}
		}
		var myalertdel = document.getElementById('myalertdel');
		function open_alertdel() {
			 	myalertdel.style.display = "block";
			}

		window.onclick = function(event) {
	    	if (event.target == myalertdel) {
	        	myalertdel.style.display = "none";
	    	}
		}
	</script>
</body>
</html>