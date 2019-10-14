<?php


$severname="localhost";
$username="root";
$password="";
$dbname="company1";

$conn=new mysqli($severname,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);

}

$Cl_no=$_POST['client_no'];
$Nic=$_POST['nic'];
$F_name=$_POST['first_name'];
$L_name=$_POST['last_name'];
$Email=$_POST['email'];

$reg="select *from client where client_no='$Cl_no' ";

$result=mysqli_query($conn,$reg);

echo "Entered Successfully";



?>