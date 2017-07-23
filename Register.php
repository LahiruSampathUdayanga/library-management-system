<html>
<head>
<title>REGISTER</title>
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
.style1 {
	font-size: xx-large;
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
            <td width="98">&nbsp;</td>
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

<!--RAGISTATION FORM-->
<div id="apDiv3" align="center" >
<form action="DATABASE/registersite.php" method="post">
	<table width="600" border="0">
      <tr>
        <td colspan="2"><div align="center"><span class="style1">Registration Form</span></div></td>
      </tr>
      <tr>
        <td width="295"><div align="right">First Name :</div></td>
        <td width="295"><label>
          <input type="text" name="fname" id="fname">
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Last Name :</div></td>
        <td><label>
          <input type="text" name="lname" id="lname">
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Birthday :</div></td>
        <td><label>
        
<script type="text/javascript">        
window.onload=initForm;

function initForm()
{
document.getElementById("months").selectedIndex=0;
document.getElementById("months").onchange=populatedays;
}

function populatedays()
{
var monthsdays=new Array(31,28,31,30,31,30,31,31,30,31,30,31);
var monthsStr=this.options[this.selectedIndex].value;

if(monthsStr != "")
{
var themonths=parseInt(monthsStr);

document.getElementById("days").options.length=0;
for(var i=0; i<monthsdays[themonths]; i++)
{
document.getElementById("days").options[i]=new Option(i+1);
}
}

}
</script>
          
          <select name="months" id="months">
            <option value="">MONTH</option>
            <option value="0">January</option>
            <option value="1">February</option>
            <option value="2">March</option>
            <option value="3">April</option>
            <option value="4">May</option>
            <option value="5">June</option>
            <option value="6">July</option>
            <option value="7">August</option>
            <option value="8">September</option>
            <option value="9">October</option>
            <option value="10">November</option>
            <option value="11">December</option>
          </select>
          
          <select name="days" id="days">
            <option>DAY</option>
            </select>
          </select>
          
          <select name="year" id="year">
          <option selected>YEAR</option>
          <option value="1980">1980</option>
          <option value="1981">1981</option>
          <option value="1982">1982</option>
          <option value="1983">1983</option>
          <option value="1984">1984</option>
          <option value="1985">1985</option>
          <option value="1986">1986</option>
          <option value="1987">1987</option>
          <option value="1988">1988</option>
          <option value="1989">1989</option>
          <option value="1990">1990</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
          <option value="1994">1994</option>
          <option value="1995">1995</option>
          <option value="1996">1996</option>
          <option value="1997">1997</option>
          <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Age :</div></td>
        <td><label>
          <input type="text" name="age" id="age">
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Membership :</div></td>
        <td><label>
          <select name="member" id="member">
          	<option selected>Member</option>
            <option value="Student">Student</option>
            <option value="Citizen">Citizen</option>
            <option value="Visitor">Visitor</option>
                              </select>
        </label></td>
      </tr>
      <tr>
        <td><div align="right">NIC :</div></td>
        <td><label>
          <input type="text" name="nic" id="nic">
        v</label></td>
      </tr>
      <tr>
        <td><div align="right">Gender : </div></td>
        <td><label>
          <input type="radio" name="gender" value="Male" id="RadioGroup1_0">
Male</label>
          <br>
          <label>
          <input type="radio" name="gender" value="Female" id="RadioGroup1_1">
Female</label></td>
      </tr>
      
      <tr>
        <td><div align="right">Username :</div></td>
        <td><label>
          <input type="text" name="username" id="username">
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Confirm Username :</div></td>
        <td><label>
          <input type="text" name="reusername" id="reusername">
        </label></td>
      </tr>

      <tr>
        <td><div align="right">Password :</div></td>
        <td><input type="password" name="pass" id="pass"></td>
      </tr>
      <tr>
        <td><div align="right">Confirm Password :</div></td>
        <td><label>
          <input type="password" name="repass" id="repass">
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label></label></td>
      </tr>
    </table>
    <label></label>
    <p>
      <label></label>
      <input type="submit" name="submit" id="Register" value="Register">
      <label>
      <input type="reset" name="Reset" id="Reset" value="Reset">
      </label>
      <br>
    </p>
</form>
</div>

</body>
</html>


