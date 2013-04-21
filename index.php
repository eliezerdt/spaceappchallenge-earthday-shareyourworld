<?php include('header.php'); ?>
<button class="main-menu">Pictures from the ground</button>
<?php include('menu.php'); ?>
	<section id="container">
    	<div id="map">
	        Here goes the map
        </div>
        <div id="tools">
            <div id="dl-menu" class="dropdown-menu dl-menuwrapper options-menu">
                <button>Open Menu</button>
                <ul class="dl-menu">
                    <li>
                        <a href="#">Filter by</a>
                        <ul class="dl-submenu">
                            <li class="dl-back"><a href="#">back</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Places</a></li>
                            <li><a href="#">Crisis</a></li>
                        </ul>
                    </li>
                    <li><a href="upload.php" class="btn-upload">Upload your photo</a></li>
                </ul>
            </div><!-- /dl-menuwrapper -->
        </div>
    </section>
    <div id="timeline">
    	<div id="target2" class="timeline-tgt">
    </div>
   	<script src="scripts/jquery.qtip.min.js"></script>
    <script src="scripts/raphael-min.js"></script>
    <script src="scripts/chronoline.js"></script>
    <script type="text/javascript">
		jQuery(function(){
			
			$('#map').gmap3();
			
			var ov = $('#overlay').overlay({
				onClose: function(){
					var wrap = this.getOverlay();
					wrap.find('image-wrapper').html('');
				},
				onBeforeLoad: function(){
					//console.log(a);
				}
			}).data('overlay');
			var events = [], timeline2;
			$.ajax({
				url: 'json.php?callback=?',
				dataType:'jsonp',
				success: function(data){
					if(data.length > 0){
						$.each(data, function(i,d){
							var dd  = new Date(d.date);
							events.push({ dates: [dd], title: 'Foto' + i, section : 0 });
							$("#map").gmap3({
								marker:{
									latLng: [d.lat, d.long],
									data: { thumb: '<div class="mini"><img src="' + d.thumb + '" /></div>', image: d.large },
									events: {
										click: function(marker, event, context){
											$('#overlay').find('.image-wrapper').html('<img src="'+ context.data.image + '" />');
											ov.load();
											console.log(context);
										},
										mouseover: function(marker, event, context){
											var map = $(this).gmap3("get"),
											  infowindow = $(this).gmap3({get:{name:"infowindow"}});
											if (infowindow){
												infowindow.setContent(context.data.thumb);
												infowindow.open(map, marker);
											} else {
											  $(this).gmap3({
												infowindow:{
												  anchor:marker, 
												  options:{content: context.data.thumb, maxWidth: 130 }
												}
											  });
											}
										},
										mouseout: function(){
											var infowindow = $(this).gmap3({get:{name:"infowindow"}});
											if (infowindow){
											  infowindow.close();
											}
										}
									}
								}
							}); //gmap3
						});
						console.log(events);
						
						timeline2 = new Chronoline(document.getElementById("target2"), events,
							{	//visibleSpan: DAY_IN_MILLISECONDS * 91,
								visibleSpan: DAY_IN_MILLISECONDS * 366,
								animated: true,
								tooltips: true,
								defaultStartDate: new Date(),
								//sections: sections2,
								sectionLabelAttrs: {'fill': '#997e3d', 'font-weight': 'bold'},
								labelInterval: isFifthDay,
								//hashInterval: isFifthDay,
								scrollLeft: prevMonth,
								scrollRight: nextMonth,
								markToday: 'labelBox',
								 draggable: true
							  });
					}
					//console.log(data);
				},
			});
			
			/*var events = [
			{dates: [new Date(2013, 1, 29)], title: "Spring Training Begins", section: 0},
			{dates: [new Date(2012, 3, 9)], title: "Atlanta Braves @ Houston Astros", section: 0}
			];*/
		
		
			  //$('#to-today').click(function(){timeline2.goToToday();});
		
		
			  /*var timeline2 = new Chronoline(document.getElementById("target2"), events,
				{	//visibleSpan: DAY_IN_MILLISECONDS * 91,
					visibleSpan: DAY_IN_MILLISECONDS * 366,
					animated: true,
					tooltips: true,
					defaultStartDate: new Date(),
					//sections: sections2,
					sectionLabelAttrs: {'fill': '#997e3d', 'font-weight': 'bold'},
					labelInterval: isFifthDay,
					//hashInterval: isFifthDay,
					scrollLeft: prevMonth,
					scrollRight: nextMonth,
					markToday: 'labelBox',
					 draggable: true
				  });*/
		});
    </script>
    <div class="simple_overlay photo-modal" id="overlay">
    	<div class="image-wrapper"></div>
    </div>
</body>
</html>
