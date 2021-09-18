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
            <h1 class="d-title"><i class="fas fa-users"></i> Users <small>View All Users</small></h1>
            <ol class="breadcrumb">
                <li><a href="admin.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="active"><a href="users.html"><i class="fas fa-users"></i> Users</a></li>
            </ol>

            <div class="row">
                <div class="col-sm-8">
                    <form action="">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option class="dropdown-item" disabled selected value="undefined">Choose Action</option>
                                    <option value="delete">Delete User</option>
                                    <option value="author">Demoted to Author</option>
                                    <option value="admin">Promote to Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <input type="submit" class="btn btn-default" value="Apply">
                            <input type="submit" class="btn btn-default" value="Add New">
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="form" class="form-check-input"></th>
                        <th>#</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Post</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><input type="checkbox" class="form" class="form-check-input"></th>
                        <td>1</td>
                        <td>5 Jan 2021</td>
                        <td>Micky Bro</td>
                        <td>micky</td>
                        <td>micky@mail.com</td>
                        <td><img src="img/unkown.jpg" alt="" width="30px"></td>
                        <td>1235</td>
                        <td>Admin</td>
                        <td>10</td>
                        <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" class="form" class="form-check-input"></th>
                        <td>1</td>
                        <td>5 Jan 2021</td>
                        <td>Micky Bro</td>
                        <td>micky</td>
                        <td>micky@mail.com</td>
                        <td><img src="img/unkown.jpg" alt="" width="30px"></td>
                        <td>1235</td>
                        <td>Admin</td>
                        <td>10</td>
                        <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" class="form" class="form-check-input"></th>
                        <td>1</td>
                        <td>5 Jan 2021</td>
                        <td>Micky Bro</td>
                        <td>micky</td>
                        <td>micky@mail.com</td>
                        <td><img src="img/unkown.jpg" alt="" width="30px"></td>
                        <td>1235</td>
                        <td>Admin</td>
                        <td>10</td>
                        <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" class="form" class="form-check-input"></th>
                        <td>1</td>
                        <td>5 Jan 2021</td>
                        <td>Micky Bro</td>
                        <td>micky</td>
                        <td>micky@mail.com</td>
                        <td><img src="img/unkown.jpg" alt="" width="30px"></td>
                        <td>1235</td>
                        <td>Admin</td>
                        <td>10</td>
                        <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                </tbody>
            </table>

          </div>
        </div>
    </div>

    <?php require("inc/footer.php") ?>