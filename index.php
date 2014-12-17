<!DOCTYPE html>
<html lang="en">
<head>
<title>URL shortener for Mind Valley</title>
<meta name="robots" content="noindex, nofollow">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
<h1>Welcome to Url shortener</h1>
<form method="post" action="shorten.php" id="shortener">
<input type="text" name="longurl" id="longurl" placeholder="URL to shorten"/>
<p><font size="2">Please Must Use http:// or https://</font></p>
<p>&nbsp;</p>
<input type="submit" value="Shorten" class="button" />
</form>
</div>
<div id="result">
	<div class="close">Press Esc to close</div>
	<div class="output_shorten">
		
	</div>
</div>
<script>
$(function () {
	$('#shortener').submit(function () {
		$.ajax({type: "POST", data: {longurl: $('#longurl').val()}, url: 'shorten.php', complete: function (XMLHttpRequest, textStatus) {
			$('#result').show();
			$('.output_shorten').html(XMLHttpRequest.responseText);
		}});
		return false;
	});
	$(document).keyup(function(e) {

			if (e.keyCode == 27) { $('#result').hide() }   // esc
		});
});
</script>
</body>
</html>
