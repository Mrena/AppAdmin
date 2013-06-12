 	   var objContentInitializer = new ContentInitializer();
		
        
 	   var populateWebApp = function(){
 		   
 		    Populate.populatePortfolioAudio();
 		    Populate.populatePortfolioImages();
 		    Populate.populatePortfolioVideos();
		    Populate.populateText();
		    Populate.populateMessages();
		    Populate.populateStats();
 		   
 		   
 	   };
 	   
	 	var radioClicked = false;
		$(document).ready(function(){
			
			if(localStorage['Adminsettings']){
		           Settings = JSON.parse(localStorage['Adminsettings']);
	 		       objContentInitializer.initialize();
		        	 }
			
			if(localStorage['ran'] && localStorage['ran']=="one")
		 		      $(".settings").hide();
			else if(localStorage['ran']){
				Populate.populateSettings();
				}
			
			
			$("#selectionScreen").on({
				popupbeforeclose : function(){
					if(!radioClicked)
						 setTimeout(function(){
							$("#selectionScreen").popup("open"); 
						 },300);
				}
			});
			
			$("#managephotos").on({
		    	pagebeforeshow : function(){
		    		  var w = $(window).width(); 
		    		  var wMinus = w - 80 ;
		    		  $("#photos img").attr("width", wMinus + "px");
		                 }
			});
			if(!localStorage["ran"])
				  $("#selectionScreen").popup("open");
				 
			
			$("input[type='radio']").bind("change",function(event,ui){
				radioClicked = true;
				if(this.value=="one")
					{
					 localStorage['ran'] = "one";
					 Settings.show_settings = "false"
					  }
				  		else
				  			{
				  		  localStorage['ran'] = "many";
				  		  Settings.show_settings = "false"
				  			}
				
				   $.mobile.changePage("#settings");
			});
			
			
			$("#photo_upload_form").attr("action",Settings.ur+Settings.page);
			
			
			
			
			
			$("#saveSettings").on("vclick",function(e){
				
				Settings.url = $("#url").val();
				Settings.parameter_name = $("#parameter").val();
				Settings.page = $("#page").val();
				Settings.messagesVal = $("#messagesVal").val();
				Settings.emailVal = $("#emailVal").val();
				Settings.blog_addressVal = $("#blog_addressVal").val();
				Settings.home_summaryVal = $("#home_summaryVal").val();
				Settings.home_descrVal = $("#home_descrVal").val();
				Settings.about_descrVal = $("#about_descrVal").val();
				Settings.building_noVal = $("#building_noVal").val();
				Settings.cityVal = $("#cityVal").val();
				Settings.countryVal = $("#countryVal").val();
				Settings.logoVal = $("#logoVal").val();
				Settings.audioVal = $("#audioVal").val();
				Settings.photosVal = $("#photosVal").val();
				Settings.videosVal = $("#videosVal").val();
				Settings.statsVal = $("#statsVal").val();
				localStorage['Adminsettings'] = JSON.stringify(Settings);
				
				
	 		        objContentInitializer.initialize();
	 		       if(localStorage['ran']=="one")
	 		    	     $(".settings").hide();
	 		             $.mobile.changePage("#index");
	 		      
	 		      
	 		      e.preventDefault();
				
			});
			
			$("#update_text").on("vclick",function(e){
				
				Settings.emailVal = $("#email_update").val();
				Settings.blog_addressVal = $("#blog_address_update").val();
				Settings.home_summaryVal = $("#home_summary_update").val();
				Settings.home_descrVal = $("#home_descr_update").val();
				Settings.about_descrVal = $("#about_descr_update").val();
				Settings.building_noVal = $("#building_no_update").val();
				Settings.cityVal = $("#city_update").val();
				Settings.countryVal = $("#country_update").val();
				objContentInitializer.updateText(Settings.emailVal,Settings.blog_addressVal,Settings.home_summaryVal,Settings.home_descrVal,Settings.about_descrVal,Settings.building_noVal,Settings.cityVal,Settings.countryVal);
				$.mobile.changePage("#manage");
				
				
				e.preventDefault();
				
			});
			
			
			var image_number = 0;
			/*
			$("#one_more").on("vclick",function(e){
				
				
				console.log("one more clicked");
				$("#uploader").append("<label for='image"+image_number+"'>Image:</label><input type='file' name='image"+image_number+"' id='image"+image_number+"' /><br />");
				image_number++;
				e.preventDefault();
			});	
			
			
			$("#upload_photo").on("vclick",function(e){
				//console.log(document.getElementById("photo").src);
				 ajaxTo = Settings.url+Settings.page+"?"+Settings.parameter_name+"=image_upload&"+$("#photo_upload_form").serialize();
		    		console.log(ajaxTo);
				 $.ajax({
					 url : ajaxTo,
					 type : "POST",
					 dataType : "Image",
					 data : $("#photo"),
					 success : function(data){
		    			data = $.trim(data);
		    			if(data.toString()=="success"){
		    				console.log("uploaded");
		    				}
		    			else
		    				{
		    				console.log(data);
		    				console.log("Could not upload");
		    				}
		    		}
				
		    		
			});
				 
				 e.preventDefault();	 
		});	
	         
 			 */  
			
			
	 
		});