<?php include('header.php'); ?>
<button class="main-menu">Fire</button>
<?php include('menu.php'); ?>
    <div class="container_960">
        <section id="video">
            <!--<img src="images/bg-index.jpg" width="1800" height="899" alt="imagen" class="bg_cover" />-->
            <!--<div class="grid"></div>-->
            <video width="700" autoplay controls>
                <source src="images/videos/mov_fire.webm" type="video/webm">
                <source src="images/videos/mov_fire.mp4" type="video/mp4">
                <source src="images/videos/mov_fire.ogv" type="video/ogg">
            </video>
        </section>
        <div class="container_12 main-content">
          <div class="grid_8">
            <h1>Fire</h1>
              <p>On Earth, something is always burning. Wildfires are started by lightning or accidentally by people, and people use controlled fires to manage farmland and pasture and clear natural vegetation for farmland. Fires can generate large amounts of smoke pollution, release greenhouse gases, and unintentionally degrade ecosystems. But fires can also clear away dead and dying underbrush, which can help restore an ecosystem to good health. In many ecosystems, including boreal forests and grasslands, plants have co-evolved with fire and require periodic burning to reproduce.
              <p>The fire maps show the locations of actively burning fires around the world on a monthly basis, based on observations from the Moderate Resolution Imaging Spectroradiometer <a href="http://modis.gsfc.nasa.gov/">(MODIS)</a> on NASA&rsquo;s <a href="http://terra.nasa.gov/">Terra</a> satellite. The colors are based on a count of the number (not size) of fires observed within a 1,000-square-kilometer area. White pixels show the high end of the count —as many as 100 fires in a 1,000-square-kilometer area per day. Yellow pixels show as many as 10 fires, orange shows as many as 5 fires, and red areas as few as 1 fire per day.</p>
                <p>Some of the global patterns that appear in the fire maps over time are the result of natural cycles of rainfall, dryness, and lightning. For example, naturally occurring fires are common in the boreal forests of Canada in the summer. In other parts of the world, the patterns are the result of human activity. For example, the intense burning in the heart of South America from August-October is a result of human-triggered fires, both intentional and accidental, in the Amazon Rainforest and the Cerrado (a grassland/savanna ecosystem) to the south. Across Africa, a band of widespread agricultural burning sweeps north to south over the continent as the dry season progresses each year. Agricultural burning occurs in late winter and early spring each year across Southeast Asia.</p>
                <dl>
                  <dt>View, download, or analyze more of these data from NASA Earth Observations (NEO):</dt>
                  <dd><a href="http://neo.sci.gsfc.nasa.gov/Search.html?datasetId=MOD14A1_M_FIRE" target="_blank">Fire</a></dd>
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
