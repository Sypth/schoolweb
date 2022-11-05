<?php include '../inc/header.php'; ?>
    <link rel="stylesheet" href="../CSS/form_design.css">
    <title>Application Form</title>
</head>

<body>
  <?php
    include '../inc/navbar.php';
  ?>
  
    <div id="app">
        <div align="center">
            <h1>Student Registration Form</h1><br><br>
        </div>

        <form action="../register.php" method="POST" class="form-floating">
            <table align="center">
                <tr>
                    <td><label id=" text">Name of the Applicant</label></td>
                </tr>

                <tr>
                    <td id="space" style="padding-right: 5px;"><input type="text" name="fname" id="short_textbox" placeholder="  First"></td>
                    <td id="space" style="padding-left: 5px;"><input type="tel" name="lname" id="short_textbox" placeholder="  Last"></td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td><label id="text">Date of Birth</label></td>
                </tr>

                <tr>
                    <td colspan="2" id="space"><input type="date" name="date" id="long_textbox"></td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td><label id="text">Gender</label></td>
                </tr>

                <tr>
                    <td id="space">
                        <input type="radio" name="gender" value="male">
                        <label>Male</label>
                    </td>
                    <td id="space">
                        <input type="radio" name="gender" value="female">
                        <label>Female</label>
                    </td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><label for="apply" id="text">Apply as:</label></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <select id="select" name="apply" required>
                            <option disabled selected>Please select</option>
                            <option value="Grade School">Grade School</option>
                            <option value="High School">High School</option>
                            <option value="College">College</option>
                        </select>
                        <br />

                    </td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td><label id="text">Address</label></td>
                </tr>

                <tr>
                    <td colspan="2" id="space">
                        <input type="text" name="street_add" id="long_textbox" placeholder="  Street Address">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" id="space">
                        <input type="text" name="street_add_2" id="long_textbox" placeholder="  Street Address Line 2">
                    </td>
                </tr>

                <tr>
                    <td style="padding-right: 5px;"><input type="text" name="city" id="short_textbox" placeholder="  City"></td>
                    <td style="padding-left: 5px;"><input type="text" name="region" id="short_textbox" placeholder="  Region"></td>
                </tr>

                <tr>
                    <td style="padding-right: 5px;"><input type="text" name="postal_zip" id="short_textbox" placeholder="  Postal / Zip Code"></td>
                    <td style="padding-left: 5px;">
                        <select name="status" id="select">
                            <option selected disabled>Marital Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <br>
                        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-right-to-bracket"></i> Submit</button>
                    </td>
                </tr>
            </table>


        </form>
    </div>
<?php include '../inc/footer.php'; ?>