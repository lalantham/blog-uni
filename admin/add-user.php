<?php require("inc/header.php") ?>

  </head>
  <body>

      <div class="wrapper">
        <!-- navbar  -->
        <?php require("inc/navbar.php") ?>

     <!-- Content  -->
      <div class="container-fluid body-section">
        <div class="row">

          <!-- Sidebar -->
          <div class="col-md-3">
            <?php require("inc/sidebar.php") ?>
          </div>

          <!-- Dashboard content  -->
          <div class="col-md-9">
            <h1 class="d-title"><i class="fas fa-user-plus"></i> Add New Users <small>Add New User</small></h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="active"><a href="add-user.php"><i class="fas fa-user-plus"></i> Add New Users</a></li>
            </ol>

            <div class="row">
                <div class="col-md-8">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="fname">* First Name:</label>
                            <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lname">* Last Name:</label>
                            <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">* Email:</label>
                            <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username">* Username:</label>
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role">* User Role</label>
                                <select class="form-control">
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="password">* Password:</label>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">* Profile Picture:</label>
                            <input type="file" name="profile-pic" id="profile-pic" class="form-control-file">
                        </div>
                        <input type="submit" value="Add User" name="submit" class="btn btn-default">
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>

          </div>
        </div>
    </div>

    <?php require("inc/footer.php") ?>