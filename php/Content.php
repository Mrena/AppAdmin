<?php
	
	 require_once 'Connector.php';

    class Content extends Connector{
     	
		private $portfolioAudio = array();
        private $portfolioImages = array();
        private $portfolioVideos = array();
        private $sent_messages = array();
        private $stats = array();
        private $email_address;
        private $blog_address;
        private $home_summary;
        private $home_descr;
        private $about_descr;
        private $building_no;
        private $city;
        private $country;
        private $logo;
        
        public function getPortfolioAudio(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='portfolio_audio' AND From_user='Admin'";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
		 $count = 0;
         while($row = mysql_fetch_assoc($result)){
            $this->portfolioAudio[$count] = $row['Message_m'];
            $count++;
         }
         $this->disconnect();

         echo json_encode($this->portfolioAudio);
				
				
			}
	
	    public function getPortfolioImages(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='portfolio_images' AND From_user='Admin'";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
		 $count = 0;
         while($row = mysql_fetch_assoc($result)){
            $this->portfolioImages[$count] = $row['Message_m'];
            $count++;
         }
         $this->disconnect();

         echo json_encode($this->portfolioImages);
				
				
			}
			
			public function getEmailAddress(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='email_address' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->email_address = $row['Message_m'];

         	}
         	$this->disconnect();

         	echo json_encode($this->email_address);
				
				
			}
			
			public function setEmailAddress($email_address){
				$query = "UPDATE Message SET Message_m='$email_address' WHERE To_user='email_address' AND From_user='Admin'";
			    return $this->runQuery($query) ? true :  false;
				
			}		
			
			
		public function getBlogAddress(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='blog_address' AND From_user='Admin' LIMIT 1";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
         if($row = mysql_fetch_assoc($result)){
            $this->blog_address = $row['Message_m'];

         }
         $this->disconnect();

         echo json_encode($this->blog_address);
				
				
			}
			
		public function setBlogAddress($blog_address){
			$query = "UPDATE Message SET Message_m='$blog_address' WHERE To_user='blog_address' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;	
				
			}	
			
		public function getHomeSummary(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='home_summary' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->home_summary = $row['Message_m'];

         	}
         	$this->disconnect();

         echo json_encode($this->home_summary);
				
				
			}
			
		public function setHomeSummary($home_summary){
			$query = "UPDATE Message SET Message_m='$home_summary' WHERE To_user='home_summary' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;
			
		}			
			
		public function getHomeDescr(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='home_descr' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->home_descr = $row['Message_m'];

         	}
         	$this->disconnect();

         echo json_encode($this->home_descr);
				
				
			}
			
		public function setHomeDescr($home_descr){
			$query = "UPDATE Message SET Message_m='$home_descr' WHERE To_user='home_descr' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;
			
		}	
			
		public function getAboutDescr(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='about_descr' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->about_descr = $row['Message_m'];

         	}
         	$this->disconnect();

         echo json_encode($this->about_descr);
				
				
			}
			
		public function setAboutDescr($about_descr){
		 	$query = "UPDATE Message SET Message_m='$about_descr' WHERE To_user='about_descr' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;
			
			
		}		
			
		public function getBuildingNo(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='building_no' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->building_no = $row['Message_m'];

         	}
         	$this->disconnect();

         echo json_encode($this->building_no);
				
				
			}
			
		public function setBuildingNo($building_no){
			$query = "UPDATE Message SET Message_m='$building_no' WHERE To_user='building_no' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;
			
			
		}		
			
		public function getCity(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='city' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->city = $row['Message_m'];

         	}
         	$this->disconnect();

         echo json_encode($this->city);
				
				
			}
			
		public function setCity($city){
			$query = "UPDATE Message SET Message_m='$city' WHERE To_user='city' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;
			
			
		}		
			
			
		public function getCountry(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='country' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->country = $row['Message_m'];

         	}
         	$this->disconnect();

         echo json_encode($this->country);
				
				
			}
			
		public function setCountry($country){
			$query = "UPDATE Message SET Message_m='$country' WHERE To_user='country' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;
			
			
		}					
			
		public function getLogo(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='logo' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->logo = $row['Message_m'];

         	}
         	$this->disconnect();

         echo json_encode($this->logo);
				
				
			}
		
		public function setLogo($logo){
			$query = "UPDATE Message(Message_m) VALUES('$logo') WHERE To_user='logo' AND From_user='Admin'";
			return $this->runQuery($query) ? true :  false;
			
			
		}					
					
			
		public function getPortfolioVideos(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='portfolio_videos' AND From_user='Admin'";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
		 $count = 0;
         while($row = mysql_fetch_assoc($result)){
            $this->portfolioVideos[$count] = $row['Message_m'];
            $count++;


         }
         
		 $this->disconnect();
         echo json_encode($this->portfolioVideos);
				
				
			}
			

			
		public function getMessages(){
		
		 $query = "SELECT * FROM Message WHERE To_user='Admin'";
		 $this->connect();
		 $result = $this->runSelectQuery($query);
		 $count = 0;
         while($row = mysql_fetch_assoc($result)){
            $this->sent_messages[$count] = $row;
            $count++;
         }
        
		 $this->disconnect();
         echo json_encode($this->sent_messages);
				
				
			}
			
		public function sendEmail($reply_message,$email_address){
			
			// send email
			
			echo "success";
		}	
		
		public function deleteMessage($message_id){
			
			$query = "DELETE FROM Message WHERE message_id = $message_id";
			$this->connect();
			$this->runQuery($query);
			$status = "success";
			$this->disconnect();
			
			echo $status;
		}	
			
	  public function deleteAudio($audioPath){
			$status = "not deleted";
			if(file_exists("../".$audioPath))
			    {
			     
			unlink("../".$audioPath);   
			$query = "DELETE FROM Message WHERE Message_m = '$audioPath'";
			$this->connect();
			$this->runQuery($query);
			
			$status = "deleted";
			$this->disconnect();
			     }
		    echo $status;
			
		}	
			
		public function deleteImage($imagePath){
			$status = "not deleted";
			if(file_exists("../".$imagePath))
			    {
			     
			unlink("../".$imagePath);   
			$query = "DELETE FROM Message WHERE Message_m = '$imagePath'";
			$this->connect();
			$this->runQuery($query);
			
			$status = "deleted";
			$this->disconnect();
			     }
		    echo $status;
			
		}	
		
		
		public function uploadImage($image){
			$status = false;
			
			$max_photo_size = 5000000;
			$upload_required = true;
			// for the images to display on AppAdmin you need to save this image in the same location as the other ones
			$upload_dir =  '../images/';
			  
			  
			  do{
 
				 /* Does the file field even exist? */
 
					if (!isset($image)){
						$status = 'The form was not sent in completely. Please enter all of the required fields.';
						break;

						}
			  
			  
			  /* We check for all possible error codes we might get */

				switch ($image['error']) {
							case UPLOAD_ERR_INI_SIZE:
 								$staus = 'The size of the image is too large, '."it can not be more than $max_photo_size bytes.";
							break 2;
							case UPLOAD_ERR_PARTIAL:
								$status = 'An error ocurred while uploading the file, '."please <a href='{$upload_page}'>try again</a>.";
							break 2;
							case UPLOAD_ERR_NO_FILE:
									if ($upload_required) {
											$status = 'You did not select a file to be uploaded.';
							break 2;
									}
							break 2;
							case UPLOAD_ERR_FORM_SIZE:
									$status = 'The size was too large according to '.'the MAX_FILE_SIZE hidden field in the upload form.';
							case UPLOAD_ERR_OK:
									if ($image['size'] > $max_photo_size) {
											$status = 'The size of the image is too large, '."it can not be more than $max_photo_size bytes.";
											}
							break 2;
							default:
									$status = "An unknown error occurred, "."please try again <a href='{$upload_page}'>here</a>.";
								}

					/* Now we check for the mime type to be correct, we allow
 						* JPEG and PNG images */
 
							if (!in_array($image['type'],array ('image/jpeg', 'image/pjpeg', 'image/png'))) {
										$status = "You need to upload a PNG or JPEG image, "."please do so <a href='{$upload_page}'>here</a>.";
							break;
							}
						} while (0);


					/* If no error occurred we move the file to our upload directory */
						if (!$status) {
								if (!@move_uploaded_file($image['tmp_name'],$upload_dir . $image['name'])) {
													$status = "Error moving the file to its destination.";
												}
												else{
												$image_full_path = $upload_dir . $image['name'];	
												$query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('portfolio_images','Admin','$image_full_path',0)";
   												$this->connect();
												$this->runQuery($query);
			
												$status = "success";
												$this->disconnect();	
													
												}
										}
								 echo $status;		
			     }
		   	
		
		public function deleteVideo($videoPath){
		
			$status = "not deleted";
			if(file_exists("../".$videoPath))
			    {
			     
			unlink("../".$videoPath);   
			$query = "DELETE FROM Message WHERE Message_m = '$videoPath'";
			$this->connect();
			$this->runQuery($query);
			
			$status = "deleted";
		
			     }
		    echo $status." ".mysql_error();
		    $this->disconnect();
			
		}	
		
		
		public function updateText($home_descr_update,$home_summary_update,$about_descr_update,$email_update,$blog_address_update,$building_no_update,$city_update,$country_update){
			 $this->connect();
			 $status = "";
		  	 $status = $this->setHomeDescr($home_descr_update) ? "updated" : "not updated";
			 $status = $this->setHomeSummary($home_summary_update) ? "updated" : "not updated";
			 $status = $this->setAboutDescr($about_descr_update) ? "updated" : "not updated";
			 $status = $this->setEmailAddress($email_update) ? "updated" : "not updated";
			 $status = $this->setBlogAddress($blog_address_update) ? "updated" : "not updated";
			 $status = $this->setBuildingNo($building_no_update) ? "updated" : "not updated";
			 $status = $this->setCity($city_update) ? "updated" : "not updated";
			 $status = $this->setCountry($country_update) ? "updated" : "not updated";
			echo $status."".mysql_error();
			$this->disconnect();
		}
			
		public function getStats(){
				$my_app_name = "AppAdmin";
				$stats_query = "SELECT * FROM Stats";
				$this->connect();
				$stats_result = $this->runSelectQuery($stats_query);
         if($stats_row = mysql_fetch_assoc($stats_result)){
              $temp_stats_array = array("visits"=>$stats_row["visits"],"unique_visits"=>$stats_row["unique_visits"],"monthly_visits"=>$stats_row["monthly_visits"]);
              $this->stats[0] = $temp_stats_array;
           
         }
         

				$country_stats_query = "SELECT * FROM Country_Stats WHERE webapp_name='$my_app_name'";
				$country_stats_result = $this->runSelectQuery($country_stats_query);
				$count = 0;
         while($country_stats_row = mysql_fetch_assoc($country_stats_result)){
               $temp_country_array[$count++] = array($country_stats_row['country_name']=>$country_stats_row['number_of_visits']);
         }
         
         $this->stats[1] = $temp_country_array;
         
		 	$this->disconnect();
			echo json_encode($this->stats);
				
			}	
			
	
	}
	
?>