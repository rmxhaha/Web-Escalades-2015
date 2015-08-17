<!doctype html>
<html>
<head>

<!-- Metas -->
<meta charset="UTF-8">

<!-- Title -->
<title>Escalades Vidias - Live Score</title>

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Scripts -->
<script>


</script>
</head>
<body>

	<div class="wrapper">
    	<div class="centerBox">
        	<div class="boxHeader">
            <form method="post">
            <select onchange="this.form.submit()" name="lomba">
            	<option> Select Here </option>
            	<option value="basket">Basket</option>
            	<option value="futsal">Futsal</option>
            </select>
            </form>
            <!-- Don't Move this script -->
            <?php

	/* Get Option Values */
	$lomba=$_POST['lomba'];

	/* Connect to to database first */
	mysql_connect('localhost','root','root') or die("Could not connect. " . mysql_error());
    mysql_select_db('liveScore') or die("Could not select database. " . mysql_error());
	
	/* Take data from table */
	$query="SELECT * FROM $lomba ORDER BY id DESC LIMIT 1;";
	$r = mysql_query($query);
	
	/* Put data to variables */
	 if ( $r !== false && mysql_num_rows($r) > 0 ) 
	  while ( mysql_fetch_assoc($r) ) {
		  
		global $sekolah1, $sekolah2,$score1, $score2;
		$sekolah1 = stripslashes ($a['sekolah1']);  
        $sekolah2 = stripslashes($a['sekolah2']);
		$score1 = stripslashes($a['score1']);
        $score2 = stripslashes($a['score2']);
	  
	  }
			?>

            <?php echo "$lomba"; ?>
            </div>
            <div class="boxContent">
    			<div class="boxInside">
            		<div class="header">
            		<? echo '$sekolah1'; ?>
            		</div>
    			<span id ="score"><? echo '$score1'; ?></span>
           		</div>
            	<div class="boxInside">
            		<div class="header">
            		<? echo '$sekolah2'; ?>
            		</div>
    			<span id="score"><? echo '$score2'; ?></span>
            	</div>
             </div>
    	</div>
    </div>
</body>
</html>