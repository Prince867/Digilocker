<?php
		$db = mysqli_connect('localhost', 'u603813327_classnotes', 'Anup@123', 'u603813327_new');

$id = $_GET['id'];

$sq = " SELECT * FROM `imagee` WHERE id = $id ";

$result=mysqli_query($db,$sq);

$row = mysqli_fetch_array($result);

$oldPicture="images/".$row['filename'];

if (file_exists($oldPicture)) {

    // last resort setting
    // chmod($oldPicture, 0777);
    chmod($oldPicture, 0644);
        unlink($oldPicture);
        echo 'Deleted old imagee';
    } 
    else {
        echo 'image file does not exist';
    }

$sql = " DELETE FROM `imagee` WHERE id = $id ";

mysqli_query($db,$sql);

header('location:index.php');

?>
