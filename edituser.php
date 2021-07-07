<?php
include 'header.php';

// Retrieve Content
if(isset($_GET['userid'])){
	$userid = $_GET['userid'];
$sql = "SELECT * FROM user WHERE userid=$userid";
$result = $conn ->query($sql);
    if ($result->num_rows > 0) {
	   // output data of each row
	   while($row = $result->fetch_assoc()) {
		   $userid = $row['userid'];
		   $fullname = $row['fullname'];
		   $email = $row['email'];
		   $username = $row['username'];
	   }
	}else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//Process form data update into mysql database
if(isset($_POST['submit'])){
	
	$userid = $row['userid'];
	$fullname = $row['fullname'];
	$email = $row['email'];
	$username = $row['username'];
	$sql = "";


	if ($conn->query($sql) === TRUE) {
	  echo "Edit User successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

/*session_start();
if (isset($_SESSION['userid'])){

include 'db.php';
	
//Process form data into mysql database
if(isset($_POST['submit'])){

    
	$NameofFlags = $_POST['NameofFlags'];
	$Design = $_POST['Design'];
	$DateofCreation = $_POST['DateofCreation'];
	$Description = $_POST['Description'];
	$FlagVideos = $_POST['FlagVideos'];
    $Type = $_POST['Type'];
    

    $sql = "INSERT INTO content (NameofFlags, Design, DateofCreation, Description, FlagVideos, Type)
    VALUES ('$NameofFlags', '$Design', '$DateofCreation', '$Description', '$FlagVideos', '$Type')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>
            window.alert('New Record Added successfully')
            </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

}*/

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Bendera-Bendera Di Malaysia</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								Edit User id=<?php echo $userid;?>
							</div>
							<div class="card-body">
                                <div  class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0" >
                                        <thead>
                                            <tr>
                                                <th>Criteria</th>
                                                <th>Information</th>
                                            </tr>
                                        </thead>
										<tbody>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<tr>
		<td>User ID</td>
		<td><input type="text" name="userid" value="<?php echo $userid;?>" required></td>
	</tr>
	<tr>
		<td>Fullname</td>
		<td><input type="text" name="fullname" value="<?php echo $fullname;?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $email;?>"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" value="<?php echo $username;?>"></td>
	</tr>
	<tr>
	<td></td>
	<td><input class="btn btn-success" type="submit" name="submit" value="Save"></td>
	</tr>
	</form>
										</tbody>
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