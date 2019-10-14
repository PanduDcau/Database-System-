<?php


$severname="localhost";
$username="root";
$password="";
$dbname="company1";

$conn=new mysqli($severname,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);

}

$Owner=$_POST['ownerId'];
$Type=$_POST['type'];
$Branch=$_POST['branch_no'];

$reg1="insert into owner(ownerId,type,branch_no) values ('$Owner','$Type','$Branch')";
mysqli_query($conn,$reg1);

echo "Entered Successfully";

$Person=$_POST['personId'];
$Owner=$_POST['ownerId'];
$Fname=$_POST['f_name'];
$Lname=$_POST['l_name'];
$Nic=$_POST['Nic'];
$Email=$_POST['email'];
$Address=$_POST['address'];
$Contact=$_POST['contact'];

$reg2="insert into person (personId,ownerId,f_name,l_name,Nic,email,address,contact) values ('$Person','$Owner','$Fname','$Lname','$Nic','$Email','$Address','$Contact')";
mysqli_query($conn,$reg2);
echo "Entered Successfully";




?>