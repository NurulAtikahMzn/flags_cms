<?php
include 'header.php';

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage Content</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Bendera-Bendera Di Malaysia</a></li>
                            <li class="breadcrumb-item active">Flags Details</li>
                        </ol>
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								Flags Details
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
										<?php
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
		echo "<tr>
           <td>Content ID</td>
           <td>$contentid</td>
			</tr>
			<tr>
           <td>User ID</td>
           <td>$userid</td>
			</tr>
			<tr>
           <td>Name of Flags</td>
           <td>$NameofFlags</td>
			</tr>
			<tr>
		   <td>Date of Creation</td>
           <td>$DateofCreation</td>
			</tr>
			<tr>
		   <td>Design</td>
           <td>$Design</td>
			</tr>
			<tr>
		   <td>Description</td>
           <td>$Description</td>
			</tr>
			<tr>
		   <td>Type</td>
           <td>$Type</td>
			</tr>
			<tr>
		   <td>URL</td>
           <td><a href='https://youtu.be/$FlagVideos' target='blank'>$FlagVideos</a></td>
			</tr>";
	   if($Type=='Youtube'){
		   echo "
		   <tr>
		   <td>FlagVideos</td>
		   <td><iframe width='560' height='315' 
		   src='https://www.youtube.com/embed/$FlagVideos' frameborder='0' 
		   allow='accelerometer; autoplay; clipboard-write; 
		   encrypted-media; gyroscope; picture-in-picture' 
		   allowfullscreen></iframe></td>
		   </tr>";
		}
	   }
	} else {
	  echo "0 results";
	}
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