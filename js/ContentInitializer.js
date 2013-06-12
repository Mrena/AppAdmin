var ContentInitializer = function(){
	
	
	
	this.messageHandler = function(contentType){
		console.log(contentType);
		var webpage = Settings.url+Settings.page+"?"+Settings.parameter_name+"="+contentType;
		console.log(webpage);
		try{
		$.get(webpage,function(data){
			    data = JSON.parse(data);
				console.log(data);
			
				switch(contentType){
				case Settings.photosVal : $.each(data,function(index,value){
									console.log(value);
									Media.Images.portfolio[index] = value;
									});
					break;
				case Settings.emailVal :  Media.Text.email_address[0] = data;
			     	break;
				case Settings.blog_addressVal :  Media.Text.company_blog[0] = data;
			     	break;
				case Settings.home_summaryVal : Media.Text.home_page_summary[0] = data;
			     	break;
				case Settings.home_descrVal :  Media.Text.home_page_descr[0] = data;
			     	break;
				case Settings.about_descrVal :  Media.Text.about_descr[0] = data;
		     		break; 	
				case Settings.building_noVal :  Media.Text.address_buildingNo[0] = data;
			     	break;
				case Settings.cityVal :  Media.Text.address_city[0] = data;
			     	break;
				case Settings.countryVal :  Media.Text.address_country[0] = data;
			     	break; 
				case Settings.statsVal :  Media.Text.stats[0] = data;
		     	break;	
				case Settings.videosVal : $.each(data,function(index,value){
				                        console.log(value);
									Media.Videos.portfolio_videos[index] = value;
								});
			     	break;
				case Settings.audioVal : $.each(data,function(index,value){
                    			console.log(value);
                    			Media.Music.portfolio_audio[index] = value;
								});
				  break;	
				case Settings.logoVal :  Media.Images.logo[0] = data;
			     	break; 
				case Settings.messagesVal : $.each(data,function(index,value){
										console.log(value);
                					Media.Text.messages[index] = value;
							});
				 	break;   
			     
			}
				
				
			
		   populateWebApp();
		});
		
		
		}catch(ex){
			console.log(ex);
		}

	}
	
	
	
	this.initialize = function(){
		$.each(Settings,function(index,value){
			console.log(index+" "+value);
			
		});
		
		this.getPortfolioAudio();
		this.getPortfolioImages();
		this.getPortfolioVideos();
		this.getText();
		this.getMessages();
		this.getStats();
		
		
	}
	
	
	this.getPortfolioAudio = function(){
		
		if(Settings.audioVal != "" && Settings.audioVal != undefined)
			this.messageHandler(Settings.audioVal);
		else
    		console.log("Settings.audioVal undefined or empty");
		
	}
	
	
	this.getPortfolioImages = function(){
		
		if(Settings.photosVal!="" && Settings.photosVal!=undefined)
			this.messageHandler(Settings.photosVal);
		else
    		console.log("Settings.photosVal undefined or empty");
		
	}
	
	this.getPortfolioVideos = function(){
		if(Settings.videosVal!="" && Settings.videosVal!=undefined)
			this.messageHandler(Settings.videosVal);
		else
    		console.log("Settings.videosVal undefined or empty");
		
	}
	
	
	
	this.getText = function(){
		
		this.getEmailText();
		this.getBlogText();
		this.getHomeSummaryText();
		this.getHomeDescrText();
		this.getAboutDescrText();
		this.getAddressText();
		
	}
	
	this.updateText = function(email,blog_address,home_summary,home_descr,about_descr,building_no,city,country){
		
		var textArray = Array(email,blog_address,home_summary,home_descr,about_descr,building_no,city,country); 
		var textJSON = JSON.stringify(textArray);
		ajaxTo = Settings.url+Settings.page+"?"+Settings.parameter_name+"=update_text&"+$("#website_textForm").serialize();
		console.log(ajaxTo);
		$.get(ajaxTo,function(data){
			 console.log(data);
		});
		
	}
	
	this.getEmailText = function(){
		if(Settings.emailVal!="")
			this.messageHandler(Settings.emailVal && Settings.emailVal!=undefined);
		else
    		console.log("Settings.emailVal undefined or empty");
		
		
	}
	
	this.getBlogText = function(){
		if(Settings.blog_addressVal!="")
			this.messageHandler(Settings.blog_addressVal && Settings.blog_addressVal!=undefined);
		else
    		console.log("Settings.blog_addressVal undefined or empty");
		
	}
	
	this.getHomeSummaryText = function(){
		if(Settings.messagesVal!="" && Settings.home_summary!=undefined)
			this.messageHandler(Settings.home_summaryVal);
		else
    		console.log("Settings.home_summaryVal undefined or empty");
		
	}
	
	this.getHomeDescrText = function(){
		if(Settings.home_descrVal!="" && Settings.home_descrVal!=undefined)
			this.messageHandler(Settings.home_descrVal);
		else
    		console.log("Settings.home_descrVal undefined or empty");
		
	}
	
	this.getAboutDescrText = function(){
		if(Settings.about_descrVal!="" && Settings.about_descrVal!=undefined)
			this.messageHandler(Settings.about_descrVal);
		else
    		console.log("Settings.about_descrVal undefined or empty");
		
	}
	
	this.getAddressText = function(){
		this.getBuildingNoText();
		this.getCityText();
		this.getCountryText();
		
	}
	
	this.getBuildingNoText = function(){
		if(Settings.building_noVal!="" && Settings.building_noVal!=undefined)
			this.messageHandler(Settings.building_noVal);
		else
    		console.log("Settings.building_noVal undefined or empty");
		
	}
	
	this.getCityText = function(){
		if(Settings.cityVal!="" && Settings.cityVal!=undefined)
			this.messageHandler(Settings.cityVal);
		else
    		console.log("Settings.cityVal undefined or empty");
		
	}
	
	this.getCountryText = function(){
		if(Settings.countryVal!="" && Settings.countryVal!=undefined)
			this.messageHandler(Settings.countryVal);
		else
    		console.log("Settings.countryVal undefined or empty");
		
	}
	
	
	
	this.getLogo = function(){
		if(Settings.logoVal!="" && Settings.logoVal!=undefined)
			this.messageHandler(Settings.logoVal);
		else
    		console.log("Settings.logoVal undefined or empty");
		
	}
	
    this.getMessages = function(){
    	if(Settings.messagesVal!="" && Settings.messagesVal!=undefined)
		           this.messageHandler(Settings.messagesVal);
    	else
    		console.log("Settings.messagesVal undefined or empty");
    	
	}
    
    this.getStats = function(){
    	if(Settings.statsVal!="" && Settings.statsVal!=undefined)
		    this.messageHandler(Settings.statsVal);
    	else
    		console.log("Settings.stats undefined or empty");
    	
	}
	
	
}