  <?php
  session_start();

  include("../functions.php");
  $user_data = check_login($pdo); 
  ?>
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">

      <a class="navbar-brand mb-0 h1" href="#"><img class="d-inline-block align-top" src="../images/School Logo.png" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
         <li class="nav-item">
              <a class="nav-link" href="../public/main_page.php">
                Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../public/list.php"
                >List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../public/find.php"
                >Find</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"
                ><?php echo $user_data['user_name']; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <a href="../public/logout.php" class="dropdown-item">Logout</a>
                </li>

              </ul>
            </li>
        </ul>
      </div>
  </div>
</nav>