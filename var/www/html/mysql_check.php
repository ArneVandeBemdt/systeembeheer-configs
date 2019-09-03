<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mysql_check</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "PW4mysql";
        $dbname = "check";

        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Check connection
        if($conn->connect_error){ 
            echo "Connection failed: " + $conn->connect_error;
        }

        $sql = "SELECT * FROM log ORDEr BY id DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo $row["text"];
            }
        } else {
            echo "0 results";
        }

        $conn->close();
    ?>

</body>
