 var Populate = {
		 
		 
		 getMediaName : function(path){
			 
			 var index = path.lastIndexOf('/');
			 return path.substr(index+1);
			 
		 },
		 populateText : function(){
			 
			    $("#home_descr_update").val(Media.Text.home_page_descr[0]);
			    $("#about_descr_update").val(Media.Text.about_descr[0]);
			    $("#blog_address_update").val(Media.Text.company_blog[0]);
			    $("#email_update").val(Media.Text.email_address[0]);
			    $("#building_no_update").val(Media.Text.address_buildingNo[0]);
			    $("#city_update").val(Media.Text.address_city[0]);
			    $("#country_update").val(Media.Text.address_country[0]);
			    $("#home_summary_update").val(Media.Text.home_page_summary[0]);
			 
			 
			 
		 },
		 populatePortfolioAudio : function(){
				
	 			var $audio = $("#audio");
	 			$audio.html(" ");
			    var audio = "";
			    var objPop = this;
			    $.each(Media.Music.portfolio_audio,function(index,value){
			    	   audio +="<a href='#' id='audio_"+index+"' data-role='button'><audio src='"+Settings.url+"/"+Media.Music.portfolio_audio[index]+"' controls></audio> <br />Name: "+objPop.getMediaName(Media.Music.portfolio_audio[index]);+"</a>";
			    	   
			    });
			    
			    
			    $audio.html(audio).trigger("updatelayout");
			    
			    var ajaxTo="";
			    $.each(Media.Music.portfolio_audio,function(index,value){
			    	$("#audio_"+index).on("vclick",function(e){
			    		ajaxTo = Settings.url+Settings.page+"?"+Settings.parameter_name+"=delete_audio&audio_path="+Media.Music.portfolio_audio[index];
			    		$.get(ajaxTo,function(data){
			    			data = $.trim(data);
			    			if(data.toString()=="deleted")
			    				{
			    				console.log("deleted");
			    				$("#audio_"+index).append("deleted").css("color","red");
			    				
			    				}
			    			else
			    				console.log("error: "+data);
			    		});
		
			    		e.preventDefault();
			    		
					});
			    });
	 			 
	 			 
	 			
				 
				 
			 },
		 populatePortfolioImages : function(){
			
 			var $photos=$("#photos");
 			$photos.html(" ");
		    var photos = "";
		    var objPop = this;
		    $.each(Media.Images.portfolio,function(index,value){
		    	   photos +="<a href='#' id='photo_"+index+"' data-role='button'><img src='"+Settings.url+"/"+Media.Images.portfolio[index]+"'  /><br />Name: "+objPop.getMediaName(Media.Images.portfolio[index]);+"</a>";
		    });
		    
		    
		    $photos.html(photos).trigger("updatelayout");
		    
		    var ajaxTo="";
		    $.each(Media.Images.portfolio,function(index,value){
		    	$("#photo_"+index).on("vclick",function(e){
		    		ajaxTo = Settings.url+Settings.page+"?"+Settings.parameter_name+"=delete_image&image_path="+Media.Images.portfolio[index];
		    		$.get(ajaxTo,function(data){
		    			data = $.trim(data);
		    			if(data.toString()=="deleted")
		    				{
		    				console.log("deleted");
		    				$("#photo_"+index).append("deleted").css("color","red");
		    				
		    				}
		    			else
		    				console.log("error: "+data);
		    		});
	
		    		e.preventDefault();
		    		
				});
		    });
 			 
 			 
 			
			 
			 
		 },
		populatePortfolioVideos : function(){
								
			var $videos = $("#videos");
 			$videos.html(" ");
		    var videos = "";
		    var objPop = this;
		    $.each(Media.Videos.portfolio_videos,function(index,value){
		    	   videos +="<a href='#' id='video_"+index+"' data-role='button'><video src='"+Settings.url+"/"+Media.Videos.portfolio_videos[index]+"'></video><br />Name: "+objPop.getMediaName(Media.Videos.portfolio_videos[index]);+"</a>";
		    });
		    
		    
		    $videos.html(videos).trigger("updatelayout");
		    
		    var ajaxTo="";
		    $.each(Media.Videos.portfolio_videos,function(index,value){
		    	$("#video_"+index).on("vclick",function(e){
		    		ajaxTo = Settings.url+Settings.page+"?"+Settings.parameter_name+"=delete_video&video_path="+Media.Videos.portfolio_videos[index];
		    		$.get(ajaxTo,function(data){
		    			data = $.trim(data);
		    			if(data.toString()=="deleted")
		    				{
		    				console.log("deleted");
		    				$("#video_"+index).append("deleted").css("color","red");
		    				
		    				}
		    			else
		    				console.log("error: "+data);
		    		});
	
		    		e.preventDefault();
		    		
				});
		    });
 			 
 			 
 			
			
			
			
		},
		 
		populateSettings : function(){
			
			 $("#url").val(Settings.url);
			 $("#page").val(Settings.page);
			 $("#parameter").val(Settings.parameter_name);
			 $("messagesVal").val(Settings.messagesVal);
			 $("#emailVal").val(Settings.emailVal);
			 $("#blog_addressVal").val(Settings.blog_addressVal);
			 $("#home_summaryVal").val(Settings.home_summaryVal);
			 $("#home_descrVal").val(Settings.home_descrVal);
			 $("#about_descrVal").val(Settings.about_descrVal);
			 $("#building_noVal").val(Settings.building_noVal);
			 $("#cityVal").val(Settings.cityVal);
			 $("#countryVal").val(Settings.countryVal);
			 $("#logoVal").val(Settings.logoVal);
			 $("#audioVal").val(Settings.audioVal);
			 $("#photosVal").val(Settings.photosVal);
			 $("#videosVal").val(Settings.videosVal);
			 $("#statsVal").val(Settings.statsVal);
			
			
		},
		populateMessages : function(){
			         var messages = "";
							$.each(Media.Text.messages,function(index,value){
							messages += "<li id='message_"+index+"'><h3>From: "+value.From_user
							+"</h3><p>"+value.Message_m.substr(0,25)+"...<p></li>";	
							});
					       $("#messages_container").html(messages);
					
					       $.each(Media.Text.messages,function(index,value){
					    	  $("#message_"+index).on("vclick",function(){
					    		  $("#message").html("From: "+value.From_user+"<br />Message:<br /> "+value.Message_m);
					    		  $("#send_message").addClass("reply_"+index);
					    		  $("#delete_message").addClass("reply_"+index);
					    		  $.mobile.changePage("#read_message");	
				             
							});
					    	
					    	
					    });
					    
					       $.each(Media.Text.messages,function(index,value){
					    	
					    	   $("#send_message").on("vclick",function(e){
					    		   if($(this).hasClass("reply_"+index)){
					    		   var reply_message = $("#reply_message").val();
					    		   console.log(reply_message);
					    		   
					    		   ajaxTo = Settings.url+Settings.page+"?"+Settings.parameter_name+"=message_reply&reply_message="+reply_message+"&email_address="+value.From_user;
						    		$.get(ajaxTo,function(data){
						    			data = $.trim(data);
						    			if(data.toString()=="success")
						    				{
						    				console.log("sent");
						    				$("#message").css("color","green");
						    				$("#reply_message").val("");
						    				}
						    			else
						    				{
						    				console.log("Could not send");
						    				$("#message").css("color","red");
						    				}
						    		});
						    		
						    		
					    			}
					    		
					    		   e.preventDefault();
					    	});
					    	   
					    	   $("#delete_message").on("vclick",function(e){
					    		   if($(this).hasClass("reply_"+index)){
					    		   ajaxTo = Settings.url+Settings.page+"?"+Settings.parameter_name+"=delete_message&message_id="+value.message_id;
						    		$.get(ajaxTo,function(data){
						    			data = $.trim(data);
						    			if(data.toString()=="success")
						    				{
						    				console.log("deleted");
						    				$("#message").css("color","red");
						    				value.Message_m+="<p style='color:red'>Deleted</p>";
						    				$("#message_"+index).css("color","red");
						    				setTimeout(function(){
						    					$.mobile.changePage("#messages");
						    				},1000);
						    				
						    				}
						    			else
						    				{
						    				console.log(data);
						    				console.log("Could not deleted");
						    				}
						    		});
						    		
						    		
					    			}
					    		
					    		   e.preventDefault();
					    	});   
					    	   
					    	  
					    });
			
					
					
					
			
		},
		populateStats : function(){
			
			$("#monthly_visits").html("Monthly Visits : "+Media.Text.stats[0][0].monthly_visits);
			$("#unique_visits").html("Unique Visits : "+Media.Text.stats[0][0].unique_visits);
			$("#visits").html("Visits : "+Media.Text.stats[0][0].visits);
			var country_stats = "";
			$.each(Media.Text.stats[0][1],function(index,value){
				$.each(value,function(index_one,value_one){
					country_stats +=index_one +" : "+ value_one+"<br />";
					
				});
				
				
			});
			$("#country_visits").html(country_stats);
			
		},
		populateWebApp : function(){
			 
		   // Populate.populatePortfolioImages();
		   // Populate.populateText();
		    
	 }
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
 }