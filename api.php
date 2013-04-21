<?PHP
/* require the user as the parameter */
if(isset($_GET['user']) && intval($_GET['user'])) {
    echo "s";
	/* soak in the passed variable or set our own */
	$user_id = intval($_GET['user']); //no default
	$layer = intval($_GET['layer']); //no default
	/* connect to the db */
	$link = mysql_connect('internal-db.s78225.gridserver.com','db78225','jEmedaS3') or die('Cannot connect to the DB');
	mysql_select_db('db78225_nasa',$link) or die('Cannot select the DB');
	/* grab the posts from the db */
	$query = "SELECT * FROM layer WHERE layer = $layer AND year = '$layer' ORDER BY ID DESC ";
	$result = mysql_query($query,$link) or die('Errant query:  '.$query);
	/* create one master array of the records */
	$posts = array();
	if(mysql_num_rows($result)) {
		while($post = mysql_fetch_assoc($result)) {
			$posts[] = array('post'=>$post);
		}
	}
	/* output in necessary format */
		header('Content-type: application/json');
		echo json_encode(array('posts'=>$posts));
	/* disconnect from the db */
	@mysql_close($link);
}
if(isset($_POST['image'])){
	try{

    header('Content-type: application/json');
	echo "h";
	$data=json_decode($_POST['image']);;
	//printf($data);
	
	foreach($data as $img){
		echo $img;
	   //$query2 = "insert into imagen (id,lat,long,date,large,thumb) values ($img['id'],$img['lat'],$img['long'],$img['date'],$img['large'],$img['thumb'])";
		//echo $query2;
		//$result = mysql_query($query,$link) or die('Errant query:  '.$query);
	}
}
catch(Exception $e){ 
    echo "fail post";
}
}
?>