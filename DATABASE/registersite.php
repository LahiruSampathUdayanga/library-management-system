<?php
include('database_connect.php');
if(isset($_POST['submit']))
{
	date_default_timezone_set('Asia/Colombo');
	$first_name=strip_tags($_POST['fname']);
	$last_name=strip_tags($_POST['lname']);
	$month=strip_tags($_POST['months']);
	$day=strip_tags($_POST['days']);
	$year=strip_tags($_POST['year']);
	$age=strip_tags($_POST['age']);
	$status=strip_tags($_POST['member']);
	$id_number=strip_tags($_POST['nic']);
	$gender=strip_tags($_POST['gender']);
	$username=strip_tags($_POST['username']);
	$conusername=strip_tags($_POST['reusername']);
	$password=strip_tags($_POST['pass']);
	$conpassword=strip_tags($_POST['repass']);
	
			//encrypt password
			$password1 = md5($password);
			$conpassword1 = md5($conpassword);
	$dob=$year."-".$month."-".$day;
	
	$date = date("y-m-d");
	
if($first_name&&$last_name&&$status&&$id_number&&$username&&$conusername&&$password&&$conpassword)
{
	if($username==$conusername)
	{
		if($password==$conpassword)
			{
				//check char length of username & fullname
				if(strlen($username)>=21||strlen($username)<=0)
				{
				 echo '<script type="text/javascript">
							alert ("Your User Name Between The Character 1-21");
							window.location="../Register.php";
						</script>';
				}
				else
				{
				//check password
					if(strlen($password)>=11||strlen($password)<=0)
					{
					echo '<script type="text/javascript">
							alert ("Your Password Is Too Long\nIt Must Be In Characters 1-10");
							window.location="../Php/RegiterForm.php";
							</script>';
					}
					else
					{
					
					mysql_query("INSERT INTO register 	VALUES('','$first_name','$last_name','$dob','$age','$status','$id_number','$gender','$username','$password1','$date')");
					echo '<script type="text/javascript">
					alert ("You have been registered! \n Return To Login Page");
					window.location="../Homepage.php";
					</script>';
					}
				}
			}
			else
			{
			echo '<script type="text/javascript">
					alert ("sorry your password don\'t match \n Plese correct Password");
					window.location="../Register.php";
					</script>';
			}
	}
	else
	{
	echo '<script type="text/javascript">
			alert ("sorry your Username don\'t match \n Plese correct Username");
		    window.location="../Register.php";
			</script>';
	
	}
}
else
{
echo '<script type="text/javascript">
		alert ("Please Fill In All \n Go To Register page");
		window.location="../Register.php";
	  </script>';

}

}
	
?>
<html><a href="../Homepage.php"</html>