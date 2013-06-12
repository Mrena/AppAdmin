<?php
require_once 'Connector.php';


class StartUp extends Connector
{
    
    private $db = "OnPoint";
   
    
    public function init()
    {
    
if($this->connect())
        {
   
  
   $query = "CREATE DATABASE OnPoint";
   echo $this->runQuery($query) ? "Database OnPoint created\n" :  "Could not create database\n".  mysql_error()."\n<br />"; 
  
   mysql_select_db("OnPoint", $this->con);

   $query = "CREATE TABLE Message(
   								  To_user VARCHAR(50) NOT NULL,
   								  From_user VARCHAR(50) NOT NULL,
								  Message_m VARCHAR(1000) NOT NULL,
								  Reply_m VARCHAR(50000),
								  Read_m INTEGER NOT NULL,
								  message_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY
								  )";
   echo $this->runQuery($query) ? "Table Message created\n" :  "Could not create table\t ".  mysql_error()."\n<br />";
   
     $query = "CREATE TABLE Stats(
   								  visits INTEGER,
								  unique_visits INTEGER,
								  monthly_visits INTEGER,
								  webapp_name VARCHAR(50) NOT NULL,
								  stats_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY
								  )";
   echo $this->runQuery($query) ? "Table Stats created\n" :  "Could not create table\t ".  mysql_error()."\n<br />";
   
   
   $query = "INSERT INTO Stats(visits,unique_visits,monthly_visits,webapp_name) VALUES(10000,5000,250,'AppAdmin')";
   			echo $this->runQuery($query) ? "Sample stats added\n" :  "Could not add sample stats\t ".  mysql_error()."\n<br />";
   
   
   
   $query = "CREATE TABLE Country_Stats(
   									  country_name VARCHAR(50) NOT NULL,
   								      number_of_visits INTEGER NOT NULL,
   								      webapp_name VARCHAR(50) NOT NULL,
								      country_stats_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY
								       )";
   echo $this->runQuery($query) ? "Table Country_Stats created\n" :  "Could not create table\t ".  mysql_error()."\n<br />";
   
   $query = "INSERT INTO Country_Stats(country_name,number_of_visits,webapp_name) VALUES('South Africa',10000,'AppAdmin')";
   			echo $this->runQuery($query) ? "Sample country stats added\n" :  "Could not add sample country stats\t ".  mysql_error()."\n<br />";
   			
   $query = "INSERT INTO Country_Stats(country_name,number_of_visits,webapp_name) VALUES('United States',5000,'AppAdmin')";
   			echo $this->runQuery($query) ? "Sample country stats added\n" :  "Could not add sample country stats\t ".  mysql_error()."\n<br />";
			   
   $query = "INSERT INTO Country_Stats(country_name,number_of_visits,webapp_name) VALUES('United Kingdom',2500,'AppAdmin')";
   			echo $this->runQuery($query) ? "Sample country stats added\n" :  "Could not add sample country stats\t ".  mysql_error()."\n<br />";				   			
   
   
   
   
   $images = array("images/portfolio/SudukiPassword.png","images/portfolio/Suduki_intact.png","images/portfolio/SimpleMemoryGame.png","images/portfolio/Settings.png","images/portfolio/PrintPIndex.png","images/portfolio/PigLatin.png","images/portfolio/mnVPro.png","images/portfolio/menu.png","images/portfolio/gameOn.png","images/portfolio/bookExchange.png","images/portfolio/photo_run.jpeg","images/portfolio/SudukiRun.png");
   
   for($i=0;$i<count($images);$i++){
   			$query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('portfolio_images','Admin','$images[$i]',0)";
   			echo $this->runQuery($query) ? "Sample image added\n" :  "Could not add sample image\t ".  mysql_error()."\n<br />";
   }
   
   
   $videos = array("videos/Wildlife.wmv");
   
   for($i=0;$i<count($videos);$i++){
   			$query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('portfolio_videos','Admin','$videos[$i]',0)";
   			echo $this->runQuery($query) ? "Sample video added\n" :  "Could not add sample video\t ".  mysql_error()."\n<br />";
   }
 
   $audio = array("audio/1.au","audio/2.au","audio/3.au","audio/4.au","audio/5.au","audio/6.au","audio/7.au","audio/8.au","audio/9.au");
   
   for($i=0;$i<count($audio);$i++){
   			$query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('portfolio_audio','Admin','$audio[$i]',0)";
   			echo $this->runQuery($query) ? "Sample audio added\n" :  "Could not add sample audio\t ".  mysql_error()."\n<br />";
   }
   
   
   
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('email_address','Admin','mac@domainname.com',0)";
			echo $this->runQuery($query) ? "Sample email address added\n" :  "Could not add sample email address\t ".  mysql_error()."\n<br />";

    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('blog_address','Admin','http://blog.mac.domainname.com',0)";
			echo $this->runQuery($query) ? "Sample blog address added\n" :  "Could not add sample blog address\t ".  mysql_error()."\n<br />";
			
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('home_summary','Admin','my name is Mac &amp; <br />I am a web n graphic designer',0)";
			echo $this->runQuery($query) ? "Sample home summary added\n" :  "Could not add sample home summary\t ".  mysql_error()."\n<br />";

    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('home_descr','Admin','Home page description goes here.',0)";
			echo $this->runQuery($query) ? "Sample home description added\n" :  "Could not add sample home description\t ".  mysql_error()."\n<br />";
		
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('about_descr','Admin','About page description goes here.',0)";
			echo $this->runQuery($query) ? "Sample about description added\n" :  "Could not add sample home description\t ".  mysql_error()."\n<br />";						
		
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('building_no','Admin','1090 25th Places',0)";
			echo $this->runQuery($query) ? "Sample building number added\n" :  "Could not add sample building number\t ".  mysql_error()."\n<br />";	
			
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('city','Admin','Bradenton, FL 34203',0)";
			echo $this->runQuery($query) ? "Sample city added\n" :  "Could not add sample city\t ".  mysql_error()."\n<br />";
			
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('country','Admin','United States',0)";
			echo $this->runQuery($query) ? "Sample country added\n" :  "Could not add sample country\t ".  mysql_error()."\n<br />";

    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('logo','Admin','images/icons/LOGO.png',0)";
			echo $this->runQuery($query) ? "Sample logo added\n" :  "Could not add sample logo\t ".  mysql_error()."\n<br />";
			
	$query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('Admin','mrena.pro@gmail.com','Hello World',0)";
			echo $this->runQuery($query) ? "Sample message added\n" :  "Could not add sample message\t ".  mysql_error()."\n<br />";
	
	$query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('Admin','mrena.pro1@gmail.com','Hello World1',0)";
			echo $this->runQuery($query) ? "Sample message added\n" :  "Could not add sample message\t ".  mysql_error()."\n<br />";								
  
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('Admin','mrena.pro2@gmail.com','Hello World2',0)";
			echo $this->runQuery($query) ? "Sample message added\n" :  "Could not add sample message\t ".  mysql_error()."\n<br />";
   
    $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('Admin','mrena.pro3@gmail.com','Hello World',0)";
			echo $this->runQuery($query) ? "Sample message added\n" :  "Could not add sample message\t ".  mysql_error()."\n<br />";



}
else
    echo "Could not connect".  mysql_error()."\n<br />";

 


    }
}

    $objStartUp = new StartUp();
    $objStartUp->init();




?>

