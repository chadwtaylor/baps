<?PHP

if (!empty($_REQUEST['submit'])) {
	$entrants =	$_REQUEST['entrants'];
	$entry_fee = $_REQUEST['entry_fee'];
	
	$totalVal = $entry_fee * $entrants;
	
	for ($i=1;$i<=$entrants;$i++) {
		$pointsList .= round(sqrt($totalVal/$i),2)."<br />";
	}
}
?>

<form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
<p><label for="entrants">Entrants:</label> <input type="text" name="entrants"></p>
<p><label for="entry_fee">Entry Fee:</label> <input type="text" name="entry_fee"></p>
<p><input type="submit" name="submit" value="Show me the points"></p>

<div>
	<?PHP echo $pointsList; ?>
</div>