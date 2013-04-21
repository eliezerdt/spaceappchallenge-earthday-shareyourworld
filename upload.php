<?php include('header.php'); ?>
<button class="main-menu">Upload your photos</button>
<?php include('menu.php'); ?>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '564248430265246',                        // App ID from the app dashboard
      channelUrl : 'http://nasa.dev/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });
	
	jQuery(function($){
		
		
		$('.connect').click(function(e){
			$('.loading').show();
			e.preventDefault();
			FB.login(function(response) {
				console.log(response);
				$('.loading').hide();
				location.reload();
			}, {scope: 'email,user_likes,user_photos,publish_actions'});
		});
		
		/*$('#photos-holder').isotope({
			itemSelector : '.photo',
			layoutMode : 'fitRows'
		});*/
		
		var currentTrigger, latLongMarker = [];
		$(document).on('click','.album',function(e){
			$('.albums li').removeClass('current');
			$(this).parent().addClass('current');
			$('.loading').show();
			var id = $(this).attr('href');
			FB.api('/'+  id +'/photos', function(response){
				//console.log(response.data);
				var photos = response.data;
				$('#photos-holder').html('');
				$.each(photos, function(i, photo){
					//console.log(photo);
					var pn = '', pp = '', placeTitle = '', placeSpan = '';
					pn = '<h4>Select</h4>';
					if(photo.place){
						pp = ' data-lat="'+ photo.place.location.latitude + '" data-long="'+ photo.place.location.longitude + '"';
						if(photo.place.location.city) {
							placeTitle = photo.place.location.city ;
						} else {
							placeTitle = photo.place.name;
						}
						
						placeSpan = '<span class="place"'+ pp +'></span>';
					}
					$('#photos-holder').append('<div class="photo" rel="#overlay" data-id="' + photo.id +'" data-date="' + photo.created_time +'" data-large="' + photo.images[3].source +'" data-thumb="' + photo.images[8].source +'"><img src="' + photo.images[6].source +'" width="' + photo.images[6].width + '" height="' + photo.images[6].height + '" /><div class="text">' + pn  + placeSpan + '</div></div>');
					$('.loading').hide();
				});
				
				//$('#photos-holder').isotope( 'reLayout' );
				
			});
			e.preventDefault();
		}).on('click','.photo',function(){
			if($(this).find('span.place').length == 0){
				ov.load();
				currentTrigger = $(this);
				//console.log(currentTrigger);
				$('#mini-map').gmap3({
					getgeoloc:{
						callback : function(latLng){
							//console.log(latLng);
							latLongMarker = latLng;
						  if (latLng){
							$(this).gmap3({
							  marker:{ 
								latLng:latLng,
								options: {
									draggable: true
								},
								events: {
									dragend: function(marker, markerinfo){	
									  //console.log(markerinfo.latLng);
									  latLongMarker = markerinfo.latLng;
									}
								  }
							  },
							  map:{
								options:{
								  zoom: 7
								}
							  }
							});
						  }
						}
					}
				});
			} else {
				$(this).toggleClass('selected');
				$(this).find('h4').text('Selected');
				var photosSelected = $('.photo.selected').length;
				if(photosSelected > 0){
					$('.add-photos').addClass('available');
				} else {
					$('.add-photos').removeClass('available');
				}
			}
			
			console.log(photosSelected);
			
		});
		
		$('.point-pointer').click(function(e){
			currentTrigger.toggleClass('selected');
			if(currentTrigger.find('span').length == 0){
				currentTrigger.find('.text').append('<span class="place" data-long="'+ latLongMarker.kb + '" data-lat="'+ latLongMarker.jb +'"></span>');
			} else {
				currentTrigger.find('.place').attr({ 'data-long' : latLongMarker.kb, 'data-lat' : latLongMarker.jb });
			}
			currentTrigger.find('h4').text('Seleted');
			ov.close();
			$('#mini-map').gmap3('destroy');
			
			var photosSelected = $('.photo.selected').length;
			if(photosSelected > 0){
				$('.add-photos').addClass('available');
			} else {
				$('.add-photos').removeClass('available');
			}
			e.preventDefault();
		});
		
		var photos2send = [];
		$('.add-photos').click(function(e){
			var originalText = $(this).text();
			var _this = $(this);
			$('.photo.selected').each(function(){
				var photo2send = { 
					id: $(this).attr('data-id'), 
					long: $(this).find('.place').attr('data-long'), 
					lat : $(this).find('.place').attr('data-lat'),
					date : $(this).attr('data-date'),
					thumb : $(this).attr('data-thumb'),
					large : $(this).attr('data-large')
				};
				photos2send.push(photo2send);
				_this.text('Added!');
				setTimeout(function(){
					_this.text(originalText);
				}, 1000);
				//console.log(photos2send);
			});
			//postToFeed();
			
			e.preventDefault();
		});
		
		$('.send').click(function(e){
			console.log(photos2send);
			$.ajax({
				url: 'api.php',
				type: 'POST',
				dataType:'json',
				data: { image: photos2send },
				success: function(data){
					console.log(data);
				},
				complete: function(data){
					console.log(data);
				}
			});
			FB.api('/me/feed', 'post', {
				  message:'I have shared the world from my eyes',
				  link:'http://shareyourworld.com',
				  picture: 'http://royalworkshop.com/planetearth/images/fb_thumb.jpg',
				  name: "Share your world as I did, share our planet's vision.",
				  description: 'The Earth Day started in 1970, from there people have been sharing the world, follow us and tell the world, what you see.'
			 },function(data) {
				  console.log(data);
			 });
			e.preventDefault();
		});
		
		
		var ov = $('#overlay').overlay({
			onClose: function(){
				$('#mini-map').gmap3('destroy');
			}
		}).data('overlay');
	
	}); //jQuery
	
	FB.getLoginStatus(function(response) {
		console.log(response);
		if(response.status === 'connected'){
			//console.log(response.userID);
			FB.api('/me', function(response) {
				var welcome = ['Hola ','Hi ','Bonjour ', 'Hallo ', 'Namaste '];
				var it = welcome[Math.floor(Math.random()*welcome.length)];
				//console.log(response);
				$('.hello').text(it + response.name)
				$('.welcome-user').show();
				$('.connect-wrap').hide();
			});
			
			FB.api('/me/albums', function(response){
				//console.log(response.data);
				var albums = response.data;
				$.each(albums,function(i, album){
					$('.albums').append('<li><a href="' + album.id +'" class="album">' + album.name + '</a></li>');
				});
				//$('.album:eq(0)').trigger('click');
				$('.loading').hide();
			});
			
		} else if(response.status === 'not_authorized'){ 
			$('.loading').hide();
			/*FB.login(function(response) {
				console.log(response);
				$('.loading').hide();
				//location.reload();
			}, {scope: 'email,user_likes,user_photos,publish_actions'});*/
		} else {
			$('.loading').hide();
			//not connected
		}
		//console.log(response);
	});
	
    function postToFeed() {

		// calling the API ...
		var obj = {
			method: 'feed',
			redirect_uri: window.location,
			link: 'https://developers.facebook.com/docs/reference/dialogs/',
			picture: 'http://fbrell.com/f8.jpg',
			name: 'Facebook Dialogs',
			caption: 'Reference Documentation',
			description: 'Using Dialogs to interact with users.'
		};
		
		function callback(response) {
			console.log(response);
			//document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
		}
		
		FB.ui(obj, callback);
	}
  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<a href="#" class="add-photos button">Add photos from this album</a>
<div class="container_960 upload_section">
	<div class="container_12">
        <div class="grid_12">
            <div class="hello page-title"></div>
            <div class="connect-wrap">
            	<p>Connect with your Facebook account an share your world with everybody.</p>
                <a href="#" class="connect button">Connect</a>
            </div>
        </div>
        <div class="clear"></div>
        <aside class="albums-holder grid_3">
        	<div class="welcome-user">
                <ul class="albums"></ul>
                <a href="#" class="send button block">Send</a>
            </div>
        </aside>
        <div id="photos-holder" class="grid_9">
            <p style="text-align:center;">Choose an album, then check your photos, we will ask for the location if we are unable to find it for you.</p>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="simple_overlay" id="overlay">
	<div id="mini-map"></div>
    <div class="content">
	    <a href="#" class="point-pointer button fleft">Add place</a>
        <div class="clear"></div>
    </div>
</div>
</body>
</html>
<?php //include('footer.php'); ?>