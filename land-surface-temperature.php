<?php include('header.php'); ?>
<button class="main-menu">Land Surface Temperature</button>
<?php include('menu.php'); ?>
    <div class="container_960">
        <section id="video">
            <!--<img src="images/bg-index.jpg" width="1800" height="899" alt="imagen" class="bg_cover" />-->
            <!--<div class="grid"></div>-->
            <video width="700" autoplay controls>
                <source src="images/videos/mov_land-surface-temperature.webm" type="video/webm">
                <source src="images/videos/mov_land-surface-temperature.mp4" type="video/mp4">
                <source src="images/videos/mov_land-surface-temperature.ogv" type="video/ogg">
            </video>
        </section>
        <div class="container_12 main-content">
          <div class="grid_8">
            <h1>Land Surface Temperature</h1>
              <p>Land surface temperature is how hot the &ldquo;surface&rdquo; of the Earth would feel to the touch in a particular location. From a satellite&rsquo;s point of view, the &ldquo;surface&rdquo; is whatever it sees when it looks through the atmosphere to the ground. It could be snow and ice, the grass on a lawn, the roof of a building, or the leaves in the canopy of a forest. Thus, land surface temperature is not the same as the air temperature that is included in the daily weather report.
              <p>The maps shown here were made using data collected during the daytime by the Moderate Resolution Imaging Spectroradiometer <a href="http://modis.gsfc.nasa.gov/">(MODIS)</a> on NASA&rsquo;s <a href="http://terra.nasa.gov/">Terra</a> satellite. Temperatures range from -25 degrees Celsius (deep blue) to 45 degrees Celsius (pinkish yellow). At mid-to-high latitudes, land surface temperatures can vary throughout the year, but equatorial regions tend to remain consistently warm, and Antarctica and Greenland remain consistently cold. Altitude plays a clear role in temperatures, with mountain ranges like the North American Rockies cooler than other areas at the same latitude.</p>
                <p>Scientists monitor land surface temperature because the warmth rising off Earth&rsquo;s landscapes influences (and is influenced by) our world&rsquo;s weather and climate patterns. Scientists want to monitor how increasing atmospheric greenhouse gases affect land surface temperature, and how rising land surface temperatures affect glaciers, ice sheets, permafrost, and the vegetation in Earth&rsquo;s ecosystems.</p>
                <p>Commercial farmers may also use land surface temperature maps like these to evaluate water requirements for their crops during the summer, when they are prone to heat stress. Conversely, in winter, these maps can help citrus farmers to determine where and when orange groves could have been exposed to damaging frost.</p>
                <dl>
                  <dt>View, download, or analyze more of these data from NASA Earth Observations (NEO):</dt>
                  <dd><a href="http://neo.sci.gsfc.nasa.gov/Search.html?datasetId=MOD11C1_M_LSTDA" target="_blank">Land Surface Temperature</a></dd>
                </dl>
            </div>
            <div class="grid_4">
            	<ul class="list-menu">
                    <li><a href="index.php">Pictures from the ground</a></li>
                    <li><a href="carbon-monoxide.php">Carbon Monoxide</a></li>
                    <li><a href="fire.php">Fire</a></li>
                    <li><a href="land-surface-temperature.php">Land Surface Temperature</a></li>
                    <li><a href="net-radiation.php">Net Radiation</a></li>
                    <li><a href="total-rainfall.php">Total Rainfall</a></li>
                    <li><a href="vegetation.php">Vegetation</a></li>
                    <li><a href="upload.php" class="btn-upload">Upload your photo</a></li>
                </ul>
            </div>
        	<div class="clear"><!--clear--></div>
        </div><!--container_12-->
    </div>
</body>
</html>
