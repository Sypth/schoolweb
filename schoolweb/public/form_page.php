<?php include '../inc/header.php'; ?>
    <link rel="stylesheet" href="../CSS/form_design.css">
    <title>Application Form</title>

</head>

<body>
<?php
    session_start();
    include_once '../database/connection.php';

    $_SESSION['visited_page'] = $visited_page = 'form_page.php';
    
    if(isset($_SESSION['user_id'])):
      include_once '../inc/navbar.php';
    else:
      include '../inc/guest_navbar.php';
    endif;
  ?>
        <div id="head">
            Online Registration Form <br>
            <div id="t">ADDMISSION OFFICE</div>
        </div>

        <br><br>

    <div id="app">
        <form action="../register.php" method="POST">
            <table align="center">
                <tr>
                    <td colspan="2"><div id="text">Name of Applicant</div></td>
                </tr>

                <tr>
                    <td id="space" style="padding-right: 5px;"><input type="text" name="fname" id="short_textbox" placeholder="  First" required></td>
                    <td id="space" style="padding-left: 5px;"><input type="tel" name="lname" id="short_textbox" placeholder="  Last" required></td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td><div id="text">Date of Birth</div></td>
                </tr>

                <tr>
                    <td colspan="2" id="space"><input type="date" name="date" id="long_textbox" required></td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td><div id="text">Gender</div></td>
                </tr>

                <tr>
                    <td id="space">
                        <input type="radio" name="gender" value="male" required>
                        Male
                    </td>
                    <td id="space">
                        <input type="radio" name="gender" value="female" required>
                        Female
                    </td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><div for="apply" id="text">Apply as:</div></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <select id="select" name="apply" required>
                            <option disabled>Please Select</option>
                            <?php if(!empty($_GET['apply'])):?>
                                <?php if($_GET['apply'] == "Grade School"): ?>
                                    <option selected value="Grade School">Grade School</option>
                                <?php else: ?>
                                    <option value="Grade School">Grade School</option>
                                <?php endif; ?>
                                <?php if($_GET['apply'] == "High School"):?>
                                    <option selected value="High School">High School</option>
                                <?php else: ?>
                                    <option value="High School">High School</option>
                                <?php endif; ?>
                                <?php if($_GET['apply'] == "College"):?>
                                    <option selected value="College">College</option>
                                <?php else: ?>
                                    <option value="College">College</option>
                                <?php endif; ?>
                            <?php endif;?>


                        </select>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="year_level" id="long_textbox" placeholder="  Year Level" required>
                    </td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>
                
                <tr>
                    <td><div id="text">Contact Number</div></td>
                </tr>
                <tr>
                    <td colspan="2" id="space"><input type="tel" name="contact_num" id="long_textbox" required></td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td><div id="text">Email</div></td>
                </tr>
                <tr>
                    <td colspan="2" id="space"><input type="email" name="email" id="long_textbox" required></td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td><div id="text">Address</div></td>
                </tr>

                <tr>
                    <td colspan="2" id="space">
                        <input type="text" name="street_add" id="long_textbox" placeholder="  Street Address" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" id="space">
                        <input type="text" name="street_add_2" id="long_textbox" placeholder="  Street Address Line 2" required>
                    </td>
                </tr>

                <tr>
                    <td style="padding-right: 5px;"><input type="text" name="city" id="short_textbox" placeholder="  City" required></td>
                    <td style="padding-left: 5px;"><input type="text" name="region" id="short_textbox" placeholder="  Region" required></td>
                </tr>

                <tr>
                    <td style="padding-right: 5px;"><input type="text" name="postal_zip" id="short_textbox" placeholder="  Postal / Zip Code" required></td>
                    <td style="padding-left: 5px;">
                        <select name="status" id="select" required>
                            <option selected disabled>Marital Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <br>
                        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-right-to-bracket"></i> Submit</button>
                        <a href="main_page.php" class="btn btn-outline-secondary"><i class="fa-solid fa-backward"></i> Go Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
<?php include '../inc/footer.php'; ?>