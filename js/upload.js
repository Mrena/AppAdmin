(function () {
	var input = document.getElementById("images"), 
		formdata = false;

	function showUploadedItem (source) {
  		var list = document.getElementById("image-list"),
	  		li   = document.createElement("li"),
	  		img  = document.createElement("img");
  		img.src = source;
  		li.appendChild(img);
		list.appendChild(li);
	}
	
	function showUploadedVideo(source){
		
		var list = document.getElementById("video-list"),
  		li   = document.createElement("li"),
  		video  = document.createElement("video");
		video.controls = true;
		video.src = source;
		li.appendChild(video);
		list.appendChild(li);
		
	}
	
function showUploadedAudio(source){
		
		var list = document.getElementById("audio-list"),
  		li   = document.createElement("li"),
  		audio  = document.createElement("audio");
		audio.controls = true;
		audio.src = source;
		li.appendChild(audio);
		list.appendChild(li);
		
	}

	if (window.FormData) {
  		formdata = new FormData();
  		document.getElementById("btn").style.display = "none";
  		document.getElementById("btnVideo_upload").style.display = "none";
  		document.getElementById("btnAudio_upload").style.display = "none";
	}
	
 	input.addEventListener("change", function (evt) {
 		document.getElementById("response").innerHTML = "Uploading . . .";
 		document.getElementById("audio_response").innerHTML = "Uploading . . .";
 		document.getElementById("video_response").innerHTML = "Uploading . . .";
 		var i = 0, len = this.files.length, img, reader, file;
	
		for ( ; i < len; i++ ) {
			file = this.files[i];
	
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedItem(e.target.result, file.fileName);
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}
			else if(!!file.type.match(/video.*/)){
				
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedVideo(e.target.result, file.fileName);
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("videos[]", file);
				}
				
				
			}
			else if(!!file.type.match(/audio.*/)){
				
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedAudio(e.target.result, file.fileName);
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("audio[]", file);
				}
				
				
			}
				
		}
	
		var uploadUrl = Settings.url+Settings.page+"?"+Settings.parameter_name+"=upload_images";
		console.log("upload url: "+uploadUrl);
		if (formdata) {
			$.ajax({
				url: uploadUrl,
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				success: function (data) {
					document.getElementById("response").innerHTML = data; 
					document.getElementById("audio_response").innerHTML = data;
			 		document.getElementById("video_response").innerHTML = data;
				}
			});
		}
	}, false);
}());
