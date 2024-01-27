<?php
		require "connection.php";
		//echo"naimish";
		if(isset($_REQUEST['email'])){
			$email=$_REQUEST['email'];
			$password=$_REQUEST['password'];
			$webname=$_REQUEST['webname'];
			$softname=$_REQUEST['softname'];
			
			$query="INSERT INTO `user`(`email`,`password`,`webname`,`softname`)VALUES('$email','$password','$webname','$softname')";
			$run=mysqli_query($conn,$query);
			if($run){
				//header("location:);
			echo "successfully";
			}else{
				echo"error";
			}
		}
				?>