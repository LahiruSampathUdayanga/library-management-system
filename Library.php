<?php
	session_start();
	
	if(isset($_SESSION['username']))
	{
		
	}
	else
	{
?>
	<script type='text/javascript'>
	alert ('You Must be Logged In! \n\tPlese go \nHOME PAGE and Login');
	window.location='Homepage.php';
	</script>

<?php		
	}
?>


<html>
<head>
<title>LIBRARY</title>
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
	height:681px;
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
	left:709px;
	top:254px;
	width:466px;
	height:244px;
	z-index:3;
	background-color: #D5A41B;
}
#apDiv6 {
	position:absolute;
	left:212px;
	top:252px;
	width:460px;
	height:515px;
	z-index:4;
	background-color: #CD9D18;
}
#apDiv7 {
	position:absolute;
	left:710px;
	top:507px;
	width:463px;
	height:287px;
	z-index:5;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
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
      <div >
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
				echo "Welcome<br>".$_SESSION['username']."!<br>";
				?>
            	<form align="right" name="form1" method="post" action="DATABASE/logout.php">
  				<label>
                <input type="submit" value="log out" name="submit2"/>
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
<!--MEMBER INFROMATION-->
<div id="apDiv5" align="center">
  <table width="400" height="219" border="0">
    <tr>
      <td colspan="2"><div align="center" class="style2">Members Statistics</div></td>
    </tr>
    <tr>
      <td height="4" colspan="2"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td width="100">Students  :</td>
      <td width="284">&nbsp;</td>
    </tr>
    <tr>
      <td height="4" colspan="2"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td>Citizens :</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="4" colspan="2"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td>Visitors :</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="4" colspan="2"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td>Total :</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><hr align="center" color="#000000" ></td>
    </tr>
  </table>
</div>

<!--BOOK INFROMATION-->
<div id="apDiv6" align="center">
  <table width="419" height="355" border="0">
    <tr>
      <td colspan="2" align="center" valign="middle"><span class="style1">Library Statistics</span></td>
    </tr>
    <tr>
      <td colspan="2"  valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td width="120"  valign="middle">Catogary</td>
      <td width="320"  valign="middle">Number of Books</td>
    </tr>
    <tr>
      <td colspan="2" valign="middle" ><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td valign="middle">Science :</td>
      <td valign="middle">&nbsp; </td>
    </tr>
    <tr>
      <td colspan="2" valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td valign="middle">Maths :</td>
      <td valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td valign="middle">Languages :</td>
      <td valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td valign="middle">Statistics :</td>
      <td valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td valign="middle">Magazines :</td>
      <td valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td height="4" colspan="2" valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td height="32" valign="middle">Reference :</td>
      <td valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td height="4" colspan="2" valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
    <tr>
      <td height="32" valign="middle">Total Books :</td>
      <td valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td height="4" colspan="2" valign="middle"><hr align="center" color="#000000" ></td>
    </tr>
  </table>
</div>
<div id="apDiv7" align="center">
  <p>Library Map</p>
  <p><img src="Images/Library_Map_Main_Floor.jpg" width="456" height="334"></p>
</div>
</body>
</html>


