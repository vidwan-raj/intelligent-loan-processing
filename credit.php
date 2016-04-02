<?php
session_start();
include('db.php');
?>
<?php
$income1="";
// create table creditscore fields: `u_id`, `income_value`, `amountloan`, `creditbalance`, `emi`, `no_loan`
// fetch income from income table
// fetch u_id from session
/* $sqla="SELECT * FROM `creditscore` WHERE `u_id`=...";
  if($result=$conn->query($sqlb))
	{
		if($result->num_rows>0)
		{
			if($row = $result->fetch_assoc())
			{
				$income=$row['income_value'];
			}
		}
	}
	
	
	inserting predefined values into creditscore table
$sqle="UPDATE `creditscore` SET `income_value`=$income,`amountloan`=0.16*$income,`creditbalance`=0.1*$income,`emi`=0.02*$income,`no_loan`=1 WHERE `u_id`=...";
   if(mysql_query($sqle))
{
	// echo "succesfully inserted prdefined values";
}
*/


  $sqlb="SELECT * FROM `creditscore` WHERE `u_id`=6";
  if($result=$conn->query($sqlb))
	{
		if($result->num_rows>0)
		{
			if($row = $result->fetch_assoc())
			{
				$income1=$row['income_value'];
				$a=$row['no_loan'];
				$b=$row['amountloan'];
				$c=$row['creditbalance'];
				$d=$row['emi'];
			}
		}
	}
	
	
	
	function credit($a,$b,$c,$d,$income)
	{
	if($a==0 && $b==0 && $c==0 && $d==00)
		return 5;
	else if($a==0 && $b==0 && $c<=(0.1*$income) && $d<=(0.02*$income))
		return 4;
	else if($a==1 && $b<=(0.16*$income) && $c==0 && $d==0)
		return 4;
	else if($a==1 && $b<=(0.16*$income) && $c<=(0.1*$income) && $d==0)
		return 3;
	else if($a==1 && $b<=(0.16*$income) && $c==0 && $d<=(0.02*$income))
		return 3;
	else return 2;
	}
	
	
		$score=credit($a,$b,$c,$d,$income1);
		echo $score;
		
		
	//if($result=$conn->query("UPDATE `customer` SET `credit`=$score WHERE `u_id`=..."))
		echo "<br>credit calculated"
  
  ?>
  
  
  