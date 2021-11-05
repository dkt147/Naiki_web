<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="../assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="../assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>
<body>
<div class="main-wrapper">

<!-- partial:../partials/_sidebar.html -->
<?php include 'partials/_sidebar.php'?>

<!-- partial -->

<div class="page-wrapper">
        
    <!-- partial:../partials/_navbar.html -->
            
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar">
        <a href="#" class="sidebar-toggler">
            <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
            <form class="search-form">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i data-feather="search"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                </div>
            </form>
            <ul class="navbar-nav">
    
                <li class="nav-item dropdown nav-messages">
                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="mail"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messageDropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium">9 New Messages</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="dropdown-body">
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Leonardo Payne</p>
                                        <p class="sub-text text-muted">2 min ago</p>
                                    </div>	
                                    <p class="sub-text text-muted">Project status</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Carl Henson</p>
                                        <p class="sub-text text-muted">30 min ago</p>
                                    </div>	
                                    <p class="sub-text text-muted">Client meeting</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Jensen Combs</p>												
                                        <p class="sub-text text-muted">1 hrs ago</p>
                                    </div>	
                                    <p class="sub-text text-muted">Project updates</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Amiah Burton</p>
                                        <p class="sub-text text-muted">2 hrs ago</p>
                                    </div>
                                    <p class="sub-text text-muted">Project deadline</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Yaretzi Mayo</p>
                                        <p class="sub-text text-muted">5 hr ago</p>
                                    </div>
                                    <p class="sub-text text-muted">New record</p>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer d-flex align-items-center justify-content-center">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown nav-notifications">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="bell"></i>
                        <div class="indicator">
                            <div class="circle"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium">6 New Notifications</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="dropdown-body">
                            <a href="javascript:;" class="dropdown-item">
                                <div class="icon">
                                    <i data-feather="user-plus"></i>
                                </div>
                                <div class="content">
                                    <p>New customer registered</p>
                                    <p class="sub-text text-muted">2 sec ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="icon">
                                    <i data-feather="gift"></i>
                                </div>
                                <div class="content">
                                    <p>New Order Recieved</p>
                                    <p class="sub-text text-muted">30 min ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="icon">
                                    <i data-feather="alert-circle"></i>
                                </div>
                                <div class="content">
                                    <p>Server Limit Reached!</p>
                                    <p class="sub-text text-muted">1 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="icon">
                                    <i data-feather="layers"></i>
                                </div>
                                <div class="content">
                                    <p>Apps are ready for update</p>
                                    <p class="sub-text text-muted">5 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="icon">
                                    <i data-feather="download"></i>
                                </div>
                                <div class="content">
                                    <p>Download completed</p>
                                    <p class="sub-text text-muted">6 hrs ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer d-flex align-items-center justify-content-center">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown nav-profile">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://via.placeholder.com/30x30" alt="profile">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3">
                                <img src="https://via.placeholder.com/80x80" alt="">
                            </div>
                            <div class="info text-center">
                                <p class="name font-weight-bold mb-0">Amiah Burton</p>
                                <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                            </div>
                        </div>
                        <div class="dropdown-body">
                            <ul class="profile-nav p-0 pt-3">
                                <li class="nav-item">
                                    <a href="pages/general/profile.html" class="nav-link">
                                        <i data-feather="user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link">
                                        <i data-feather="edit"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link">
                                        <i data-feather="repeat"></i>
                                        <span>Switch User</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link">
                                        <i data-feather="log-out"></i>
                                        <span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- partial -->

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Records</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registered Donators</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Donators</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Phone </th>
                        <th>Address </th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
                      //Connection Stablishing...
                      include 'partials/dbconnection.php';
					  
                      $query = "SELECT * FROM `register` where utype='donor'";
                      $res = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($res) > 0) {
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                  ?>
                    <tr>
                        <td><?php echo $row['r_id'];?></td>
                        <td><?php echo $row['uname'];?></td>
                        <td><?php echo $row['upass'];?></td>
                        <td><?php echo $row['uphone'];?></td>
                        <td><?php echo $row['uaddress'];?></td>
                        <td><?php echo $row['uemail'];?></td>
						<td><?php echo $row['profile_image'];?></td>
                        <td><a href="edit_donor.php?id=<?php echo $row['r_id'];?>"><i data-feather="edit"></i></a></td>
						<td><a href="delete_donor.php?id=<?php echo $row['r_id'];?>"><i data-feather="delete"></i></a></td>
					
                      </tr>
					  <?php
												}
											}
											?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
        </div>

    </div>

    <?php include 'partials/_footer.php'?>


</div>
</div>

	<!-- core:js -->
	<script src="../assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="../assets/js/data-table.js"></script>
	<!-- end custom js for this page -->
</body>
</html>