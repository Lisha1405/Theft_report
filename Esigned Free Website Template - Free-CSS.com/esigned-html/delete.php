

<?php
 include 'navbar.html';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'property_stolen') or die("Connection failed: " . mysqli_connect_error());
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
      

    if (
        isset($_POST['delid']) &&
        isset($_POST['deltable']) &&
        isset($_POST['delidcol'])
        
    ) {
      $delid = $_POST['delid'];
      $deltable = $_POST['deltable'];
      $delidcol = $_POST['delidcol'];

      
            

        
      $sql = "DELETE FROM $deltable WHERE $delidcol = $delid";  // Corrected SQL syntax

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
