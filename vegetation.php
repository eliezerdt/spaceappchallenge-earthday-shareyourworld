<?php include('header.php'); ?>
<button class="main-menu">Vegetation</button>
<?php include('menu.php'); ?>
    <div class="container_960">
        <section id="video">
            <!--<img src="images/bg-index.jpg" width="1800" height="899" alt="imagen" class="bg_cover" />-->
            <!--<div class="grid"></div>-->
            <video width="700" autoplay controls>
                <source src="images/videos/mov_vegetation.webm" type="video/webm">
                <source src="images/videos/mov_vegetation.mp4" type="video/mp4">
                <source src="images/videos/mov_vegetation.ogv" type="video/ogg">
            </video>
        </section>
        <div class="container_12 main-content">
          <div class="grid_8">
            <h1>Vegetation</h1>
              <p>Satellites observe global-scale patterns of vegetation that scientists use to study changes in plant growth as a result of climate and environmental changes as well as human activity. Photosynthesis plays a big role in removing carbon dioxide from the atmosphere and storing it in wood and soils, so mapping vegetation is a key part of studying the carbon cycle. Farmers and resource managers also use satellite-based vegetation maps to help them monitor the health of our forests and croplands.
              <p>On these maps, vegetation is pictured as a scale, or <a href="http://earthobservatory.nasa.gov/Features/MeasuringVegetation/">index,</a> of greenness. Greenness is based on several factors: the number and type of plants, how leafy they are, and how healthy they are. In places where foliage is dense and plants are growing quickly, the index is high, represented in dark green. Regions where few plants grow have a low vegetation index, shown in tan. The index is based on measurements taken by the Moderate Resolution Imaging Spectroradiometer (<a href="http://modis.gsfc.nasa.gov/">MODIS</a>) on NASA&rsquo;s <a href="http://terra.nasa.gov/">Terra</a> satellite. Areas where the satellite did not collect data are gray.</p>
              <p>The most obvious pattern that the maps show is a global one: vegetation greenness is high around the equator all year long, where temperatures, rainfall and sunlight are abundant. Between the equator and the poles, the vegetation greenness rises and falls as the seasons change.</p>
              <dl>
                <dt>View, download, or analyze more of these data from NASA Earth Observations (NEO):</dt>
                <dd><a href="http://neo.sci.gsfc.nasa.gov/Search.html?datasetId=MOD13A2_M_NDVI" target="_blank">Vegetation</a></dd>
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
