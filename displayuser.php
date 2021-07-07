<?php
include 'header.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Bendera-Bendera Di Malaysia</a></li>
                            <li class="breadcrumb-item active">List of User</li>
                        </ol>
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								List of User
							</div>
                    <div class="card-body">
                    <div  class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<?php
										if ($result->num_rows > 0) {
										  // output data of each row
										  while($row = $result->fetch_assoc()) {
											  $userid = $row['userid'];
											  $fullname = $row['fullname'];
											  $email = $row['email'];
											  $username = $row['username'];
											echo "<tr>
                                                <td>$userid</td>
                                                <td>$fullname</td>
                                                <td>$email</td>
                                                <td>$username</td>
                                                
												<div class='btn-group'>
												<td><a class='btn btn-info' href='edituser.php?userid=$userid'><i class='fas fa-user-edit'></i> Edit</a>
												<a class='btn btn-danger' href='deleteuser.php?userid=$userid'><i class='fas fa-minus-circle'></i> Delete</a>
                                                </div>
												</td>
											</tr>";
										  }
										} else {
										  echo "0 results";
										}
                                            
										?>
                                    </table>
                    </div>
						
                    </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Umairah and Atikah 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
<?php
include 'footer.php';
?>
        