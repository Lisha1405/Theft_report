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
    <?php include 'navbar.html'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $conn=mysqli_connect('localhost','root','','property_stolen') or die("Connection failed:".mysqli_connect_error());}
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    echo "Connected to database<br>";
// Variables from the main section of the form

$lastname = $_POST['firstname'];
$age = $_POST['a'];
$gender = $_POST['g'];
$state = $_POST['s'];
$phone = $_POST['ph'];
$occupation = $_POST['oc'];
$nationality = $_POST['na'];
$dof = $_POST['DOF'];
$stolen_date = $_POST['Stolen_date'];
// $stolen_time = $_POST['Stolen time'];
$type = $_POST['type'];
$color = $_POST['color'];
$number = $_POST['number'];
$value = $_POST['value'];

// Variables for the additional suspect details section
$suspect_name = $_POST['S_name'];
$suspect_phone = $_POST['S_phone'];
$suspect_age = $_POST['S_age'];
$suspect_gender = $_POST['S_Gender'];
$suspect_state = $_POST['S_State'];
$suspect_occupation = $_POST['S_Occuaption'];
$suspect_nationality = $_POST['S_Nationality'];

//Check if the "showDetails" checkbox is checked
if (isset($_POST['showDetails']) && $_POST['showDetails'] === 'on') {
    // Variables from the additional suspect details section
    $suspect_name = $_POST['S_name'];
    $suspect_phone = $_POST['S_phone'];
    $suspect_age = $_POST['S_age'];
    $suspect_gender = $_POST['S_Gender'];
    $suspect_state = $_POST['S_State'];
    $suspect_occupation = $_POST['S_Occuaption'];
    $suspect_nationality = $_POST['S_Nationality'];
} else {
    // Handle the case where the "showDetails" checkbox is not checked
    $suspect_name = "";
    $suspect_phone = "";
    $suspect_age = "";
    $suspect_gender = "";
    $suspect_state = "";
    $suspect_occupation = "";
    $suspect_nationality = "";
}
if (
   
    isset($_POST['lastname']) &&
    isset($_POST['a']) &&
    isset($_POST['g']) &&
    isset($_POST['s']) &&
    isset($_POST['ph']) &&
    isset($_POST['oc']) &&
    isset($_POST['na']) &&
    isset($_POST['DOF']) &&
    isset($_POST['Stolen date']) &&
    isset($_POST['type']) &&
    isset($_POST['color']) &&
    isset($_POST['number']) &&
    isset($_POST['value']) &&   
    isset($_POST['showDetails']) ){
    $sql1 = "INSERT INTO Victim (V_name, V_age,  V_gender, V_state, V_phone, V_occupation, V_nationality)
        VALUES ('$lastname', $age, '$gender', '$state', '$phone', '$occupation', '$nationality')";
        $sql2 = "INSERT INTO report (DOF, R_stolen_date)
        VALUES ('$dof', '$stolen_date')";
        $sql3 = "INSERT INTO nature_of_property (N_name, N_color, N_number, N_value)
        VALUES ('$type', '$color', $number, $value)";
        $sql4 = "INSERT INTO suspect (S_name, S_phone, S_age, S_gender, S_state, S_occupation, S_nationality)
        VALUES ('$suspect_name', '$suspect_phone', $suspect_age, '$suspect_gender', '$suspect_state', '$suspect_occupation', '$suspect_nationality')";
        
        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        
        if (mysqli_query($conn, $sql1)) {
            echo 'Query 1 Successful<br>';
        } else {
            echo 'Error in query 1: ' . mysqli_error($conn) . '<br>';
        }
        
        if (mysqli_query($conn, $sql2)) {
            echo 'Query 2 Successful<br>';
        } else {
            echo 'Error in query 2: ' . mysqli_error($conn) . '<br>';
        }
        
        if (mysqli_query($conn, $sql3)) {
            echo 'Query 3 Successful<br>';
        } else {
            echo 'Error in query 3: ' . mysqli_error($conn) . '<br>';
        }
        
        if (mysqli_query($conn, $sql4)) {
            echo 'Query 4 Successful<br>';
        } else {
            echo 'Error in query 4: ' . mysqli_error($conn) . '<br>';
        }     

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

<h2>Stolen Property List</h2>

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
    echo "<h2>Victim Table</h2>";
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
                <th>R_id</th>

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
                <td>" . $row["R_id"] . "</td>
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




