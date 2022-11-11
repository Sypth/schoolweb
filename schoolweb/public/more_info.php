<?php include '../inc/header.php';?>
<link rel="stylesheet" href="../CSS/form_design.css">
</head>
<body>
<?php
    session_start();
    $_SESSION['visited_page'] = $visited_page = 'main_page.php';
    include_once '../database/connection.php';

    if(isset($_SESSION['user_id'])):
      include_once '../inc/navbar.php';
    else:
      include '../inc/guest_navbar.php';
    endif;
  ?>
  <div id="app2">
    <div align="center" class="text-monospace"><h1>Student Complete Info</h1></div>
    <br>
    <form action="functions.php" method="get">
        <table align="center" width="100%">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <tr>
            <!-- <td id="space" style="padding-right: 5px;"><input type="text" name="fname" id="short_textbox" placeholder="  First"></td> -->
            <td>First Name: </td>
            <th id="space" style="padding-left: 20px;"><?php echo $_GET['fname']; ?><br></th>
        </tr>

        <tr>
            <td><br></td>
        </tr>

        <tr>
            <td>Last Name: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['lname'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Date of Birth: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['dob'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Gender: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['gender'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Apply: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['apply'];?></th>
        </tr>
                
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Year Level: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['year_level'];?><br></th>
        </tr>
                
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Contact Number: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['contact_num'];?><br></th>
        </tr>
                
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Email: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['email'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Street Address: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['street_add'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td width="30%">Street Address 2: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['street_add_2'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>City: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['city'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Region: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['region'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Postal / Zip Code: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['postal_zip'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        <tr>
            <td>Status: </td>
            <th style="padding-left: 20px;"><?php echo $_GET['status'];?><br></th>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        
        
        <tr>
            <td colspan="2">
                <br>
                <a href="list.php" class="btn btn-outline-secondary"><i class="fa-solid fa-backward"></i> Go back to List</a>
            </td>
        </tr>
        
        </table>
    </form>
    </div>

<?php include '../inc/footer.php';?>
