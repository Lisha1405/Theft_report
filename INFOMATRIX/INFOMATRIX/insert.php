<?php
 include 'navbar.html';
 ?>

<!DOCTYPE html>
<html>

<head>
    <!-- <a href="navbar.html"></a> -->
    <style>
        body {
            /* display: grid;
            justify-content: center;
            align-items: center; */
            
            /* background-image: url("https://i.pinimg.com/564x/e2/bd/9d/e2bd9d02fe736ac633db47c7b57ced35.jpg");
            background-repeat: no-repeat;
            background-size: cover; */
            /* background-attachment: fixed; */
            /* background-position:  150px;  */
            /* height: 100vh;
            margin: 0;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
            padding-top: 80px;
            margin-top: -80px;
            margin: 25px;
            /* box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2); */
        } */

        table {
            width: 1020px;
            /* background-color: rgba(240, 224, 190, 0.7); */
        }

        td,
        th {
            color: rgb(0, 0, 0);
            font-size: 20px;
            padding: 10px;
        }

        .row {
            /* background-color: rgba(240, 224, 190, 0.7); */
            text-align: left;
        }

        .td2 {
            text-align: left;
            width: 25px;
        }

        sub {
            /* background-color: rgba(255, 230, 170, 0.7); */
        }

        
        
    </style>
</head>

<body>

    <form action="conect_f.php" method="POST" onsubmit="return validateForm()">
        <table>
            <tr class="row">
                <td colspan="30">
                    FILE FIR
                </td>
            </tr>
            <tr>
                <td>
                    <span style="font-size: 20px; text-align: center;font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 200;">DETAILS OF COMPLAINT/INFORMATION TO POLICE:</span>
                </td>
            </tr>
            <tr>
                <td class="td2">
                    First name
                </td>
                <td class="td2">
                    Age
                </td>
                <td class="td2">
                    Gender
                </td>
            </tr>
            <tr>
                <td class="td2">
                    <label>
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="number" name="a" id="a" placeholder="Age" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="g" id="g" placeholder="Gender" required>
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
                        <input type="text" name="s" id="s" placeholder="State" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="ph" id="ph" maxlength="10" placeholder="Enter phone number" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="oc" id="oc" placeholder="Occupation" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="na" id="na" placeholder="Nationality" required>
                    </label>
                </td>
            </tr>
            <tr>
                <td class="td2">
                    DOF:
                </td>
                <td class="td2">
                    Stolen Date:
                </td>
                <td class="td2">
                    Type:
                </td>
                <td class="td2">
                    Color:
                </td>
            </tr>
            <tr>
                <td class="td2">
                    <label>
                        <input type="date" name="DOF" id="DOF" placeholder="DOF" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="date" name="Stolen_date" id="Stolen_date" placeholder="Stolen Date" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="type" id="type" placeholder="Type" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="text" name="color" id="color" placeholder="Color" required>
                    </label>
                </td>
            </tr>
            <tr>
                <td class="td2">
                    Number:
                </td>
                <td class="td2">
                    Value:
                </td>
            </tr>
            <tr>
                <td class="td2">
                    <label>
                        <input type="number" name="number" id="number" placeholder="Number" required>
                    </label>
                </td>
                <td class="td2">
                    <label>
                        <input type="number" name="value" id="value" placeholder="Value" required>
                    </label>
                </td>
            </tr>
            <tr>
                <td class="al td2">
                    <input type="checkbox" id="showDetails" name="checkbox"> Having a suspect
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td class="td3">
                    <div id="detailsSection" style="display: none">
                        <label for="name">Name:</label>
                        <br>
                        <input type="text" id="S_name" name="S_name" placeholder="Name" required>
                        <br>
                        <label for="phone">Phone Number:</label>
                        <br>
                        <input type="tel" id="S_phone" name="S_phone" placeholder="Phone" required>
                        <br>
                        <label for="age">Age:</label>
                        <br>
                        <input type="number" name="S_age" id="S_age" placeholder="Age" required>
                        <br>
                        <label for="Gender">Gender:</label>
                        <br>
                        <input type="text" name="S_Gender" id="S_Gender" placeholder="Gender" required>
                        <br>
                        <label for="state">State:</label>
                        <br>
                        <input type="text" name="S_State" id="S_State" placeholder="State" required>
                        <br>
                        <label for="occ">Occupation:</label>
                        <br>
                        <input type="text" name="S_Occuaption" id="S_Occuaption" placeholder="Occupation" required>
                        <br>
                        <label for="nat">Nationality:</label>
                        <br>
                        <input type="text" name="S_Nationality" id="S_Nationality" placeholder="Nationality" required>
                    </div>
                </td>
            </tr>
            <tr class="row">
                <td colspan="30">
                    <input type="reset" value="Reset" name="reset" required>
                    <input type="submit" value="Submit" name="submit" required>
                </td>
            </tr>
        </table>
    </form>
    <script>
        const showDetailsCheckbox = document.getElementById("showDetails");
        const detailsSection = document.getElementById("detailsSection");

        function validateForm() {
            var firstname = document.getElementById("firstname").value;
            var a = document.getElementById("a").value;
            var g = document.getElementById("g").value;
            var s = document.getElementById("s").value;
            var ph = document.getElementById("ph").value;
            var oc = document.getElementById("oc").value;
            var na = document.getElementById("na").value;
            var DOF = document.getElementById("DOF").value;
            var Stolen_date = document.getElementById("Stolen_date").value;
            var type = document.getElementById("type").value;
            var color = document.getElementById("color").value;
            var number = document.getElementById("number").value;
            var value = document.getElementById("value").value;

            // Check if all required fields are filled out
            if (
                firstname == "" ||
                a == "" ||
                g == "" ||
                s == "" ||
                ph == "" ||
                oc == "" ||
                na == "" ||
                DOF == "" ||
                Stolen_date == "" ||
                type == "" ||
                color == "" ||
                number == "" ||
                value == ""
            ) {
                alert("All fields must be filled out");
                return false;
            }

            // Check if age is less than 100
            if (parseInt(a) >= 100) {
                alert("Age must be less than 100");
                return false;
            }

            // Check if color is a valid color name (you can customize this regex)
            var colorRegex = /^[a-zA-Z]+$/;
            if (!color.match(colorRegex)) {
                alert("Color must be a valid color name");
                return false;
            }

            // Check if gender is either male, female, or other
            if (
                !(g.toLowerCase() === "male" ||
                g.toLowerCase() === "female" ||
                g.toLowerCase() === "other")
            ) {
                alert("Gender must be either Male, Female, or Other");
                return false;
            }

            // Check if the checkbox is selected
            if (showDetailsCheckbox.checked) {
                // If checkbox is selected, validate suspect details
                var S_name = document.getElementById("S_name").value;
                var S_phone = document.getElementById("S_phone").value;
                var S_age = document.getElementById("S_age").value;
                var S_Gender = document.getElementById("S_Gender").value;
                var S_State = document.getElementById("S_State").value;
                var S_Occuaption = document.getElementById("S_Occuaption").value;
                var S_Nationality = document.getElementById("S_Nationality").value;

                // Check if suspect details are filled out
                if (
                    S_name == "" ||
                    S_phone == "" ||
                    S_age == "" ||
                    S_Gender == "" ||
                    S_State == "" ||
                    S_Occuaption == "" ||
                    S_Nationality == ""
                ) {
                    alert("If having a suspect, all suspect details must be filled out");
                    return false;
                }
            }
            if (parseInt(S_age) >= 100) {
                alert("Age must be less than 100");
                return false;
            }
            return true;
        }

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