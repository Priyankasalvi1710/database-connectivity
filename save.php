<?php

$server_name = "localhost"
$email = "root";
$password = "";
$database_name = "login";

$con = mysqli_connect($server_name, $email, $password, $database_name);

if(!$con)
{
    echo "not connected";
}
if(insert($_POST['submit']))
{
    $email = $_POST['eamil1'];
    $password1 = $_POST['password1']

    $sql_query = "INSERT INTO save (email1,password1)
	 VALUES ('$email1','$password1')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New save inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>