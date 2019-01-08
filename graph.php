<?php 
	include 'admin\conn.php';
	$v = mysqli_query($conn,"SELECT * FROM `val`");
	$row = mysqli_fetch_assoc($v);
?>


<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "<?php echo $row['hsl']?>",
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 15,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: <?php echo $row['v_multimedia']?>, label: "Multimedia" , color: ['rgba(52, 152, 219, 1)'],},
			{ y: <?php echo $row['v_hs']?>, label: "Hardware" , color: ['rgba(26, 188, 156, 1)'],},
			{ y: <?php echo $row['v_ai']?>, label: "Artificial Intelligence" , color: ['rgba(243, 156, 18, 1)'],},
			{ y: <?php echo $row['v_network']?>, label: "Network", color: ['rgba(231, 76, 60, 1)'],}
		]
	}]
});
chart.render();

}
</script>
<div id="chartContainer" style="height: 280px; max-width: 920px; margin: 0px auto;"></div>
<script src="js/canvasjs.min.js"></script>
