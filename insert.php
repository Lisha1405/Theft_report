<!DOCTYPE html>
<html>
    
<?php include 'navbar.html'; ?>

<head>
    <style>
           

        body {
            display: grid;
            justify-content: center;
            align-items: center;  
            background-image: url("https://i.pinimg.com/564x/e2/bd/9d/e2bd9d02fe736ac633db47c7b57ced35.jpg");
        
            height: 100vh;
            margin: 0;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
            
        }

        table {
            background-color:lightblue;
            width: 1020px;
            /* Set the width of the template */
        }

        td,
        th {
            color: rgb(0, 0, 0);
            font-size: 20px;
            padding: 10px;

        }

        .row {
            background-color:lightblue;
            text-align: left;

        }

        .al {
            position: relative;
            text-align: right;
        }

        .td1 {
            text-align: right;
        }

        .td2 {
            text-align: left;
            width: 25px;
        }

        .td3 {
            padding: 20px;
        }

        sub {
            background-color: rgb(134, 209, 134);
        }

        a:link,
        a:visited {
            background-color:light blue;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover,
        a:active {
            background-color: rgb(70, 150, 140);
            float: right;
        }

        .a1:link,
        .a1:visited {
            background-color: #fa1f1f;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .a1:hover,
        .a1:active {
            background-color:white;
            float: right;
        }
    </style>
</head>

<body>
    <form action="conect_f.php" method="POST">
        <div class="de">

    </div>
    <div>
        <table>

            <tr class="row">
                <td colspan="30">
                    FILE FIR
                </td>
            </tr>
            <tr>
                <td>
                    <span style="font-size: 20px; text-align: center;font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 200;">DETAILS OF COMPLAINT/INFORMATION TO POLICE:</span>
                </td>
            </tr>
            <tr>
                <td class="td2">
                    First name
                </td>

                
            </tr>
            <tr>

                
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="firstname" id="firstname" placeholder="First Name">
                    </label>
                </td>

            </tr>

            <tr>
                <td class="td2"> Age</td>
                <td class="td2">
                    Gender
                </td>
            </tr>
            <tr>
                <td class="td2">

                    <label>
                        <input type="number" name="a" id="a" placeholder="Age">
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="g" id="g" placeholder="Gender">
                    </label>
                </td>
            </tr>

            <tr>
                <td class="td2">
                    State:
                </td>
                <td class="td2">
                    Phone no:
                </td>
            </tr>
            <tr>
                <td class="td2">
                    <label>
                        <input type="text" name="s" id="s" placeholder="State">
                    </label>
                </td>
                <td class="td2">
                    <label>

                        <input type="text" name="ph" id="ph" maxlength="10" placeholder="Enter phone number">
                    </label>
                </td>
            </tr>
            <tr>
                <td class="td2">
                    Occupation:
                </td>
                <td class="td2">
                    Nationality:
                </td>
            </tr>
            <tr>
                <td class="td2">
                    <label>
                        <input type="text" name="oc" id="oc" placeholder="Occupation">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" name="na" id="na" placeholder="Nationality">
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    DOF:
                </td>
                <td>
                    Stolen Date:
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <input type="date" name="DOF" id="DOF" placeholder="DOF">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="date" name="Stolen_date" id="Stolen date" placeholder="Stolen Date">
                    </label>
                </td>
                
                <!-- <td>
                <label>
                        <input type="text" name="Stolen_time" id="Stolen time" placeholder="Stolen time">
                    </label>
                </td> -->

            </tr>
            <tr>
                <td class="align">
                    Type:
                </td>
                <td class="align">
                    Color:
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="type" id="type" placeholder="Type">
                </td>
                <td>
                    <input type="text" name="color" id="color" placeholder="Color">
                </td>
            </tr>
            <tr>
                <td>
                    Number:
                </td>
                <td>
                    Value:
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="number" id="number" placeholder="Number">
                </td>
                <td>
                    <input type="number" name="value" id="value" placeholder="Value">
                </td>
            </tr>
            <tr>
                <td class="al td2">

                    <input type="checkbox" id="showDetails" name="checkbox">Having a suspect



                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td class="td3">
                    <div id="detailsSection" style="display: none">
                        <label for="name">Name:</label>
                        <br>
                        <input type="text" id="S_name" name="S_name" placeholder="Name">
                        <br>
                        <label for="phone">Phone Number:</label>
                        <br>
                        <input type="tel" id="S_phone" name="S_phone" placeholder="Phone">
                        <br>
                        <label for="age">Age:</label>
                        <br>
                        <input type="number" name="S_age" id="S_age" placeholder="Age">
                        <br>
                        <label for="Gender">Gender:</label>
                        <br>
                        <input type="text" name="S_Gender" id="S_Gender" placeholder="Gender">
                        <br>
                        <label for="state">State:</label>
                        <br>
                        <input type="text" name="S_State" id="S_State" placeholder="State">
                        <br>
                        <label for="occ">Occupation:</label>
                        <br>
                        <input type="text" name="S_Occuaption" id="S_Occuaption" placeholder="Occuaption">
                        <br>
                        <label for="nat">Nationality:</label>
                        <br>
                        <input type="text" name="S_Nationality" id="S_Nationality" placeholder="Nationality">

                    </div>
                    

                </td>
            </tr>
            <tr class="row">
                <td colspan="30">
                    <input type="reset" value="reset" name = "reset">
                    <input type="submit" value="submit" name = "submit">

                </td>
            </tr>
        
        </table>
    </div>
    </form>
    <script>
        const showDetailsCheckbox = document.getElementById("showDetails");
        const detailsSection = document.getElementById("detailsSection");

        showDetailsCheckbox.addEventListener("click", function () {
            if (showDetailsCheckbox.checked) {
                detailsSection.style.display = "block";
            } else {
                detailsSection.style.display = "none";
            }
        });
    </script>
</body>

</html>
