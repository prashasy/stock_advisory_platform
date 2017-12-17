<?php

	$conn=mysqli_connect("pointk2.database.windows.net; Database = User_Data",'prashasy','@Inteli007');
	if($conn)
	{
		
			echo "Database Created Successfully !! <br>";
			mysqli_select_db($conn, "User_Data");
			$sql="create table user_input(id int auto_increment primary key, name varchar(50) not null,age int not null, phone bigint(10) not null, aadhar bigint(12) not null,invest_amount bigint(10) not null, risk_level int not null, invest_horizon int not null, portf_type int not null )";
			if(mysqli_query($conn, $sql))
				echo "Table user_input created Successfully !! <br>";

		

	}
	mysqli_close($conn);

?>