<?php


$severname="localhost";
$username="root";
$password="";
$dbname="company1";

$conn=new mysqli($severname,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);

}

$Property=$_POST['property_no'];
$Address=$_POST['address'];
$district=$_POST['district'];
$B_no=$_POST['branch_no'];
$Owner=$_POST['owner_id'];
$Type=$_POST['Type'];

$reg="insert into property (property_no,address,district,branch_no,owner_id,Type) values ('$Property','$Address','$district','$B_no','$Owner','$Type')";
mysqli_query($conn,$reg);
echo "Entered Successfully";



?>