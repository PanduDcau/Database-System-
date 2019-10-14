<?php


$severname="localhost";
$username="root";
$password="";
$dbname="school";

$conn=new mysqli($severname,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);

}

$Id=$_POST['Stu_Id'];
$name=$_POST['Name'];
$regyear=$_POST['Reg_year'];


$sql="select * from student where='$name' ";

$result=mysqli_query($conn,$sql); //call select* query here 

$reg="insert into student(stu_Id,Name,Reg_Year) values ('$Id','$name','$regyear')";
mysqli_query($conn,$reg);
echo "completed";



?>