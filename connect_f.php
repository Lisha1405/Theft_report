<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $conn=mysqli_connect('localhost','root','','property_stolen') or die("Connection failed:".mysqli_connect_error());}
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    echo "Connected to database<br>";
// Variables from the main section of the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
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
    isset($_POST['firstname']) &&
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
    $sql1 = "INSERT INTO victim (V_name, V_age, , V_gender, V_state, V_phone, V_occupation, V_nationality)
        VALUES ('$firstname', '$lastname', $age, '$gender', '$state', '$phone', '$occupation', '$nationality')";
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




?>
