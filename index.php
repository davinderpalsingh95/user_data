<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "user_data";

$conn = mysqli_connect($hostname, $username, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Database</title>
</head>
<style>
    h1 {
        text-align: center;
    }

    table {
        text-align: center;
        margin-left: 40%;
    }

    table,
    td,
    tr {
        border: solid red 2px;
    }

    td {
        padding: 20px;
    }
</style>

<body>
    <h1>Welcome to the user database website</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>City</th>
        </tr>
        <?php
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "</tr>";
            }
        }

        ?>
    </table>
</body>

</html>