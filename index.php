<?php


error_reporting(0);


session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}


$msg = "";


	$db = mysqli_connect('localhost', 'u603813327_classnotes', 'Anup@123', 'u603813327_new');
$user = $_SESSION["username"];

 $sql = "select * from userss where username='$user'";

 $quer_y = mysqli_query($db,$sql);

 while($res1=mysqli_fetch_array($quer_y)){

	$id = $res1["id"];

 ?>

 </tr>

 <?php 
 }
  
 $username = "";
 $email = "";
// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/" . $filename;
  $file= $_POST['file'];
		$db = mysqli_connect('localhost', 'u603813327_classnotes', 'Anup@123', 'u603813327_new');

  // $sql_u = "SELECT * FROM image WHERE file='$file'";
  $sql_e = "SELECT * FROM imagee WHERE filename='$filename'";
  // $res_u = mysqli_query($db, $sql_u);
  $res_e = mysqli_query($db, $sql_e);

  if (mysqli_num_rows($res_e) > 0) {
    $name_error = "Sorry... Please rename your pdf file then try again !"; 	
   }//else if(mysqli_num_rows($res_e) > 0){
  //   $email_error = "Sorry... email already taken"; 
  // }
    else{
	// Get all the submitted data from the form
	$sql = "INSERT INTO imagee (`filename`, `file`,`user_id`) VALUES ('$filename','$file','$id')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<div class='alert alert-success font-weight-bold ' role='alert'>
    File uploaded successfully!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>×</span>
     </button>

  </div>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
}
?>
<?php
if(move_uploaded_file($tempname, $folder)){
echo "<div class='alert alert-warning' role='alert'>
$name_error
</div>";
}

?>
<html lang="en">
    <head>
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8196806567926054" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
          <link rel="icon" type="image/x-icon" href="">
    </head>
<body>

    <img style="margin: 0;
    position: relative;
    top: 164px;
    left: 50%;
    border-radius: 15px;
    width: 301px;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    box-shadow: 0.01px 0.01px 10px 1px rgb(0 0 0 / 51%);" data-toggle="modal" data-target="#exampleModal" src="io.jpg">
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
   -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Doc Locker</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
     
            <form  method="POST" action="" enctype="multipart/form-data">

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="file" id="inputPassword" placeholder="Enter documents name" Required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                      
                            <div class="form-group">
                                <div class="alert alert-primary" role="alert">
                                    <label for="exampleFormControlFile1">Choose your documents<div id="circle"></div>
</label>
                                    <input type="file"  class="form-control-file" name="uploadfile" id="exampleFormControlFile1" required>
                                    <!--accept="image/*,.pdf"-->
                                  </div>
                              
                            </div>
                   
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" onclick="rotate()" name="upload">UPLOAD</button>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 


  <div class="container-fluid" style="margin-top:98px;">
   
    <div class="alert alert-success" role="alert">
   
    <?php echo $_SESSION['username']; ?>
    <a href="index.php?logout='1'"><div style="float:right; cursor: pointer;">Logout<i class="fas fa-power-off m-1 "></i></div></a>
    </div>
  <table class="table table-sm">
    <thead>
      <tr>
     
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>



    <?php
		$db = mysqli_connect('localhost', 'u603813327_classnotes', 'Anup@123', 'u603813327_new');
$user = $_SESSION["username"];

 $sql = "select * from userss where username='$user'";

 $quer_y = mysqli_query($db,$sql);

 while($res1=mysqli_fetch_array($quer_y)){

	$id = $res1["id"];

 ?>

 </tr>

 <?php 
 }
  ?>

<?php
		$db = mysqli_connect('localhost', 'u603813327_classnotes', 'Anup@123', 'u603813327_new');
$query = " select * from imagee where user_id=$id";
$result = mysqli_query($db, $query);

while ($data = mysqli_fetch_assoc($result)) {
?>
    
      <tr>
        
        <td><?php echo $data['file']; ?></td>
        <td> <a href="./images/<?php echo $data['filename']; ?>"><button type="button" class="btn btn-primary btn-sm">Download</button></a></td>
        <td> <a href="delete.php?id=<?php echo $data['id']; ?>" class="text-white"> <button type="button"  class="btn btn-primary btn-sm">Delete</button></a></td>
        <?php
	    	}
	     ?>
      </tr>
     
    </tbody>
  </table>
  </div>
  <script>
    function rotate(){
      document.getElementById("circle").innerHTML = "<img src='spiner.gif' style='width: 43px; width: 43px; position: absolute; right: 0; top: 0;'>";
    }
    </script>
  <script src="https://kit.fontawesome.com/6cbbecf2cf.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
