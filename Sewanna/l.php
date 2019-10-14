
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="company1";

// Create connection
$conn = mysqli_connect($servername, $username, '',$dbname);

$query = "INSERT INTO branch (branch_no, address, distict) VALUES(40000,'Colombo','Nugegoda')";

if( $conn)
{
    mysqli_query($conn, $query);
    echo "Success";
}
else
{
    echo "error";
}


?>