<?php
include 'header.php';
$sql = "SELECT contentid, NameofFlags, DateofCreation FROM content";
$result = $conn ->query($sql);
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage Content</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Bendera-Bendera Di Malaysia</a></li>
                            <li class="breadcrumb-item active">List of State Flags in Malaysia</li>
                        </ol>
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								List of State Flags in Malaysia
							</div>
							<div class="card-body">
                                <div  class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                        <thead>
                                            <tr>
                                                <th>Content ID</th>
                                                <th>Name of Flags</th>
                                                <th>Date of Creation</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
										<?php
										if ($result->num_rows > 0) {
										  // output data of each row
										  while($row = $result->fetch_assoc()) {
											  $contentid = $row['contentid'];
											  $NameofFlags = $row['NameofFlags'];
											  $DateofCreation = $row['DateofCreation'];
											echo "<tr>
                                                <td>$contentid</td>
                                                <td>$NameofFlags</td>
                                                <td>$DateofCreation</td>

												<div class='btn-group'>
												<td><a class='btn btn-success'
												href='viewcontent.php?contentid=$contentid'><i class='fas fa-eye'></i> View</a>
												<a class='btn btn-info' href='edit.php?contentid=$contentid'><i class='fas fa-user-edit'></i> Edit</a>
												<a class='btn btn-danger' href='delete.php?contentid=$contentid'><i class='fas fa-minus-circle'></i> Delete</a>
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