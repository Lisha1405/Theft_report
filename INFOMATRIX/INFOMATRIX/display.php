<style>

    /* Apply styles to the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    border-color: black;
  }
  
  /* Style the table header */
  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    border-color: black;
  }
  tr{
    border-color: black;
  }
  
  th {
    background-color: #f2f2f2;
  }
  
  /* Style alternate rows */
  tr:nth-child(even) {
    background-color: #f9f9f9;
  }
  
  /* Add some hover effect */
  tr:hover {
    background-color: #e5e5e5;
  }
    </style>
<?php
 include 'navbar.html'; 
$conn = new mysqli('localhost', 'root', '', 'property_stolen');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlb1 = "SELECT * FROM victim";
$result1 = $conn->query($sqlb1);
$sqlb2 = "SELECT * FROM report ";
$result2 = $conn->query($sqlb2);
$sqlb3 = "SELECT * FROM nature_of_property ";
$result3 = $conn->query($sqlb3);
$sqlb4 = "SELECT * FROM suspect ";
$result4 = $conn->query($sqlb4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stolen Property Information</title>
</head>
<body>

<h2>Victim Table</h2>

<?php

if ($result1->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>State</th>
                <th>Phone</th>
                <th>Occupation</th>
                <th>Nationality</th></tr>";

          
        
    while ($row = $result1->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["V_id"] . "</td>
                <td>" . $row["V_name"] . "</td>
                <td>" . $row["V_age"] . "</td>
                <td>" . $row["V_gender"] . "</td>
                <td>" . $row["V_state"] . "</td>
                
                 <td>" . $row["V_phone"] . "</td>
                <td>" . $row["V_occupation"] . "</td>
                <td>" . $row["V_nationality"] . "</td>
                </tr>"; 
            }

    
    echo "</table>";
} else {
    echo "0 results";
}


if ($result2->num_rows > 0) {
    echo "<h2>Report Table</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>DOF</th>
                <th>Report Status</th>

                <th>Stolen Date</th>
            </tr>";

    while ($row = $result2->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["R_id"] . "</td>
                <td>" . $row["DOF"] . "</td>
                <td>" . $row["R_Status"] . "</td>
                <td>" . $row["R_Stolen_Date"] . "</td>
                </tr>";
    }

    echo "</table>";
} else {
    echo "<h2>Report Table</h2>";
    echo "0 results";
}


if ($result3->num_rows > 0) {
    echo "<h2>Nature of Property Table</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Number</th>
                <th>Value</th>
            </tr>";

    while ($row = $result3->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["N_id"] . "</td>
                <td>" . $row["N_name"] . "</td>
                <td>" . $row["N__color"] . "</td>
                <td>" . $row["N_number"] . "</td>
                <td>" . $row["N_value"] . "</td>
                </tr>";
    }

    echo "</table>";
} else {
    echo "<h2>Nature of Property Table</h2>";
    echo "0 results";
}
$sqlb4 = "SELECT * FROM suspect";
$result4 = $conn->query($sqlb4);

if ($result4->num_rows > 0) {
    echo "<h2>Suspect Table</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Gender</th>
                <th>State</th>
                <th>Occupation</th>
                <th>Nationality</th>
             

            </tr>";

    while ($row = $result4->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["S_id"] . "</td>
                <td>" . $row["S_name"] . "</td>
                <td>" . $row["S_phone"] . "</td>
                <td>" . $row["S_age"] . "</td>
                <td>" . $row["S_gender"] . "</td>
                <td>" . $row["S_state"] . "</td>
                <td>" . $row["S_occupation"] . "</td>
                <td>" . $row["S_nationality"] . "</td>
                
                </tr>";
    }

    echo "</table>";
} else {
    echo "<h2>Suspect Table</h2>";
    echo "0 results";
}



$conn->close();
?>

</body>
</html>




