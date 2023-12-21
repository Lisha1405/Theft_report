<?php
 include 'navbar.html';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'property_stolen') or die("Connection failed: " . mysqli_connect_error());
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    //  echo "Connected to database";

    if (
        isset($_POST['id']) &&
        isset($_POST['name']) &&
        isset($_POST['age']) &&
        isset($_POST['gender']) &&
    
        isset($_POST['phone'])&&
        isset($_POST['occ'])&&
        isset($_POST['nat'])
    ) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $age = $_POST['age'];   
      $gender = $_POST['gender'];
      
      $phone = $_POST['phone'];
      $occ = $_POST['occ'];
      $nat = $_POST['nat'];

      
            

      $sql = "UPDATE suspect SET  S_name = '$name',
       S_age = '$age', S_gender= '$gender',  S_phone = '$phone', S_occupation = '$occ'
       , S_nationality = '$nat'
       WHERE S_id = $id";
        $query1 = mysqli_query($conn, $sql);
        
        if ($query1  ) {
            echo ' Data updated Successful';
        } else {
            echo 'Error occurred';
        }
    }

    mysqli_close($conn);
}
?>
