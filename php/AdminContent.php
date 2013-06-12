<?php
	
	
	require_once 'Connector.php';

    class AdminContent extends Connector{
     
        private $portfolioImages = array();
        private $portfolioVideos = array();
        private $messages = array();
        private $email_address;
        private $blog_address;
        private $home_summary;
        private $home_descr;
        private $about_descr;
        private $building_no;
        private $city;
        private $country;
        private $logo;
        
	
	    public function getPortfolioImages(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='portfolio_images' AND From_user='Admin' LIMIT 12";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
		 $count = 0;
         while($row = mysql_fetch_assoc($result))
         {
            $this->portfolioImages[$count] = $row['Message_m'];
            $count++;


         }
         $this->disconect();

         echo json_encode($this->portfolioImages);
				
				
			}
			
			public function getEmailAddress(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='email_address' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->email_address = $row['Message_m'];

         	}
         	$this->disconect();

         	echo json_encode($this->email_address);
				
				
			}		
			
			
		public function getBlogAddress(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='blog_address' AND From_user='Admin' LIMIT 1";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
         if($row = mysql_fetch_assoc($result)){
            $this->blog_address = $row['Message_m'];

         }
         $this->disconect();

         echo json_encode($this->blog_address);
				
				
			}	
			
		public function getHomeSummary(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='home_summary' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->home_summary = $row['Message_m'];

         	}
         	$this->disconect();

         echo json_encode($this->home_summary);
				
				
			}		
			
		public function getHomeDescr(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='home_descr' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->home_descr = $row['Message_m'];

         	}
         	$this->disconect();

         echo json_encode($this->home_descr);
				
				
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
			
		public function getBuildingNo(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='building_no' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->building_no = $row['Message_m'];

         	}
         	$this->disconect();

         echo json_encode($this->building_no);
				
				
			}	
			
		public function getCity(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='city' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->city = $row['Message_m'];

         	}
         	$this->disconect();

         echo json_encode($this->city);
				
				
			}	
			
			
		public function getCountry(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='country' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->country = $row['Message_m'];

         	}
         	$this->disconect();

         echo json_encode($this->country);
				
				
			}				
			
		public function getLogo(){
				
			$query = "SELECT Message_m FROM Message WHERE To_user='logo' AND From_user='Admin' LIMIT 1";
			$this->connect();
			$result = $this->runSelectQuery($query);
		
         	if($row = mysql_fetch_assoc($result)){
            	$this->logo = $row['Message_m'];

         	}
         	$this->disconect();

         echo json_encode($this->logo);
				
				
			}				
					
			
		public function getPortfolioVideos(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='portfolio_videos' AND From_user='Admin' LIMIT 12";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
		 $count = 0;
         while($row = mysql_fetch_assoc($result))
         {
            $this->portfolioVideos[$count] = $row['Message_m'];
            $count++;


         }
         
		 $this->disconect();
         echo json_encode($this->portfolioVideos);
				
				
			}
			
			
			
			
			// changes from the original
			
	public function getMessages(){
				
		$query = "SELECT Message_m FROM Message WHERE To_user='Admin'";
		$this->connect();
		$result = $this->runSelectQuery($query);
		
		 $count = 0;
         while($row = mysql_fetch_assoc($result))
         {
            $this->messages[$count] = $row;
            $count++;


         }
         
		 $this->disconect();
         echo json_encode($this->messages);
				
				
			}
	
	}
	
	
	
	
	
	
	
	
	
	
	
?>