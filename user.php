<link rel="stylesheet" type="text/css" href="style.css">
<form target="framegram" method="post" action="naivebayes.py" class="form-test" onsubmit="var t = document.getElementById('teks').value;if (t.length<50) { alert('<50');return false;}else{load();return true;}">
	<textarea placeholder=" Input Text.." name="text" id="teks"></textarea><br><br>
	<button >Submit</button>
</form>
<iframe src="" name="framegram" style="display: none;"></iframe>
