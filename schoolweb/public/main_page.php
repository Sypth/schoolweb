<?php include '../inc/header.php'?>

  <title>SPCF</title>
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
  <div align="center" class="logo">
    <img src="../images/School Logo.png" alt="School Logo" /><br><br>
    <h2>A Commitment to Excellence</h2>
    <br>
  </div>
  <div>
    <table border="0" align="center" style="text-align: center;">
      <tr>
        <th class="grade_category">Grade School</th>
        <th class="grade_category">High School</th>
        <th class="grade_category">College</th>
      </tr>
      <tr>
        <th>
          <a href="form_page.php?apply=Grade School"><img src="../images/Elementary.jpg" alt="" id="category_photo" /></a>
        </th>
        <th>
          <a href="form_page.php?apply=High School"><img src="../images/High School.jpg" alt="" id="category_photo" /></a>
        </th>
        <th>
          <a href="form_page.php?apply=College"><img src="../images/College.jpg" alt="" id="category_photo" /></a>
        </th>
      </tr>
      <tr>
          <th id="button-padding">
                  <a href="form_page.php?apply=Grade School" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-graduation-cap"></i> Enroll Now!</button>
          </th>

          <th id="button-padding">
                  <a href="form_page.php?apply=High School" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-graduation-cap"></i> Enroll Now!</button>
          </th>

          <th id="button-padding">
                  <a href="form_page.php?apply=College" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-graduation-cap"></i> Enroll Now!</button>
          </th>
        </tr>
      </table>

    </div>
<?php include '../inc/footer.php'; ?>