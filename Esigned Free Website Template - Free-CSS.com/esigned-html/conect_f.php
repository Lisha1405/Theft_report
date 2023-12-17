

<?php
 include 'navbar.html';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'property_stolen') or die("Connection failed: " . mysqli_connect_error());
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    // echo "Connected to database<br>";

    if (
        isset($_POST['firstname']) &&
        isset($_POST['a']) &&
        isset($_POST['g']) &&
        isset($_POST['s']) &&
        isset($_POST['ph']) &&
        isset($_POST['oc'])
    ) {
      $firstname = $_POST['firstname'];
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
      
      $suspect_name = $_POST['S_name'];
      $suspect_phone = $_POST['S_phone'];
      $suspect_age = $_POST['S_age'];
      $suspect_gender = $_POST['S_Gender'];
      $suspect_state = $_POST['S_State'];
      $suspect_occupation = $_POST['S_Occuaption'];
      $suspect_nationality = $_POST['S_Nationality'];
            

        $sql1 = "INSERT INTO victim (V_name, V_age,  V_gender, V_state, V_phone, V_occupation, V_nationality)
            VALUES ('$firstname', $age, '$gender', '$state', '$phone', '$occupation', '$nationality')";
            $sql2 = "INSERT INTO report (DOF, R_stolen_date)
             VALUES ('$dof', '$stolen_date')";
            $sql4 = "INSERT INTO suspect (S_name, S_phone, S_age, S_gender, S_state, S_occupation, S_nationality)
             VALUES ('$suspect_name', '$suspect_phone', $suspect_age, '$suspect_gender', '$suspect_state', '$suspect_occupation', '$suspect_nationality')";
    
    
        
        $sql3 = "INSERT INTO nature_of_property (N_name, N__color, N_number, N_value)
            VALUES ('$type', '$color', $number, $value)";

        $query1 = mysqli_query($conn, $sql1);
        $V_id = mysqli_insert_id($conn);
        $query2 = mysqli_query($conn, $sql2);
        $R_id = mysqli_insert_id($conn);
        $query3 = mysqli_query($conn, $sql3);
        $N_id = mysqli_insert_id($conn);
        $query4 = mysqli_query($conn, $sql4);
        $S_id = mysqli_insert_id($conn);

        if ($query1 && $query3&&$query2 &&$query4  ) {
            echo 'Successful';
        } else {
            echo 'Error occurred';
        }
    }
    // $V_id = "SELECT V_id FROM victim
    // ORDER BY V_id DESC
    // LIMIT 1";
    //  $query6 = mysqli_query($conn, $V_id);
    // $S_id ="SELECT S_id FROM suspect
    // ORDER BY S_id DESC
    // LIMIT 1";
 
    $primaryKey1 = $R_id ;

    // echo  $primaryKey1;
     // Replace with the actual primary key for Table1
     $primaryKey2 = $S_id; // Replace with the actual primary key for Table2
     $primaryKey3 = $N_id; // Replace with the actual primary key for Table3
     $primaryKey4 = $V_id; // Replace with the actual primary key for Table4

    // Insert data into RelationTable
     $sql5 = "INSERT INTO relation (R_id, S_id, N_id, V_id) 
           VALUES ('$primaryKey1', '$primaryKey2', '$primaryKey3', '$primaryKey4')";
            
             $query5 = mysqli_query($conn, $sql5);

             if ($query5  ) {
                 echo 'Successful';
             } else {
                 echo 'Error occurred';
             }


$query1 = mysqli_query($conn, $sql1);
    mysqli_close($conn);
}
?>
