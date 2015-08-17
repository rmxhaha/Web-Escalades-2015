<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Input Live Score</title>
</head>
<body>
<?php

	/* Connect to to database first */
	mysql_connect('localhost','root','root') or die("Could not connect. " . mysql_error());
    mysql_select_db('liveScore') or die("Could not select database. " . mysql_error());
	
?>
<form method="post">
	<select name="lomba">
    	<option value="basket">Basket</option>
        <option value="futsal">Futsal</option>
     </select><br>
     
     Sekolah 1 :<input name="sekolah1" id="sekloah1"><br>
     Score 1 :<input name="score1" id="score1"><br><br><br>
     Sekolah 2 :<input name="sekolah2" id="sekloah2"><br>
     Score 2 :<input name="score2" id="score2"><br>
     <br>
<input type="submit">
</form>


<?php

	/* Get post datas */
	$lomba=$_POST['lomba'];
	$sekolah1=$_POST['sekolah1'];
	$score1=$_POST['score1'];
	$sekolah2=$_POST['sekolah2'];
	$score2=$_POST['score2'];
	
	/* Query mysql data */
	$q="INSERT INTO $lomba SET sekolah1 = '$sekolah1', sekolah2 = '$sekolah2', score1 = '$score1', score2 = '$score2';";
	$r=mysql_query ($q) or die(mysql_error());
?>
</body>
</html>
