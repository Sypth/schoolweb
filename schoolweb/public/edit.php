<?php include '../inc/header.php'; ?>
    <link rel="stylesheet" href="../CSS/form_design.css">
    <title>Document</title>
</head>
<body>
  <?php
  session_start();
  $_SESSION['visited_page'] = $visited_page = 'main_page.php';
  include_once '../database/connection.php';

  if(isset($_SESSION['user_id'])):
    include_once '../inc/navbar.php';
  else:
    header("location: login.php");
  endif;
  
  $status = $_GET['status'];
  $apply = $_GET['apply'];
  ?>
  <div id="app2">
    <div align="center" class="text-monospace"><h1>Edit Page</h1></div>
    <form action="functions.php" method="get">
        <table align="center" width="100%">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <tr>
            <!-- <td id="space" style="padding-right: 5px;"><input type="text" name="fname" id="short_textbox" placeholder="  First"></td> -->
            <td>First Name: </td>
            <td id="space" style="padding-left: 20px;"><input type="text" id="short_textbox" name="fname" value="<?php echo $_GET['fname']; ?>"></label><br></td>
        </tr>

        <tr>
            <td><br></td>
        </tr>

        <tr>
            <td>Last Name: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="lname" value="<?php echo $_GET['lname']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Date of Birth: </td>
            <td style="padding-left: 20px;"><input type="date" id="short_textbox" name="dob" value="<?php echo $_GET['dob']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Gender: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="gender" value="<?php echo $_GET['gender']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Apply: </td>
            <td style="padding-left: 20px;">
                <select name="apply" id="select">
                <option disabled>Please Select</option>
                            <?php if(!empty($apply)):?>
                                <?php if($apply == "Grade School"): ?>
                                    <option selected value="Grade School">Grade School</option>
                                <?php else: ?>
                                    <option value="Grade School">Grade School</option>
                                <?php endif; ?>
                                <?php if($apply == "High School"):?>
                                    <option selected value="High School">High School</option>
                                <?php else: ?>
                                    <option value="High School">High School</option>
                                <?php endif; ?>
                                <?php if($apply == "College"):?>
                                    <option selected value="College">College</option>
                                <?php else: ?>
                                    <option value="College">College</option>
                                <?php endif; ?>
                            <?php endif;?>
                </select>
            </td>
        </tr>
                
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Year Level: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="year_level" value="<?php echo $_GET['year_level'];?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>

        <tr>
            <td>Contact Number: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="contact_num" value="<?php echo $_GET['contact_num']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>

        <tr>
            <td>Email: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="email" value="<?php echo $_GET['email']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Street Address: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="street_add" value="<?php echo $_GET['street_add']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td width="30%">Street Address 2: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="street_add_2" value="<?php echo $_GET['street_add_2']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>City: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="city" value="<?php echo $_GET['city']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Region: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="region" value="<?php echo $_GET['region']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Postal / Zip Code: </td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="postal_zip" value="<?php echo $_GET['postal_zip']; ?>"></label><br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Status: </td>
            <td style="padding-left: 20px;">
                
                <select name="status" id="select">
                    <option disabled>Please Choose</option>
                <?php if(!empty($status)):?>
                                <?php if($status == "Single"): ?>
                                    <option selected value="Single">Single</option>
                                <?php else: ?>
                                    <option value="Single">Single</option>
                                <?php endif; ?>
                                <?php if($status == "Married"):?>
                                    <option selected value="Married">Married</option>
                                <?php else: ?>
                                    <option value="Married">Married</option>
                                <?php endif; ?>
                            <?php endif;?>
                </select>
            <br></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        
        <tr>
            <td colspan="2">
                <br>
                <button type="submit" class="btn btn-outline-primary" name="update"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                <a href="list.php" class="btn btn-outline-secondary"><i class="fa-solid fa-backward"></i> Go back to List</a>
            </td>
        </tr>
        
        </table>
    </form>
    </div>
<?php include '../inc/footer.php'; ?>
