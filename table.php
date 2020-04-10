<?php



$host = 'localhost:3308';  
$user = 'root';  
$pass = '';   
  
$conn = mysqli_connect($host, $user, $pass);

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}

echo 'Connected successfully';  


$sql="CREATE Database assignment";




if(mysqli_query($conn,$sql))
{
  echo "Database Assignment created successfully.";  
}
else
{  
  echo "Sorry, database creation failed ".mysqli_error($conn);  
}  


$sql="USE Assignment";



mysqli_query($conn,$sql);


$sql = "CREATE TABLE percent_calc(Reg_No INT,INT_301 INT, CSE_504 INT, CSE_507 INT, PRIMARY KEY (Reg_No)";

if(mysqli_query($conn,$sql))
{  
 echo "Table Percent_Calc created successfully";  
}
else
{  
echo "Could not create table: ". mysqli_error($conn);  
}

$conn->close();
?>