<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>paw_zad_01</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">

	<label for="id_amount">Kwota kredytu: </label>
	<input style="margin-left:7px;" id="id_amount" type="number" name="amount" value="<?php isset($amount)? print($amount):"Kwota kredytu" ?>" /><br />
	
	<label for="id_years">Na ile lat: </label>
	<input style="margin-left:44px;" id="id_years" type="number" name="years" value="<?php isset($years)? print($years):"Na ile lat" ?>" /><br />
	
	
	<label for="id_interestRate">oprocentowanie: </label>
	<input id="id_interestRate" type="number" name="interestRate" value="<?php isset($interestRate)? print($interestRate):"Wpisz liczbe" ?>" /><br />
	
	<input type="submit" value="Oblicz" />
	
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>