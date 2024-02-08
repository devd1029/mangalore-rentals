<?php

$con = mysqli_connect("localhost","keerthan095","1029DEVd@tt.","mangalorerentals");
$km=$_POST['km'];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
		  $query= mysqli_query($con,"SELECT * From price WHERE km='$km'");
		$numrows = mysqli_num_rows($query);
		if ($numrows!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				echo '<a  data-toggle="modal" style="cursor: pointer;"data-target="#cabrent"><li class="list-group-item"><img style="float:left;width:70px" src="img/vehicletype/'.$row['taxi_id'].'.jpg"><b>'.$row['taxi_type'].'</b><span>   Price : <b>'.$row['price'].'</b> <br>KM : <b>'.$row['km'].'</b>   Time : <b>'.$row['hours'].' Hr</b></span></li></a>';
			}
		}	
  }
?>