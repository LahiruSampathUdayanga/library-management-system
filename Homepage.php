<html>
<head>
<title>HOME PAGE</title>
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
	height:600px;
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
	left:852px;
	top:253px;
	width:327px;
	height:122px;
	z-index:3;
}
#apDiv6 {
	position:absolute;
	left:212px;
	top:254px;
	width:575px;
	height:200px;
	z-index:4;
	background-color:#FFFFFF;
}
#apDiv7 {
	position:absolute;
	left:298px;
	top:580px;
	width:779px;
	height:215px;
	z-index:5;
}
.aaaaaaaa{}
#slide{
	width:625px;
	height:300px;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
}
.left_holder{
	width:40px;
	height:40px;
	left:50px;
	top:100px;
	position:absolute;
}

.right_holder{
	width:40px;
	height:40px;
	left:500px;
	top:100px;
	position:absolute;	
}
-->
</style>
<script type="text/javascript" src="JS/slide_show.js"></script>
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
            <td width="98"></td>
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


<div id="apDiv3" align="center" >
</div>


<!--LOGGIN PANNEL-->
<div id="apDiv5">
  <fieldset>
  <legend>Login Here</legend>
  <form action="DATABASE/login.php" method="post">
    <table width="305" border="0">
      <tr>
        <td width="99">Username :</td>
        <td width="190"><input type="text" name="uname" /></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" name="pass" /></td>
      </tr>
    </table>
    <p>
      <input type="submit" name="login" value="Login"/>
      <a href="Register.php"> Register? </a></p>
  </form>
  </fieldset>
</div>
<!--IMAGE SLIDE SHOW-->
<table width="575px" height="200px">
<tr><td>
		<div id="apDiv6"><img src="Images/Image Slider/img1.jpg" id="slide" width="621" height="277" onMouseOver="pause()" onMouseOut="start()"  >
        </div>        
</td></tr>
</table>
<!--MISSION AND VISION-->
<div id="apDiv7" align="center">
  <fieldset>
  <h1>Vision</h1>
  <h3>Serve who needs to be served.  </h3>
  <hr>
  <h1> Mission</h1>
  <h3>Become The Best Library in University System
  </h3>
  </p>
  </fieldset>
</div>
</body>
</html>
