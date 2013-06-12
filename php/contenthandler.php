<?php
	
	require_once('Content.php');
	
	
	
	if(isset($_GET['contentType'])){
        
 		$contentType = $_GET['contentType'];
 		$upload_folder;
 		$upload_type;
 		switch($contentType){
			case "upload_images" :  $upload_folder = "images/";
			                        $upload_type = "images";
			  break;
			case "upload_videos" : $upload_folder = "videos/";
								   $upload_type = "videos";
			  break;
			case "upload_audio" : $upload_folder = "audio/";
								   $upload_type = "audio";
			  break;  
		}
 		if($contentType=="upload_images" || $contentType=="upload_videos" || $contentType=="upload_audio"){
			foreach ($_FILES[$upload_type]["error"] as $key => $error) {
    			if($error == UPLOAD_ERR_OK) {
        			$name = $_FILES[$upload_type]["name"][$key];
        			move_uploaded_file($_FILES[$upload_type]["tmp_name"][$key], $upload_folder . $_FILES[$upload_type]['name'][$key]);
       
    		}
		}
	echo "<h3>Successfully Uploaded Files</h3>";	
	}	
	
}	
	
	
	
	
	
	
	@$content = $_REQUEST['contentType'];
	@$imagePath = $_GET['image_path'];
	@$videoPath = $_GET['video_path'];
	@$audioPath = $_GET['audio_path'];
	@$reply_message = $_GET['reply_message'];
	@$email_address = $_GET['email_address'];
	@$message_id = $_GET['message_id'];
	@$image = $_FILES['photo'];
	
	if(isset($content) && $content == "update_text"){
	@$home_descr_update = $_GET['home_descr_update'];
	@$home_summary_update = $_GET['home_summary_update'];
	@$about_descr_update = $GET_['about_descr_update'];
	@$email_update = $_GET['email_update'];
	@$blog_address_update = $_GET['blog_address_update'];
	@$building_no_update = $_GET['building_no_update'];
	@$city_update = $_GET['city_update'];
	@$country_update = $_GET['country_update'];
	
	}

	if(isset($content)){
	$objContent = new Content();
	switch($content){
	 // It is assumed that you used the following case values for a particular media
	 	case "audio" : $objContent->getPortfolioAudio();
		      break;
		case "portfolio" : $objContent->getPortfolioImages();
		      break;
		case "email" : $objContent->getEmailAddress();
		      break;
		case "blog" : $objContent->getBlogAddress();
		      break;
		case "home_summary" : $objContent->getHomeSummary();
		      break;
		case "home_descr" : $objContent->getHomeDescr();
		      break;
		case "about_descr" : $objContent->getAboutDescr();
		      break;
		case "building_no" : $objContent->getBuildingNo();
		      break;
		case "city" : $objContent->getCity();
		      break;
		case "country" : $objContent->getCountry();
		      break;
		case "videos" : $objContent->getPortfolioVideos();
		      break;
		case "logo" : $objContent->getLogo();
		      break;
		 case "messages" : $objContent->getMessages();
		      break; 
		case "message_reply" : $objContent->sendEmail($reply_message,$email_address);
		      break;
		case "delete_message" : $objContent->deleteMessage($message_id);
		      break;	  	   
		case "stats" : $objContent->getStats();
		      break; 
		case "delete_image" : $objContent->deleteImage($imagePath);
		      break;
		case "image_upload" : $objContent->uploadImage($image);
		      break;      
		case "delete_video" : $objContent->deleteVideo($videoPath);
		      break;  
		case "delete_audio" : $objContent->deleteAudio($audioPath);
		      break;  	      
		case "update_text" : $objContent->updateText($home_descr_update,$home_summary_update,$about_descr_update,$email_update,$blog_address_update,$building_no_update,$city_update,$country_update);
		      break;	  	    
		
		
		}
		
		
		
    }
	else
		echo json_encode("contentType not set");		
	
	
	
	
?>