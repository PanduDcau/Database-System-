
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
$Nic=$_POST['nic'];
$F_name=$_POST['name'];
$Start_date=$_POST['start_date'];
$Gender=$_POST['gender'];
$Date_of_Birth=$_POST['dob'];
$Salary=$_POST['salary'];
$Branch_No=$_POST['branch_no'];

$reg="insert into employee(emp_id,nic,name,start_date,gender,dob,salary,branch_no) values ('$E_no','$Nic','$F_name','$Start_date','$Gender','$Date_of_Birth','$Salary','$Branch_No')";
mysqli_query($conn,$reg);
echo "Entered Successfully";



?>