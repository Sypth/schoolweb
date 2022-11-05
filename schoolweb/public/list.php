<?php include '../inc/header.php'; ?>
    <link rel="stylesheet" href="../CSS/form_design.css">
    <title>List of Student Registration</title>
    <style>
        .table-condensed {
            /* width: 100% !important; */
            font-size: 11px;
            font-weight: 600;
            text-align: center;
        }

    </style>
</head>

<body>
  <?php
   include '../inc/navbar.php';

    if (!$pdo) {
        die("Connection Error!");
    } else {
        $sql = $pdo->prepare("SELECT * FROM student_app");
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
}

  ?>
    <div align="center">
                <div id="listform" align="center">
                    <h1 align="center">Student Registration List</h1>
                    <table  align="center" class="table table-hover table-condensed table-bordered border-dark">
                        <thead class="table-dark " align="center">
                        <tr>
                            <th >First Name</th>
                            <th >Last Name</th>
                            <th >Date of Birt</th>
                            <th >Gender</th>
                            <th >Applied As</th>
                            <th >Street Address</th>
                            <th >Street Address 2</th>
                            <th >City</th>
                            <th>Region</th>
                            <th>Postal / Zip Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody align="center">
                        
                            <?php foreach($results as $result){?>
                                <tr>
                                    <td><?php echo $result['fname']; ?></td>
                                    <td><?php echo $result['lname']; ?></td>
                                    <td><?php echo $result['dob']; ?></td>
                                    <td><?php echo $result['gender']; ?></td>
                                    <td><?php echo $result['apply']; ?></td>
                                    <td><?php echo $result['street_add']; ?></td>
                                    <td><?php echo $result['street_add_2']; ?></td>
                                    <td><?php echo $result['city']; ?></td>
                                    <td><?php echo $result['region']; ?></td>
                                    <td><?php echo $result['postal_zip']; ?></td>
                                    <td><?php echo $result['status']; ?></td>
                                    <td>
                                        <a href='edit.php?id=<?php echo $result['id']?>&fname=<?php echo $result['fname']?>&lname=<?php echo $result['lname']?>&dob=<?php echo $result['dob']?>&gender=<?php echo $result['gender']?>&apply=<?php echo $result['apply']?>&street_add=<?php echo $result['street_add']?>&street_add_2=<?php echo $result['street_add_2']?>&city=<?php echo $result['city']?>&region=<?php echo $result['region']?>&postal_zip=<?php echo $result['postal_zip']?>&status=<?php echo $result['status'] ?>' class='btn btn-sm btn-info'><i class='fa-solid fa-pen-to-square'></i></a>
                                        <a href='../delete.php?id=<?php echo $result['id']?>' class='btn btn-sm btn-danger' ><i class='fa-solid fa-trash'></i></a>
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div align="right">
                        <a href="find.php" class="btn btn-secondary"><i class="fa-sharp fa-solid fa-magnifying-glass"></i> Find</a>
                    </div>
                    
                </div>
    </div>
<?php include '../inc/footer.php'; ?>