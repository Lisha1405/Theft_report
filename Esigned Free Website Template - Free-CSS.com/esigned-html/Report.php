<?php
 include 'navbar.html';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'property_stolen') or die("Connection failed: " . mysqli_connect_error());
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    // echo "Connected to database<br>";

    if (
        isset($_POST['id']) &&
        isset($_POST['dof']) &&
        isset($_POST['status']) &&
        isset($_POST['stolen_date']) &&
        isset($_POST['stolen_time']) 
    ) {
      $id = $_POST['id'];
      $dof = $_POST['dof'];
      $status = $_POST['status'];   
      $stolen_date = $_POST['stolen_date'];
      $stolen_time = $_POST['stolen_time'];
      
            

      $sql = "UPDATE report SET  DOF = '$dof',
       R_status = '$status', R_Stolen_Date= '$stolen_date', R_Stolen_time = '$stolen_time' WHERE R_id = $id";
        $query1 = mysqli_query($conn, $sql);
        
        if ($query1  ) {
            echo 'Successful';
        } else {
            echo 'Error occurred';
        }
    }

    mysqli_close($conn);
}
?>
