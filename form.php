<html>
<body  bgcolor="green"  text="white">

<?php

$user_name = "root";
$password = "";
$database = "tajhotels";
$host_name = "localhost"; 

$con=mysqli_connect($host_name, $user_name, $password, $database);


if(!$con) {
           die("Connection failed: " . mysqli_connect_error());
          }
echo "Connected successfully";

$n1=$_POST['fname'];
$n2=$_POST['lname'];
$n3=$_POST['phone'];
$n4=$_POST['email'];
$n5=$_POST['check_in_date'];
$n6=$_POST['check_in_month'];
$n7=$_POST['check_out_date'];
$n8=$_POST['check_in_month'];
$n9=$_POST['adults'];
$n10=$_POST['children'];
$n11=$_POST['suite'];


$sql = "INSERT INTO info (First_Name,Last_Name,Phone,Email,Check_In_Date,Check_In_Month,Check_Out_Date,Check_Out_Month,Adults,Children,Suite)
        VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11')";


if(mysqli_query($con, $sql)) {
                               echo "New record created successfully";
                             } 
else 
    {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

mysqli_close($con);


?>



</body>
</html>