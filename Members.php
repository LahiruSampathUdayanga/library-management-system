<?php
//database connect
include ('DATABASE/database_connect.php');
	
	session_start();
	
	if(isset($_SESSION['username']))
	{
		
	}
	else
	{
?>
	<script type='text/javascript'>
	alert ('You Must be Logged In! \n\tPlese GO \nHOME PAGE and Login');
	window.location='Homepage.php';
	</script>

<?php		
	}
?>


<html>
<head>
<title>MEMBERS</title>
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
	left:195px;
	top:20px;
	width:1000px;
	height:200px;
	z-index:1;
	background-color: #FFCC66;
	background-image: url(Images/Header.png);
}
#apDiv2 {
	position:absolute;
	left:213px;
	top:160px;
	width:968px;
	height:56px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:193px;
	top:240px;
	width:1000px;
	height:188px;
	z-index:2;
	background-color: #FFCC33;
	background-image: url(Images/Middle.png);
}
#apDiv4 {
	position:absolute;
	left:804px;
	top:29px;
	width:380px;
	height:125px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:430px;
	top:253px;
	width:540px;
	height:170px;
	z-index:3;
}
#apDiv6 {
	position:absolute;
	left:238px;
	top:453px;
	width:903px;
	height:515px;
	z-index:4;
	
}
-->
</style>
</head>

<body >
<!--MENU BAR-->
<div id="apDiv1" align="center">
  <table width="1000" height="204" border="0">
    <tr>
      <td height="139" colspan="3">&nbsp;</td>
      <td colspan="2">
       <div>
        <table width="395" height="101" border="0" cellpadding="1" cellspacing="1">
          <tr>
            <td width="122">&nbsp;</td>
            <td width="66">&nbsp;</td>
            <td width="96">
            <a href="https://www.facebook.com/">
            <img src="Images/fb.jpg" alt="" width="50" height="50">
            </a></td>
            <td width="98">
            <?php
			echo "Welcome <br>".$_SESSION['username']."!<br>";
			?>
            	<form align="right" name="form1" method="post" action="DATABASE/logout.php">
  				<label>
  				<input name="submit2" type="submit" id="submit2" value="log out">
  				</label>
				</form>
            </td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div>
      </td>
    </tr>
    <tr>
      <td align="center" valign="middle" width="191"><a href="Homepage.php">Home</a></td>
      <td align="center" valign="middle" width="195"><a href="Members.php">Members Area</a></td>
      <td align="center" valign="middle" width="195"><a href="Library.php">Library</a></td>
      <td align="center" valign="middle" width="191"><a href="Register.php">Register</a></td>
      <td align="center" valign="middle" width="194"><a href="Contactus.php">About US</a></td>
    </tr>
  </table>
</div>


<div id="apDiv3" align="center" ></div>

<div id="apDiv5">
  <fieldset><legend align="center">Search Panel</legend>
    <form action="Members.php" method="post">
    <table border="0" align="center">
    <tr><td>Book Name: </td><td><input type="text" name="bname"></td></tr>
    <tr><td>category: </td><td><input type="text" name="category"></td></tr>
    <tr><td colspan="2"><input type="submit" name="search" value="Search">
    <input type="reset" name="reset" value="Clear"></td></tr>
    </table>
    </form>
    </fieldset>
</div>

<div id="apDiv6">
  <table width="904" height="200" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td>
      		<?php
            if(isset($_POST['search']))
			{
			$bookname=$_POST['bname'];
			$category=$_POST['category'];
				if($category)
				{
					$result=mysql_query("select * from books WHERE category='$category'");
					$numrows = mysql_num_rows($result);
					if($numrows!=0)
					{
						while($row=mysql_fetch_array($result))
						{
						$dbcategory = $row['category'];
							if($category==$dbcategory)
							{
							?>	
					 
							<img src="<?php  echo $row['path'];?>" height="220" width="250"/>
					   
							<h4><?php echo $row['bookname']; ?></h4>
							<hr>
					
						
							<?php
							}
							else
							{
							echo "<script type='text/javascript'>
								alert ('Your category Name is \n\t\tincorect!');
								window.location='Members.php';
							</script>";
							}
						}
						
					}
					else
					{
					echo "<script type='text/javascript'>
						alert ('The book is No');
						window.location='Members.php';
					</script>";
					}
				}	
				else
				{
					$result=mysql_query("select * from books WHERE bookname='$bookname'");
					$numrows = mysql_num_rows($result);
					if($numrows!=0)
					{
						while($row=mysql_fetch_array($result))
						{
						$dbcategory = $row['bookname'];
							if($bookname==$bookname)
							{
							?>	
					 
							<img src="<?php  echo $row['path'];?>" height="220" width="250"/>
					   
							<h4><?php echo $row['bookname']; ?></h4>
							<hr>
					
						
							<?php
							}
							else
							{
							echo "<script type='text/javascript'>
								alert ('Your Book Name is incorect!');
								window.location='Members.php';
							</script>";
							}
						}
						
					}
					else
					{
					echo "<script type='text/javascript'>
						alert ('The book is No');
						window.location='Members.php';
					</script>";
					}
				}
			}			 
			?>
                    
      </td>
    </tr>
  </table>
</div>

</body>
</html>