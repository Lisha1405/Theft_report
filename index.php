<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            display: grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            background-color: rgb(255, 238, 151);
            width: 600px;
            /* Set the width of the template */
        }

        td,
        th {
            color: rgb(0, 0, 0);
            font-size: 20px;
            padding: 10px;

        }

        .row {
            background-color: rgb(247, 232, 135);
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
            background-color: #2aa456;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover,
        a:active {
            background-color: rgb(69, 199, 140);
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
            background-color: rgb(239, 74, 71);
            float: right;
        }
    </style>
</head>

<body>
    <form action="connect_f.php" method="POST">
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

                <td class="td2"> Last Name</td>
            </tr>
            <tr>

                <td class="td2">
                    <lable>
                        <input type="text" name="firstname" id="firstname" placeholder="First Name">
                    </lable>
                </td>
                <td class="td2">
                    <lable>
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                    </lable>
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

                    <lable>
                        <input type="number" name="a" id="a" placeholder="Age">
                    </lable>
                </td>
                <td class="td2">
                    <lable>
                        <input type="text" name="g" id="g" placeholder="Gender">
                    </lable>
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
                    <lable>
                        <input type="text" name="s" id="s" placeholder="State">
                    </lable>
                </td>
                <td class="td2">
                    <lable>

                        <input type="text" name="ph" id="ph" maxlength="10" placeholder="Enter phone number">
                    </lable>
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
                    <lable>
                        <input type="text" name="oc" id="oc" placeholder="Occupation">
                    </lable>
                </td>
                <td>
                    <lable>
                        <input type="text" name="na" id="na" placeholder="Nationality">
                    </lable>
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
                    <lable>
                        <input type="text" name="DOF" id="DOF" placeholder="DOF">
                    </lable>
                </td>
                <td>
                    <lable>
                        <input type="text" name="Stolen date" id="Stolen date" placeholder="Stolen Date">
                    </lable>
                </td>
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

                    <input type="checkbox" id="showDetails">Having a suspect



                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td class="td3">
                    <div id="detailsSection" style="display: none">
                        <lable for="name">Name:</lable>
                        <br>
                        <input type="text" id="name" name="name" placeholder="Name">
                        <br>
                        <lable for="phone">Phone Number:</lable>
                        <br>
                        <input type="tel" id="phone" name="phone" placeholder="Phone">
                        <br>
                        <lable for="age">Age:</lable>
                        <br>
                        <input type="number" name="age" id="age" placeholder="Age">
                        <br>
                        <lable for="Gender">Gender:</lable>
                        <br>
                        <input type="text" name="Gender" id="Gender" placeholder="Gender">
                        <br>
                        <lable for="state">State:</lable>
                        <br>
                        <input type="text" name="State" id="State" placeholder="State">
                        <br>
                        <lable for="occ">Occupation:</lable>
                        <br>
                        <input type="text" name="Occuaption" id="Occuaption" placeholder="Occuaption">
                        <br>
                        <lable for="nat">Nationality:</lable>
                        <br>
                        <input type="text" name="Nationality" id="Nationality" placeholder="Nationality">

                    </div>

                </td>
            </tr>
            <tr class="row">
                <td colspan="30">
                    <input type="reset" value="reset">
                    <input type="submit" value="submit">

                </td>
            </tr>
        </table>
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
