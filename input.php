<?php
require 'db_connect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$nam=$_POST["name"];
	$city=$_POST["city"];
	$state=$_POST['state'];
	$pw1=$_POST["pass1"];
	$pw2=$_POST["pass2"];
	$ph=$_POST["phn"];
	$em=$_POST["mail"];
	$check="SELECT * FROM `agent` where email='$em'";
	$run=mysqli_query($conn,$check);
	$count=mysqli_num_rows($run);
	if($count==0)
	{

	if($pw1==$pw2)
	{

		$pass=md5($pw1);
	    $sql="insert into agent(name,email,password,phone,city,state) values ('$nam','$em','$pass','$ph','$city','$state')";
	    if($conn->query($sql)===true)
	    {
	    	?>
	    	<script type="text/javascript">
	        	alert("Congratulations!!! You have been successfully registered. Your account is right now deactivated, it will be activated after verifiation. Please try logging in after 24 hours.");
	        	window.location.href="index.html";
	    	</script>
	    	<?php
	    }
	    else
	    {
	        ?>
	        <script type="text/javascript">
	        	alert("error");	
	        	window.location.href="index.html";
	        </script>
	        <?php
	    }
	}
	else
	{
	    ?>
	    <script type="text/javascript">
	    	alert("Password do not match");
	    	window.history.back();
	    </script>
	    <?php 
	}

}
else
{
	?>
	<script type="text/javascript">
		alert("User already exists.");
		window.location.href="index.html";
	</script>
	<?php 
}
}
$conn->close();
?>
