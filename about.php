<?php include('header.php'); ?>
<button class="main-menu">Select a layer</button>
<?php include('menu.php'); ?>
    
    <ul id="nav">
		<li><a href="#intro" title="Next Section">The Challenge</a></li>
	    <li><a href="#second" title="Next Section">About Share your world</a></li>
	    <li><a href="#third" title="Next Section">Continue Growing</a></li>
	    <li><a href="#fourth" title="Next Section">Team and credits</a></li>        
	</ul>
    
    <div id="intro">
		<div class="story">
	    	<div class="float-left">
			<h1>Earth Day Challenge</h1>
            <h2>How can space data help us <br />here on Earth? </h2>
	        <p>April 22 is Earth Day. And to celebrate it, we needed to create a visualization of how pollution levels have changed over time.  Many pollution problems have been vastly improved, such as water pollution in the Great Lakes, and air pollution in Los Angeles. But others have significantly worsened, like CO2 emissions and ozone depletion.</p>
	        </div>
	    </div> <!--.story-->
	</div> <!--#intro-->
	
	<div id="second">
		<div class="story"><div class="bg"></div>
	    	<div class="float-right">
	            <h2>About Share your World</h2>
	            <p>This project is based in a web app with serveral layers where each one contains tematic information and photographies related to the climate change around the world.</p>
                <p>This app invites people from around the world to share photos from the past and present of the places where he/she has been. In order to show the world wide climate problems, all from the perspective of the people that live in those places.</p>
                <p>We selected the project because we believe that data visualizations are important for people to better understand the problems of earth.</p>
                <p>We estarted working on it during the wekeend.</p>
	        </div>
	    </div> <!--.story-->
	    
	</div> <!--#second-->
    
	<div id="third">
		<div class="story">
	    	<div class="float-left">
	        	<h2>Continue Growing</h2>
                <p>Its not done get. but we are pretty close to finish it and if the proyect works, it has a lot of room to grow.</p>
	            <p>We plan to add satellital photographies from ArduSat and other Nasa resources, building a friendly API to add information to specific layers in the web app.</p>
	        </div>
	    </div> <!--.story-->
	</div> <!--#third-->
    
	<div id="fourth">
		<div class="story">
	    	<div class="float-left">
	        	<h2>Team and Credits</h2>
	            <p>This project was developed locally in Guatemala by:</p>
                <ul>
                	<li>Javier Castillo <a href="#">@jfcastillo</a></li>
                	<li>Jepser Bernardino <a href="#">@jepser</a></li>
                    <li>Eliezer Diaz <a href="#">@eliezerdt</a></li>
                </ul>
            </div>
	    	<div class="float-left">            
                <div class="other-info">
                	<p><b>Licence:</b> <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons BY-NC-SA 3.0</a></p>
                    <p><b>Source Code:</b> <a href="https://github.com/eliezerdt/spaceappchallenge-earthday-shareyourworld">https://github.com/eliezerdt/spaceappchallenge-earthday-shareyourworld</a></p>
                    <p><b>Site URL:</b> <a href="http://planetearthfromyoureyes.com/">http://planetearthfromyoureyes.com/</a></p> 
                </div>
	        </div>
	    </div> <!--.story-->
	</div> <!--#fourth-->    
    
    <script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#nav').localScroll(800);
        
        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        $('#intro').parallax("50%", 0.1);
        $('#second').parallax("50%", 0.1);
        $('.bg').parallax("50%", 0.4);
        $('#third').parallax("50%", 0.3);
    
    })
    </script>
    
</body>
</html>
