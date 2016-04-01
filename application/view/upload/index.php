<div class="container" style="position:relative;left:50%;transform:translateX(-50%);">

	<div class="uploadContentsWrapper">
		<div class="uploadContainer">
			<div class="uploadVideoContainer" style="height:auto;">
				<!-- <div id="uploadLabel" style=""><span>Upload video from local</span></div> -->
					<ul id="filelist" style="background-color:rgba(0,0,0,0.4);padding:0px 0px;margin:0px 0px;height:auto;">
					</ul>
					
					<div id="containerInner" style="background-color:white;">
						<div class="files_dropbox" id="files_dropbox">
							<!-- <a id="start-upload" href="javascript:;">[Start Upload]</a> -->
							<a id="browse" class="dropbox_background" href="javascript:;">dropbox_background</a>
							<span class="dropbox_notice" style="width:540px;height:30px;background-color:white;display:block;position:relative;top:160px;left:225px;">Drag and drop videos here or Click the above to select videos to upload</span>
						</div>
						<div class="more-options-area" style="width:100%;height:40px;background-color:transparent;position:relative;overflow:hidden;">
							<a id="browse" class="add-more-video" href="javascript:;" style="width:120px;height:0px;position:relative;float:right;top:5px;overflow:hidden;right:15px;">addMore</a>
						</div>

					</div>

			</div>

		</div>
	</div>
		
	</div>

	<script type="text/javascript">
		var uploader = new plupload.Uploader({
			runtimes:'html5',
			browse_button: "browse",
			container:document.getElementById('containerInner'),
			drop_element:'files_dropbox',
			url:"<?php echo Config::get('URL'); ?>scripts/uploadScript.php",
			flash_swf_url:'https://www.chywawa.com/js/upload/Moxie.swf',
			silverlight_xap_url:'https://www.chywawa.com/js/upload/Moxie.xap',
			autostart:true,
			dragdrop:true,
			// filters:{

			// },

			init: {
				PostInit: function() {
					document.getElementById('filelist').innerHTML = '';
					// document.getElementById('start-upload').onclick = function() {
					// 	uploader.start();
					// 	return false;
					// };
				},
				
				FilesAdded: function(up, files) {
					// alert($('.files_dropbox').height());
					if ($('.files_dropbox').height()>0) {
						// alert("animatee");
						
						$('.files_dropbox').css('height','0px');
						$('.add-more-video').css('height','30px');

						// $('.files_dropbox').animate({
						// 	height:"0px"
						// },1000,function(){
						// 	//animation complete
						// 	$('.add-more-video').css('height','30px');
						// });
					};

					plupload.each(files, function(file) {
						//remove the 'browse' id from the main upload button
						//and add the 'browse' id to add more button
						// $('.dropbox_background').removeAttr('id');
						// $()

						/*added new files and hide the upload area*/

						//here customize the file list 
						document.getElementById('filelist').innerHTML +=
						'<div id="' + file.id + '" class="uploadUnit" style="background-color:White;height:140px;border:1px solid rgba(0,0,0,0.1);min-height:235px;height:auto;padding:10px 10px;">'+


							'<div class="preview" style="width:200px;height:100px;background-color:rgba(0,0,0,0.2);float:left;border:1px solid rgba(0,0,0,0.2);">'+
								'<div class="uploading-loading-gif" style="position:relative;background-color:rgba(0,0,0,0);width:30px;height:30px;top:35px;left:85px;"><a id="uploading-loading" href="#">uploading</a></div>'+
								'<div class="thumbnail-preview" style="position:relative;width:100%;height:100%;background-color:transparent;top:-30px;"></div>'+
							'</div>'+
							
							'<div class="infoArea" style="width:765px;float:left;margin-left:10px;margin-top:1px;height:auto;">'+
								'<div class="progressArea" style="width:100%;height:70px;background-color:rgba(12,23,122,0.3);background-color:White;margin-bottom:5px;">'+
									'<div class="progressBar" style="width:99.5%;height:28px;background-color:rgba(12,123,21,0.3);background-color:White;border:1px solid rgba(0,0,0,0.2);float:left;position:relative;top:0px;">'+
										'<div class="progressUploaded" style="position:relative;float:left;left:0px;height:28.5px;width:0%;background-color:rgba(0,49,107,0.2);float:left;"></div>'+
									'</div>'+
									'<div class="progressOverlay" style="width:83%;height:28px;position:relative;float:left;top:-30px;background-color:rgba(123,23,123,0.4);background-color:transparent;">'+
										'<b style="background-color:red;position:relative;top:7px;left:5px;background-color:transparent;"></b>'+
										'<span id="time-count-down" style="background-color:red;float:right;margin-top:5px;margin-right:10px;"></span>'+
									'</div>'+
									'<div class="progressNotice">'+
										'<div class="uploading-notice-icon-container"><a id="upload-notice-icon"></a></div>'+'<div class="uploading-notice-body-icon"><span id="fileSize" style="display:inline-block;position:relative;top:5px;font-size:13px;">'+'Size:'+plupload.formatSize(file.size)+'</span><span id="currentNotification" style="display:inline-block;position:relative;top:5px;font-size:13px;left:10px;">Your video is still uploading, pls keep this page open until done.</span></div>'+
									'</div>'+
								'</div>'+

								'<div class="specificationArea">'+
									'<div class="titleArea">'+
										// '<input  type="text">'+
										'<input class="fileName" value="'+file.name +''+'">'+
									'</div>'+
									'<div class="tagsArea" style="">'+
										'<textarea rows="4" cols="50" id="tagsArea" placeholder="Enter tags here(start with a #, e.g.: #life #travel)"></textarea>'+
									'</div>'+
								'</div>'+

								'<div class="publishArea" style="position:relative;width:121px;height:31px;background-color:transparent;bottom:-3px;left:643px;">'+
									'<a id="'+file.id+'" class="publish" href="javascript:;">publish</a>'+
								' </div>'+

							'</div>'+
						'</div>';
						uploader.start();

					});

							// $('.publishArea .publish').click(function(){

							// 				// alert($('.publishArea .publish').attr('id'));

							// 				var uploadId=$('.publish').attr('id');
							// 				console.log(uploadId);


							// 				console.log($('#'+uploadId+" "+".uploadUnit").height());

							// 				if ($('#'+uploadId+" "+".uploadUnit").height()>0){
							// 					$(select).animate({
							// 						height:'0px;'
							// 					},1000,function(){
							// 						//animate complete
							// 					});
							// 				};
							// 		});

				},
				
				UploadProgress: function(up, file) {
					document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>UPLOADING&nbsp' + file.percent + "%</span>";
					
					$("#"+file.id+" "+".progressUploaded").css('width',file.percent.toString().concat("%"));
					//console.log(file.percent.toString()+"%");
					//console.log("#"+file.id+".progressUploaded");
					if(file.percent==100){
						document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>PROCESSING ...' + "</span>";
						//document.getElementById(file.id).getElementsByTagName('time-count-down').innerHTML = 'Less than a minute';
						//$("#"+file.id+" "+"#time-count-down").innerHTML = 'Less than a minute';
						$("#"+file.id+" "+"#currentNotification").html('We are processing the video, pls wait until done.');



						// 						$('.publishArea .publish').click(function(){

						// 					// alert($('.publishArea .publish').attr('id'));

						// 					var uploadId=$('.publish').attr('id');
						// 					// $('.publish').attr('id',"");
						// 					// console.log(uploadId);

						// 					// console.log($('#filelist '+".uploadUnit"+" #"+uploadId));
						// 					// console.log($('#filelist #'+".uploadUnit"+" "+uploadId).attr('id'));
						// 					// console.log($('#filelist '+".uploadUnit"+" #"+uploadId).height());


						// 					if ($('#filelist '+" #"+uploadId).height()>0){
						// 						console.log("animate");
						// 						console.log($('#filelist '+" #"+uploadId).height());
						// 						// $('#filelist '+" #"+uploadId).animate({
						// 						// 	'min-height':'0px',
						// 						// 	// background-color:'red'
						// 						// },1000,function(){
						// 						// 	//animate complete
						// 						// });
						// 						$('#filelist '+" #"+uploadId).remove();
						// 					};

						// 					// console.log('finish');
						// 					console.log($('#filelist '+" #"+uploadId).height());
						// 					// console.log(($('#filelist '+" #"+uploadId)));
						// 					// console.log('uploadUnit:'+$('#filelist '+".uploadUnit"+" #"+uploadId).height());
						// });
					}
				},

				FileUploaded: function(up,file,response){
						document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>UPLOADED' + "</span>";
						//document.getElementById('time-count-down').innerHTML = '';
						//$("#"+file.id+" "+"#time-count-down").innerHTML = 'Less than a minute';
						$("#"+file.id+" "+'.publish').css('background-image','url(<?php echo Config::get("URL"); ?>imgs/upload/publish-button-enabled.png)');
						$("#"+file.id+" "+"#currentNotification").html('Congrats, your video is uploaded! Edit the video name, add tags, and publish this video.');

						$('.publishArea .publish').click(function(){

											// alert($('.publishArea .publish').attr('id'));

											var uploadId=$('.publish').attr('id');
											// $('.publish').attr('id',"");
											// console.log(uploadId);

											// console.log($('#filelist '+".uploadUnit"+" #"+uploadId));
											// console.log($('#filelist #'+".uploadUnit"+" "+uploadId).attr('id'));
											// console.log($('#filelist '+".uploadUnit"+" #"+uploadId).height());


											if ($('#filelist '+" #"+uploadId).height()>0){
												console.log("animate");
												console.log($('#filelist '+" #"+uploadId).height());
												// $('#filelist '+" #"+uploadId).animate({
												// 	'min-height':'0px',
												// 	// background-color:'red'
												// },1000,function(){
												// 	//animate complete
												// });
												$('#filelist '+" #"+uploadId).remove();
											};

											// console.log('finish');
											console.log($('#filelist '+" #"+uploadId).height());
											// console.log(($('#filelist '+" #"+uploadId)));
											// console.log('uploadUnit:'+$('#filelist '+".uploadUnit"+" #"+uploadId).height());
						});

				},

				Error: function(up, err) {
					document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
				}

			}
		});

		uploader.init();
		// uploader.bind('FilesAdded', function(up,files){
		// 	var html = '';
		// 	plupload.each(files,function(file){
		// 		html += '<li id="'+file.id + '">' +file.name+ ' ('+plupload.formatSize(file.size)+')<b></b></li>';
		// 	});
		// 	document.getElementById('filelist').innerHTML += html;
		// });

		// uploader.bind('UploadProgress',function(up, file){
		// 	document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>'+file.percent +"%</span>";
		// });

		// uploader.bind('Error', function(up,err){
		// 	document.getElementById('console').innerHTML += "\nError #"+err.code+": "+err.message;
		// });

		//document.getElementById('start-upload').onclick = function(){
		//	uploader.start();
		//};
	</script>

	<script>
		//clicks handlers
		/* Add more videos */
		//
		// increate the upload area height to its origin height and hide the add more option
		//
		$('.add-more-video').click(function(){
			// alert($('.files_dropbox').height());
			if ($('.files_dropbox').height()==0) {
				// alert("animatee");
				$('.files_dropbox').animate({
						height:"400px"
				},1000,function(){
							//animation complete
						$('.add-more-video').css('height','0px');
				});
			};
		});

	</script>

</div>