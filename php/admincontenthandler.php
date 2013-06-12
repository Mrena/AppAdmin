<?php
	
	require_once('AdminContent.php');
	
	
	@$content = $_GET['content']
	
	if(isset($content))
	{
	$objAdminContent = new AdminContent();
	switch($content){
		case "portfolio" : $objAdminContent->getPortfolioImages();
		      break;
		case "email" : $objAdminContent->getEmailAddress();
		      break;
		case "blog" : $objAdminContent->getBlogAddress();
		      break;
		case "home_summary" : $objAdminContent->getHomeSummary();
		      break;
		case "home_descr" : $objAdminContent->getHomeDescr();
		      break;
		case "about_descr" : $objContent->getAboutDescr();
		      break;
		case "building_no" : $objAdminContent->getBuildingNo();
		      break;
		case "city" : $objAdminContent->getCity();
		      break;
		case "country" : $objAdminContent->getCountry();
		      break;
		case "videos" : $objAdminContent->getPortfolioImages();
		      break;
		case "logo" : $objAdminContent->getPortfolioVideos();
		      break;
		case "messages" : $objAdminContent->getMessages();
		      break;     
		
		}
		
		
    }		
	
	
	
	
	
?>