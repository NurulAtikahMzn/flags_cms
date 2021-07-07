<?php
include 'db.php';


if(isset($_POST['submit'])){
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cfmpassword = $_POST['cfmpassword'];
	//echo "$fullname $email $username $password $cfmpassword";

	if($password === $cfmpassword){
		$password=password_hash($password,PASSWORD_DEFAULT);
		$sql = "INSERT INTO user (fullname, email, username, password)
				VALUES ('$fullname', '$email', '$username', '$password')";
		
		if ($conn->query($sql) === TRUE) {
		  echo "<script>
		window.alert('New user registered successfully');
		</script>";
		header("Location: login.php");
		} else {
		  echo "<script>
		window.alert('Error: " . $sql . "<br>" . $conn->error ."');
		 </script>";
		}
	}
	else {
		echo "<script>
		window.alert('Password does not match!');
		</script>";
	}
		
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bendera-Bendera Di Malaysia</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Fullname</label>
                                                    <input name="fullname" class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter full name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
											<div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Username</label>
                                                    <input name="username" class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter user name" />
                                                </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input name="cfmpassword" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
											<input class="btn btn-primary btn-block" type="submit" name="submit" value="Register New Account">
											</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
$conn->close();

?>