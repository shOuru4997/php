<?php
$servername   = "sql6.freesqldatabase.com";
$database = "sql6426576";
$username = "sql6426576";
$password = "ymFVYig4QH";

// Creating connection
$conn = new mysqli($servername, $username, $password, $database);
// Checking connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Extraction of Data From MySQL Database</h1>";
$sql_q1 = "SELECT * FROM test";
if($result = mysqli_query($conn, $sql_q1)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Address</th>";
                echo "<th>Company Name</th>";
                echo "<th>Pin Code</th>";
                echo "<th>Additional Details</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Company Name'] . "</td>";
                echo "<td>" . $row['Pin Code'] . "</td>";
                echo "<td>" . $row['Additional Details'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql_q1. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
