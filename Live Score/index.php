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
<?php

	/* Connect to to database first */
	mysql_connect('localhost','root','') or die("Could not connect. " . mysql_error());
    mysql_select_db('liveScore') or die("Could not select database. " . mysql_error());
	
	/* Take data from table */
	$query="SELECT * FROM 




?>
	<div class="wrapper">
    	<div class="centerBox">
        	<div class="boxHeader">
            The Title Of the game goes here
            </div>
            <div class="boxContent">
    			<div class="boxInside">
            		<div class="header">
            		School Name Goes Here
            		</div>
    			score goes here
           		</div>
            	<div class="boxInside">
            		<div class="header">
            		School Name Goes Here
            		</div>
    			score goes here
            	</div>
             </div>
    	</div>
    </div>
</body>
</html>