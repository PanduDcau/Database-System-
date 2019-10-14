<?php


$severname="localhost";
$username="root";
$password="";
$dbname="company1";

$conn=new mysqli($severname,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);

}

$E_no=$_POST['emp_id'];

$reg="delete from employee where emp_id='$E_no' ";

$result=mysqli_query($conn,$reg);
echo "Deleted Successfully";

?>