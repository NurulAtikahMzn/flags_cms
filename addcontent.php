<?php
include 'header.php';

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
	  echo "New record created successfully";
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
                        <h1 class="mt-4">Manage Content</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Bendera-Bendera Di Malaysia</a></li>
                            <li class="breadcrumb-item active">Add New Content</li>
                        </ol>
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								Add New Content
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
		<td>Name of Flags</td>
		<td><input type="text" name="NameofFlags" required></td>
	</tr>
	<tr>
		<td>Design</td>
		<td><input type="text" name="Design"></td>
	</tr>
	<tr>
		<td>Date of Creation</td>
		<td><input type="date" name="DateofCreation"></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="Description"></textarea></td>
	</tr>
	<tr>
		<td>Source (URL)</td>
		<td><input type="text" name="FlagVideos"></td>
	</tr>
	<tr>
	<td>Type</td>
	<td>
		<select name="Type">
		   <option value="Youtube">Youtube Video</option>
		   <option value="Image">Image</option>
		   <option value="Video">Video MP4</option>
		   <option value="Audio">Audio MP3</option>
		</select>
	</td>
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