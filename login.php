<?php 
require 'db_connect.php';
session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$password=md5($pass);
	
	$search="SELECT * FROM `agent` where email='$email' AND Status='Active'	";
	$run=mysqli_query($conn,$search);
	$result=mysqli_fetch_assoc($run);


	if($result)
	{
		$_SESSION['id']=$result['id'];
		if($result['password']==$password)
		{

			echo "string";
			?>
			<script type="text/javascript">
				window.location.href='dashboard/index.php';
			</script>
			<?php
		}
		else
		{
			?><script type="text/javascript">
			alert("Wrong Credentials!!");
			window.history.back();
		 </script>
		 <?php
		 }
		
	}
	else
	{
		?>
			<script type="text/javascript">
				alert("Wrong Credentials!!");
				window.history.back();
			</script>
		<?php
		
	}
}
?>