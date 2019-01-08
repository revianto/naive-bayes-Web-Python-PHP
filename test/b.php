<form method="POST">
	<button name="bt">Show</button>
</form>
<?php
	if (isset($_POST['bt'])) {
		echo shell_exec('a\a.py');
	}
?>