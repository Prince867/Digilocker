<!DOCTYPE html>
<html lang="en">

<head>
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8196806567926054"
     crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">

	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
		<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="shortcut icon" type="image" href="favicon.jpg"/>

   
</head>

<body>
	
	
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">
			<div class="overlay">


            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Project.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Untitled.jpg" alt="Second slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div> -->
  </div>
</div>


				<span>
					<p>Welcome</p>
					<p>Did you forget your documents or were they important documents ? 😔 doclocker will help you in
						this matter just sign up and upload your required documents which you can view and download
						anytime and anywhere</p>

				</span>

			</div>
		</div>

		<div class="right">


			<h5>Login !</h5>

			<p>Don't have an account? <a href="#"  data-toggle="modal" data-target="#exampleModal">Create Your Account</a> it takes less than a minute</p>
		
            <?php
  
  $login = false;
  $showError = "";
  // error_reporting(0);
  if(isset($_POST['login_user'])){
		$db = mysqli_connect('localhost', 'u603813327_classnotes', 'Anup@123', 'u603813327_new');
    $username= $_POST["username"];
    $password= $_POST["password"];
    $sql = "Select * from `users` WHERE username='$username' and password='$password'";
    $result = mysqli_query($db, $sql);
    $num = mysqli_num_rows($result);
    if (!$num == 0)
     { 
              $login = true;
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['username'] = $username;
              header("location: index.php");
             
                                                           } 
          else{
              $showError = "Invalid Credentials";
              }
                                              
                 
                                        } 
  
  ?>
  
  <?php 
  if(isset($_POST['login_user'])){
  echo "<div class='alert alert-warning' role='alert'>
  $showError
  </div>";
    }
  ?>
<?php include('server.php') ?> 


<?php 

if(isset($_POST['reg_user'])){
echo "<div class='alert alert-warning' role='alert'>
$name_error
</div>";
  }
?>
  
            <form method="post">
				<div class="input">
					<div class="alert alert-secondary" role="alert">

						<div class="form-group">
							<label for="exampleInputEmail1">Enter your Username</label>
							<input type="text" name="username" class="form-control" id="exampleInputEmail1"
								aria-describedby="emailHelp" placeholder="Enter your username">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
								else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Enter your Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1"
								placeholder="Password">
						</div>
						<!-- <div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div> -->
						<button type="submit" name="login_user" class="btn btn-primary">Submit</button>


					</div>
				</div>
			</form>
		</div>


    
		
		<!-- partial -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"></script>
</body>

</html>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="alert alert-primary p-0 m-0" role="alert">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
</div>
      <div class="modal-body">
      <form method="post">
         
             
              <div class="alert alert-secondary" role="alert">
  
                
                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter your Username</label>
                      <input type="text"  name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      value="<?php echo $username; ?>"required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                          else.</small>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Enter your Email</label>
                      <input type="text"  name="email" class="form-control" id="exampleInputPassword1" value="<?php echo $email; ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Enter your Password</label>
                      <input type="password"  name="password_1" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Enter your Password</label>
                      <input type="password"  name="password_2" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <button type="submit" name="reg_user" class="btn btn-primary">Submit</button>
              </div>
     
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   
      </div>
    </div>
  </div>
</div>
</div>
<div style="
    width: 100%;
    top: 0;
    position: absolute;
">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<img style="width:92px;" src="Web.jpg">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ml-5" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link btn btn-light" href="privacypolicy.php">Privacy Policy<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn btn-light" href="T&S.php">Terms of Service</a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn btn-light" href="contact.php">Contact Us
					</a>
				</li>

			</ul>
		</div>
	</nav>
</div>

<a style="
    buttom: 0pxright:0px;
    bottom: 0;
    right: 0;" href="//www.dmca.com/Protection/Status.aspx?ID=efb7a81c-17a8-4c4d-ad1f-f723116c65f4" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=efb7a81c-17a8-4c4d-ad1f-f723116c65f4"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>