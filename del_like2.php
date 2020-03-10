<?php
// Create connection
	$conn = new mysqli("localhost", "root", "", "audio");
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
    $nm=$_GET['id'];
    //echo "".$nm;
    $splited = explode("real=",$nm);
    $ids = $splited[0];
    $name = $splited[1];
    //echo "id = ".$ids;
    //echo "name = ".$name;
    $file = "like/".$name;
    

	$sql = "DELETE from like_db WHERE ID=".$ids;

	if(mysqli_query($conn,$sql))
    {
	
    if(unlink($file)){
        header("Location:Music_player.php");
    }
    }
    else
	header("Location:Music_player.php");


?>