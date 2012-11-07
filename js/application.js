!function ($) {

	$(function(){
		/* tooltips */
		$('#tooltip').tooltip({
			placement:'bottom'
		})

		$('#avatar-holder').tooltip({
			placement:'right'
		})

		$('#avatar-holder').live({
			mouseenter: function() {
				$('#uploader').css({
					"display":"inline",
					"z-index":10
				});
			},
			mouseleave: function() {
				$('#uploader').hide();
			}
		})


		/* file upload */
                $fub = $('#uploader');
                $messages = $('#messages');
                var uploader = new qq.FileUploaderBasic({
                      button: $fub[0],
                      action: base_url + 'settings/upload',
                      debug: false,
                      allowedExtensions: ['jpeg', 'jpg', 'gif', 'png'],
                      sizeLimit: 204800, // 200 kB = 200 * 1024 bytes
                      onSubmit: function(id, fileName) {
                        $messages.append('<div id="file-' + id + '" class="alert" style="margin: 20px 0 0"></div>') 
                      },
                      onUpload: function(id, fileName) {
                        $('#file-' + id).addClass('alert-info')
                                        .html('<img src="client/loading.gif" alt="Initializing. Please hold."> ' +
                                              'Initializing ' +
                                              '“' + fileName + '”')
                      },
                      onProgress: function(id, fileName, loaded, total) {
                        if (loaded < total) {
                          progress = Math.round(loaded / total * 100) + '% of ' + Math.round(total / 1024) + ' kB';
                          $('#file-' + id).removeClass('alert-info')
                                          .html('<img src="'+base_url+'img/preloader.gif" alt="In progress. Please hold."> ' +
                                                'Uploading ' +
                                                '“' + fileName + '” ' +
                                                progress)
                        } else {
                          $('#file-' + id).addClass('alert-info')
                                          .html('<img src="'+base_url+'img/preloader.gif" alt="Saving. Please hold."> ' +
                                                'Saving ' +
                                                '“' + fileName + '”')
                        }
                      },
                      onComplete: function(id, fileName, responseJSON) {
                        if (responseJSON.status === "Success") {
                            
                          $('#file-' + id).removeClass('alert-info')
                                          .addClass('alert-success')
                                          .html('<i class="icon-ok"></i> ' + 'Successfully saved '+'“' + fileName + '”')
                                          .delay(3000).hide("slow");
                                          
                          $('.img-polaroid').attr("src",responseJSON.filename);
                          $('#uploader').hide();
                          $('#avatar-holder').tooltip("hide")
                          
                        } else {
                          $('#file-' + id).removeClass('alert-info')
                                          .addClass('alert-error')
                                          .html('<i class="icon-exclamation-sign"></i> ' +
                                                'Error with ' +
                                                '“' + fileName + '”: ' +
                                                responseJSON.error)
                        }
                      }
                    })
        /* /file uploader */
	})

}(window.jQuery)
