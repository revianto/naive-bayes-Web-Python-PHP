<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<style type="text/css">
		.act-add-abs{
			color: #fff;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST" action="python/pre.py" target="myframe" onsubmit="var t =document.getElementById('teks').value;if (t.length < 50) {alert('<50');return false;}else{open_alert(); return true;}">
		<p>Kategori :</p>
		<input type="radio" name="type" value="1" required> Multimedia
		<input class="radio" type="radio" name="type" value="2"> Hardware
		<input class="radio" type="radio" name="type" value="3"> Artificial Intelligence
		<input class="radio" type="radio" name="type" value="4"> Networking<br><br>
		<textarea rows="30" cols="100" style="width:85%; height: 60vh;" name="text" placeholder=" Input text.." required id="teks"></textarea><br><br>
		<button type="Submit" class="btblue" style="width: 85%; height: 40px">Submit</button>
	</form>
</body>
</html>
<div style="display: none;">
	<iframe src="" name="myframe"></iframe>
</div>
<div class="bgpopup" id="myalert">
	<div class="alert_popup alertsuccess">
		<p>Abstract berhasil di tambahkan</p>
	</div>
</div>
<script type="text/javascript">
	var myalert = document.getElementById('myalert');
	function open_alert() {
		 	myalert.style.display = "block";
		}

	window.onclick = function(event) {
    	if (event.target == myalert) {
        	myalert.style.display = "none";
    	}
	}
</script>
