

    <?php
    include 'navbar.html';
     
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'property_stolen') or die("Connection failed: " . mysqli_connect_error());
         
        if (!$conn) {
            echo("Database  not connected");
            die("Database connection failed: " . mysqli_connect_error());
        }
        else
        {
            echo("Database connected");
        }
        
        // echo "Connected to database<br>";

        if (
            isset($_POST['id']) &&
            isset($_POST['name']) &&
            isset($_POST['color']) &&
            isset($_POST['number']) &&
            isset($_POST['value']) 
        ) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $color = $_POST['color'];   
        $number = $_POST['number'];
        $value = $_POST['value'];
        
            

        $sql = "UPDATE nature_of_property SET  N_name = '$name',
        N__color = '$color', N_number= '$number', N_value = '$value' WHERE N_id = $id";
            $query1 = mysqli_query($conn, $sql);
            
            if ($query1  ) {
                echo 'Successful';
            } else {
                echo 'Error occurred'. mysqli_error($conn);;
            }
        }

        mysqli_close($conn);
    }
    ?>
