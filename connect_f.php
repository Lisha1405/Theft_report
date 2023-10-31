<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $conn=mysqli_connect('localhost','root','','property_stolen') or die("Connection failed:".mysqli_connect_error());}
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
$stolen_date = $_POST['Stolen date'];
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

// Check if the "showDetails" checkbox is checked
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
if(isset($_POST['firstname'])&&isset($_POST['email']))

// Now you have all the variables from the form, including the additional suspect details section.




// Now you have all the variables from the form submission.

?>
<!-- if(isset($_POST['name'])&&isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
   
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    $query = mysqli_query($conn, $sql);
    

    if($query){
        echo 'Entry Succesful';}
        else{
            echo 'Error occured';}
} -->