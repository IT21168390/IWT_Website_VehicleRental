<?php
 require "config.php";
 
 if(isset($_POST['pay'])){
	 
	 $radio = $_POST['Journey'];
	 $s_vehicle = $_POST['select_vehicle'];
	 $p_location = $_POST['Pickup_Location'];
	 $p_date = $_POST['Pickup_Date'];
	 $d_location = $_POST['Drop_Location'];
	 $p_time = $_POST['Pickup_Time'];
	 $p_detail = $_POST['Payment_Details'];
	 
 }
 $sql="INSERT INTO quickjourney(journeyType,selected_vehicle,pickup_location,pickup_date,drop_location,pickup_time,payment)VALUES('$radio','$s_vehicle','$p_location','$p_date','$d_location','$p_time','$p_detail')";
 
 if($newConnection->query($sql))
 {
	 echo "Inserted Successfully!!";
	 
	 header("Location:../html/paymentsuccess.html");
 }
 else
 {
	 echo "Error".$newConnection->error;
 }

$newConnection->close();

?>