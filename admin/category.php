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
            <h1 class="d-title"><i class="fas fa-clipboard-list"></i> Categories <small>Different Categories</small></h1>
            <ol class="breadcrumb">
                <li><a href="admin.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="active"><a href="category.html"><i class="fas fa-clipboard-list"></i> Categories</a></li>
            </ol>

            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" id="category" class="form-control" placeholder="Category Name">
                        </div>
                        <input type="submit" value="Add Category" name="submit" class="btn btn-default">
                    </form>
                </div>
                <div class="col-md-6">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Post</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>15</td>
                                <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                                <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>15</td>
                                <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                                <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>15</td>
                                <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                                <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>15</td>
                                <td> <a href="#"><i class="fas fa-edit"></i></a> </td>
                                <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

          </div>
        </div>
    </div>