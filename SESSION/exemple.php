<?php 

	session_start();
	$_SESSION['login'] = array('Moussa', 'yacouba');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
		<?php echo "<p>Bonjour ".$_SESSION['login'][0].", vous etes connecté.</p>";?> 
	
</body>
</html>