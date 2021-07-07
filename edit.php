<?php
include 'header.php';

// Retrieve Content
if(isset($_GET['contentid'])){
	$contentid = $_GET['contentid'];
$sql = "SELECT * FROM content WHERE contentid=$contentid";
$result = $conn ->query($sql);
    if ($result->num_rows > 0) {
	   // output data of each row
	   while($row = $result->fetch_assoc()) {
		   $contentid = $row['contentid'];
		   $userid = $row['userid'];
		   $NameofFlags = $row['NameofFlags'];
		   $Design = $row['Design'];
		   $DateofCreation = $row['DateofCreation'];
		   $Description = $row['Description'];
		   $FlagVideos = $row['FlagVideos'];
		   $Type = $row['Type'];
	   }
	}else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//Process form data update into mysql database
if(isset($_POST['submit'])){
	
	$NameofFlags = $_POST['NameofFlags'];
	$Design = $_POST['Design'];
	$DateofCreation = $_POST['DateofCreation'];
	$Description = $_POST['Description'];
	$FlagVideos = $_POST['FlagVideos'];
    $Type = $_POST['Type'];
	$sql = "";


	if ($conn->query($sql) === TRUE) {
	  echo "Edit successfully";
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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Content</li>
                        </ol>
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								Edit Content id=<?php echo $contentid;?>
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
		<td><input type="text" name="NameofFlags" value="<?php echo $NameofFlags;?>" required></td>
	</tr>
	<tr>
		<td>Design</td>
		<td><input type="text" name="Design" value="<?php echo $Design;?>"></td>
	</tr>
	<tr>
		<td>Date of Creation</td>
		<td><input type="date" name="DateofCreation" value="<?php echo $DateofCreation;?>"></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="Description"><?php echo $Description;?></textarea></td>
	</tr>
	<tr>
		<td>Source (URL)</td>
		<td><input type="text" name="FlagVideos" value="<?php echo $FlagVideos;?>"></td>
	</tr>
	<tr>
	<td>Type</td>
	<td>
	<input type="text" name="FlagVideos" value="<?php echo $Type;?>">
		<!--select name="Type">
		   <option value="Youtube">Youtube Video</option>
		   <option value="Image">Image</option>
		   <option value="Video">Video MP4</option>
		   <option value="Audio">Audio MP3</option>
		</select>-->
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