<?php
include ('../DATABASE/database_connect.php');
	
	session_start();
	
	if(isset($_SESSION['username']))
	{
		
	}
	else
	{
?>
	<script type='text/javascript'>
	alert ('You Must be Logged In! \n\tPlese GO \nHOME PAGE and Login');
	window.location='../Homepage.php';
	</script>

<?php		
	}
?>

<html>
<head>
<title>ADMIN PAGE</title>
<style type="text/css">
<!--
body{
	background-color:#B8870F;
}
a { 
	text-decoration: none; 
}
#apDiv1 {
	font-variant: normal;
	text-transform: uppercase;
	font-family:Georgia, "Times New Roman", Times, serif;
	position:absolute;
	left:1064px;
	top:13px;
	width:255px;
	height:108px;
	z-index:1;
	background-color: #FFCC66;
	background-image: url(Images/Header.png);
}

#apDiv2 {
	position:absolute;
	left:18px;
	top:136px;
	width:1287px;
	height:600px;
	z-index:2;
	background-color: #FFCC33;
	background-image: url(Images/Middle.png);
}


-->
</style>

</head>

<body >

<div id="apDiv1" align="center">
	<?php
    echo "Welcome <br>".$_SESSION['username']."!<br>";
    ?>
    <form align="right" name="form1" method="post" action="admin.php">
    <label>
    <input name="submit2" type="submit" id="submit2" value="log out">
    </label>
    </form>

</div>


<div id="apDiv2" align="center" ></div>





</body>
</html>
