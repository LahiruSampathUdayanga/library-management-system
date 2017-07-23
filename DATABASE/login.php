
<?php
session_start();
include('database_connect.php');
if(isset($_POST['login']))
{
 	$username=strip_tags($_POST['uname']);
	$password=strip_tags($_POST['pass']);
	
	if($username&&$password)
	{
	$query = mysql_query("SELECT * FROM register WHERE username='$username'");
		
			if($username==admin&&$password==admin123)
			{
				header("location:../admin/admin.php");
				
				$_SESSION['username']=$username;
			}
			else
			{	
	
				$numrows = mysql_num_rows($query);
		
				if($numrows!=0)
				{
					//Code To Login
					while($row = mysql_fetch_assoc($query))
					{
					$dbusername = $row['username'];
					$dbpassword = $row['password'];	
					}
			
					$password=md5($password);
			
					//Check to See If They Match!
						if($username==$dbusername&&$password==$dbpassword)
						{
						header("location:../Library.php");
				
						$_SESSION['username']=$username;
						}
						else
						{
						echo "<script type='text/javascript'>
						alert ('Your Password is incorect');
						window.location='../Homepage.php';
						</script>";
						}
				}
				else
				{
					echo "<script type='text/javascript'>
					alert ('Your User Name is incorect');
					window.location='../Homepage.php';
					</script>";
				}
			}
	}
	else
	{	
		echo "<script type='text/javascript'>
				alert ('Please Enter User Name or Password');
				window.location='../Homepage.php';
			</script>";
		
	}
}
?>
