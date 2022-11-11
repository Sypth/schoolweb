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
  session_start();
  $_SESSION['visited_page'] = $visited_page = 'main_page.php';
  include_once '../database/connection.php';

  if(isset($_SESSION['user_id'])):
    include_once '../inc/navbar.php';
  else:
    header("location: login.php");
  endif;

    if (!$pdo) {
        die("Connection Error!");
    } else {
            $search = $_GET['search'] ?? '';
            if($search){
                $sql = $pdo->prepare('SELECT * FROM student_app WHERE lname LIKE :lname ORDER BY id DESC');
            $sql->bindValue(':lname', "%$search%");
            }else{
                $sql = $pdo->prepare("SELECT * FROM student_app");
            }
            $sql->execute();
            $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
  ?>
    <div align="center">

        <div id="listform">
            <h1 align="center">Find Online Student Applicant List</h1>
            <form>
                <div style="width: 95%;" class="input-group mb-3" >
                    <input type="text" placeholder="Search for Student Last Name" name="search" class="form-control">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>
            <table  align="center" class="table table-hover table-condensed table-bordered border-dark">
                        <thead class="table-dark " align="center">
                        <tr>
                            <th >First Name</th>
                            <th >Last Name</th>
                            <th >Applied As</th>
                            <th >Year Level</th></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody align="center">
                        
                            <?php foreach($results as $result){?>
                                <tr>
                                    <td><?php echo $result['fname']; ?></td>
                                    <td><?php echo $result['lname']; ?></td>
                                    <td><?php echo $result['apply']; ?></td>
                                    <td><?php echo $result['year_level']; ?></td>
                                    <td>
                                        <a href='edit.php?id=<?php echo $result['id'];?>&fname=<?php echo $result['fname'];?>&lname=<?php echo $result['lname'];?>&dob=<?php echo $result['dob'];?>&gender=<?php echo $result['gender'];?>&apply=<?php echo $result['apply'];?>&year_level=<?php echo $result['year_level'];?>&contact_num=<?php echo $result['contact_num'];?>&email=<?php echo $result['email'];?>&street_add=<?php echo $result['street_add'];?>&street_add_2=<?php echo $result['street_add_2'];?>&city=<?php echo $result['city'];?>&region=<?php echo $result['region'];?>&postal_zip=<?php echo $result['postal_zip'];?>&status=<?php echo $result['status'];?>' class='btn btn-sm btn-info'><i class='fa-solid fa-pen-to-square'></i></a>
                                        
                                        <a href='../delete.php?id=<?php echo $result['id'];?>' class='btn btn-sm btn-danger' ><i class='fa-solid fa-trash'></i></a>

                                        <a href='more_info.php?id=<?php echo $result['id'];?>&fname=<?php echo $result['fname'];?>&lname=<?php echo $result['lname'];?>&dob=<?php echo $result['dob'];?>&gender=<?php echo $result['gender'];?>&apply=<?php echo $result['apply'];?>&year_level=<?php echo $result['year_level'];?>&contact_num=<?php echo $result['contact_num'];?>&email=<?php echo $result['email'];?>&street_add=<?php echo $result['street_add'];?>&street_add_2=<?php echo $result['street_add_2'];?>&city=<?php echo $result['city'];?>&region=<?php echo $result['region'];?>&postal_zip=<?php echo $result['postal_zip'];?>&status=<?php echo $result['status'];?>' class='btn btn-sm btn-secondary'><i class="fa-sharp fa-solid fa-circle-info"></i> More Info</a>
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div align="right">
                        <a href="list.php" class="btn btn-secondary"><i class="fa-sharp fa-solid fa-backward"></i> Go back to list</a>
                    </div>
                    
                </div>
    </div>
<?php include '../inc/footer.php'; ?>