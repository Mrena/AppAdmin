<?php
	if(isset($_GET['contentType'])){
        
 		$contentType = $_GET['contentType'];
 		$upload_folder;
 		switch($contentType){
			case "upload_images" :  $upload_folder = "images/";
			  break;
			case "upload_videos" : $upload_folder = "videos/";
			  break;
			case "upload_audio" : $upload_folder = "audio/";
			  break;  
		}
 		if($contentType=="upload_images" || $contentType=="upload_videos" || $contentType=="upload_audio"){
		foreach ($_FILES["images"]["error"] as $key => $error) {
    		if($error == UPLOAD_ERR_OK) {
        	$name = $_FILES["images"]["name"][$key];
        	move_uploaded_file($_FILES["images"]["tmp_name"][$key], $upload_folder . $_FILES['images']['name'][$key]);
       
    		}
		}
	echo "<h3>Successfully Uploaded Files</h3>";	
	}	
	
}	



?>