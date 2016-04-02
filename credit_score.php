<?php
session_start();
include('db.php');
$username=$_SESSION['sid'];

$sqle="SELECT * FROM `loan` WHERE email='$username'";

if($result=$conn->query($sqle))
{
	$no_of_loans=$result->num_rows;
	$credit=0;
	while($row = $result->fetch_assoc())
	{
		$loan_no=$row['loan_id'];
		$sql1="SELECT * FROM `bank_history` WHERE loan_id='$loan_no'";
		if($result1=$conn->query($sql1))
		{
			if($row1 = $result1->fetch_assoc())
			{
				 $paid=$row1['paid_emi'];
				 $missed=$row1['missed_emi'];
				$credit=$credit+($paid/($paid + $missed));
			}
		}
	}
	$credit=($credit/$no_of_loans)*5;
	$sql2="UPDATE `customer` SET `credit`='$credit' WHERE email='$username'";
	if($result2=$conn->query($sql2))
	{
		$location="das.php";
		header("Location:$location");
        
	}
}
else
	echo "not possible";

?>


