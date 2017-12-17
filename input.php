<?php
if($_SERVER['REQUEST_METHOD']=='POST')
	{	
		$field=$_POST['field_name'];

		$conn=mysqli_connect("localhost",'root','','User_Data');
		if($field=="Name")
		{	$name=$_POST['name'];
			$sql="insert into user_input(name) values('" . $name . "')";
			mysqli_query($conn,$sql);
			mysqli_close($conn);
			echo "<script>window.close();</script>";
		}

		if(mysqli_num_rows(mysqli_query($conn,"SELECT MAX(id) FROM user_input"))>0)
			{	
				$result=mysqli_query($conn,"SELECT MAX(id) FROM user_input");
				$idno=mysqli_fetch_array($result)[0];


			}
		else
			$idno=1;
		if($field=="Age")
		{	
			$age=$_POST['age'];
			$sql="update user_input set age ='$age' where id='$idno' ";
			if(mysqli_query($conn,$sql))
				;
			else
				echo mysqli_error($conn);
			mysqli_close($conn);
			echo "<script>window.close();</script>";

		}
		if($field=="Phone")
		{	
			$phone=$_POST['phone'];
			$sql="update user_input set phone = '$phone' where id='$idno' ";
			if(mysqli_query($conn,$sql))
				;
			else
				echo mysqli_error($conn);
			mysqli_close($conn);
			echo "<script>window.close();</script>";
		}
		if($field=="Aadhar")
		{	
			$aadhar=$_POST['aadhar'];
			$sql="update user_input set aadhar = '$aadhar' where id='$idno' ";
			if(mysqli_query($conn,$sql))
				;
			else
				echo mysqli_error($conn);
			mysqli_close($conn);
			echo "<script>window.close();</script>";
		}
		if($field=="Invest_amount")
		{	
			$invest_amount=$_POST['invest_amount'];
			$sql="update user_input set invest_amount = '$invest_amount' where id='$idno' ";
			if(mysqli_query($conn,$sql))
				;
			else
				echo mysqli_error($conn);
			mysqli_close($conn);
			echo "<script>window.close();</script>";
		}
		if($field=="Risk_level")
		{	
			$risk_level=$_POST['risk_level'];
			$sql="update user_input set risk_level = '$risk_level' where id='$idno' ";
			if(mysqli_query($conn,$sql))
				;
			else
				echo mysqli_error($conn);
			mysqli_close($conn);
			echo "<script>window.close();</script>";
		}
		if($field=="Invest_horizon")
		{	
			$invest_horizon=$_POST['invest_horizon'];
			$sql="update user_input set invest_horizon = '$invest_horizon' where id='$idno' ";
			if(mysqli_query($conn,$sql))
				;
			else
				echo mysqli_error($conn);
			mysqli_close($conn);
			echo "<script>window.close();</script>";
		}
		if($field=="Portf_type")
		{	
			$portf_type=$_POST['portf_type'];
			$sql="update user_input set portf_type = '$portf_type' where id='$idno' ";
			if(mysqli_query($conn,$sql))
				;
			else
				echo mysqli_error($conn);
			mysqli_close($conn);
			echo "<script>window.close();</script>";
		}



}else
header("location:index.php");
?>
