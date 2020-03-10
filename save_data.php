<?php
if(isset($_POST['ok']) && $_POST['ok']=="done")
	{   //print_r($FILES)
        $dir = 'songs/';
        $path = $dir.basename($_FILES['add_song']['name']);
		$conn = mysqli_connect("localhost","root","","audio");
		$real_mame = $_FILES['add_song']['name'];
		if(mysqli_connect_errno($conn))
		{
			echo "Connection Failed";
		}
	    
        
		$file = addslashes(file_get_contents($_FILES['photo']['tmp_name']));  
	    $name =$_POST['name'];
		$artist =$_POST['artist'];
        
            
         $sql = "INSERT INTO song_db (Image,File_name,real_name,Artist) VALUES ('$file','$name','$real_mame','$artist')";
           
		
		if(!mysqli_query($conn,$sql))
		{
			echo "Failed";
		}
		else
		{
            if(move_uploaded_file($_FILES['add_song']['tmp_name'],$path)){
                header("Location:add.php");
            }
			
		}
	}
	
?>