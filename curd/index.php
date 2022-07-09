<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="sty.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Student CRUD</title>
</head>
<body style="margin-top: 100px">

  <header class="l-header">
      <nav class="nav bd-grid">
          <div>
              <a href="#" class="nav__logo">Hi,There</a>
          </div>

          <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                  <li class="nav__item"><a href="#home" class="nav__link active">Courses</a></li>
                  <li class="nav__item"><a href="#about" class="nav__link">Profile</a></li>
                  <li class="nav__item"><a href="" class="nav__link">Student</a></li>
                  <li class="nav__item"><a href="" class="nav__link">Logout</a></li>


              </ul>
          </div>

          <div class="nav__toggle" id="nav-toggle">
              <i class='bx bx-menu'></i>
          </div>
      </nav>
  </header>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>DateOfBirth</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Email</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM student";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['FirstName']; ?></td>
                                                <td><?= $student['LastName']; ?></td>
                                                <td><?= $student['DateOfBirth']; ?></td>
                                                <td><?= $student['Gender']; ?></td>
                                                <td><?= $student['Phone']; ?></td>
                                                <td><?= $student['Email']; ?></td>

                                                <td>
                                                    <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
