<?php include '../inc/header.php'; ?>
    <link rel="stylesheet" href="../CSS/form_design.css">
    <title>Document</title>
</head>
<body>
  <?php
    include '../inc/navbar.php';
  $status = $_GET['status'];
  $apply = $_GET['apply'];
  ?>
  <div id="app">
    <div align="center" class="text-monospace"><h1>Edit Page</h1></div>
    <form action="../functions.php" method="get">
        <table border="0" align="center">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <tr>
            <!-- <td id="space" style="padding-right: 5px;"><input type="text" name="fname" id="short_textbox" placeholder="  First"></td> -->
            <td><label>First Name: </label></td>
            <td id="space" style="padding-left: 20px;"><input type="text" id="short_textbox" name="fname" value="<?php echo $_GET['fname']; ?>"><br></td>
        </tr>
        <tr>
            <td><label>Last Name: </label></td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="lname" value="<?php echo $_GET['lname']; ?>"><br></td>
        </tr>
        
        <tr>
            <td><label>Date of Birth: </label></td>
            <td style="padding-left: 20px;"><input type="date" id="short_textbox" name="dob" value="<?php echo $_GET['dob']; ?>"><br></td>
        </tr>

        <tr>
            <td><label>Gender: </label></td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="gender" value="<?php echo $_GET['gender']; ?>"><br></td>
        </tr>
        
        <tr>
            <td><label>Apply: </label></td>
            <td style="padding-left: 20px;">
                <select name="apply" id="select">
                    <option value="<?php echo $apply; ?>" selected><?php echo $apply; ?></option>
                    <option value="Grade School">Grade School</option>
                    <option value="High School">High School</option>
                    <option value="College">College</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td><label>Street Address: </label></td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="street_add" value="<?php echo $_GET['street_add']; ?>"><br></td>
        </tr>

        <tr>
            <td><label>Street Address 2: </label></td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="street_add_2" value="<?php echo $_GET['street_add_2']; ?>"><br></td>
        </tr>

        <tr>
            <td><label>City: </label></td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="city" value="<?php echo $_GET['city']; ?>"><br></td>
        </tr>
        
        <tr>
            <td><label>Region: </label></td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="region" value="<?php echo $_GET['region']; ?>"><br></td>
        </tr>
        
        <tr>
            <td><label>Postal / Zip Code: </label></td>
            <td style="padding-left: 20px;"><input type="text" id="short_textbox" name="postal_zip" value="<?php echo $_GET['postal_zip']; ?>"><br></td>
        </tr>
        
        <tr>
            <td><label>Status: </label></td>
            <td style="padding-left: 20px;">
                
                <select name="status" id="select">
                    <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select>
            <br></td>
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
