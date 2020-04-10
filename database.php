<?php
$Reg_No=$_POST["RegNo"];
$INT_301=$_POST["Sub1"];
$CSE_504=$_POST["Sub2"];
$CSE_507=$_POST["Sub3"];
$Percentage=(($INT_301+$CSE_504+$CSE_507)/300)*100;



$conn=new mysqli('localhost:3308','root','','assignment');
if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connect_error);
}
else
{

	$stmt=$conn->prepare("insert into percent_calc(Reg_No, INT_301, CSE_504, CSE_507, Percentage) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("iiiii",$Reg_No, $INT_301, $CSE_504, $CSE_507, $Percentage);
	if($stmt->execute())
	{
	echo "Submitted Successfully...";
	echo "<br>";
	echo "<br>";
	echo "Percentage: ".$Percentage;

	}
	else
	{
		$response=mysqli_error($conn);
		echo $response;
	}
	echo "<br><br>";
	echo '<a href="/Project/final.php">submit another response...</a>';

	$stmt->close();
	$conn->close();

}
?>