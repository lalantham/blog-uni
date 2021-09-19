<?php require_once("inc/header.php") ?>

  </head>
  <body>

    <div id="wrapper">
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
              <h1 class="d-title"><i class="fas fa-tachometer-alt"></i> Dashboard <small>Statistic Overview</small></h1>
              <ol class="breadcrumb">
                  <class="active"><a href="admin.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
              </ol>

              <div class="row tag-boxes">
                  <div class="col-md-6 col-lg-3">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fas fa-comments fa-3x"></i>
                                  </div>
                                  <div class="col-xs-9">
                                      <div class="text-right huge">11</div>
                                      <div class="text-right">New Comments</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View All Comments</span>
                                  <span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fas fa-file-alt fa-3x"></i>
                                  </div>
                                  <div class="col-xs-9">
                                      <div class="text-right huge">20</div>
                                      <div class="text-right">All Posts</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View All Posts</span>
                                  <span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fas fa-users fa-3x"></i>
                                  </div>
                                  <div class="col-xs-9">
                                      <div class="text-right huge">16</div>
                                      <div class="text-right">All Users</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View All Users</span>
                                  <span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fas fa-clipboard-list fa-3x"></i>
                                  </div>
                                  <div class="col-xs-9">
                                      <div class="text-right huge">11</div>
                                      <div class="text-right">All Categoris</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View All Categories</span>
                                  <span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                          
                      </div>
                  </div>
              </div>

              <!-- New users Table  -->
              <h3>New Users</h3>
              <table class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Role</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>16 Jan 2021</td>
                          <td>Micky Bro</td>
                          <td>micky</td>
                          <td>Admin</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>16 Jan 2021</td>
                          <td>Micky Bro</td>
                          <td>micky</td>
                          <td>Admin</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>16 Jan 2021</td>
                          <td>Micky Bro</td>
                          <td>micky</td>
                          <td>Admin</td>
                      </tr>
                  </tbody>
              </table>
              <a href="#" class="btn btn-default">View All Users</a>

              <!-- New Post Table  -->
              <h3>New Post</h3>
              <table class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Date</th>
                          <th>Post Title</th>
                          <th>Category</th>
                          <th>Views</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>16 Jan 2021</td>
                          <td>This is Test Post Heading</td>
                          <td>test</td>
                          <td><i class="far fa-eye"></i> 12</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>16 Jan 2021</td>
                          <td>This is Test Post Heading</td>
                          <td>test</td>
                          <td><i class="far fa-eye"></i> 14</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>16 Jan 2021</td>
                          <td>This is Test Post Heading</td>
                          <td>test</td>
                          <td><i class="far fa-eye"></i> 25</td>
                      </tr>
                  </tbody>
              </table>

              <a href="#" class="btn btn-default">View All Users</a>
          </div>
        </div>
    </div>
