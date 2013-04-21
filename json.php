<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

$data = array(
	array(
		'id' => '4953354389321',
		'lat' => '17.902343819375307',
		'long' => '-87.98145511328124',
		'date' => '2012 3 1',
		'large' => 'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-prn1/s600x600/527399_4953354389321_1105370306_n.jpg',
		'thumb' => 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-prn1/s75x225/527399_4953354389321_1105370306_s.jpg'
	),
	array(
		'id' => '2401680039057',
		'lat' => '9',
		'long' => '-80',
		'date' => '2011 12 12',
		'large' => 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-prn1/s600x600/320270_2401680039057_1762353547_n.jpg',
		'thumb' => 'https://fbcdn-photos-f-a.akamaihd.net/hphotos-ak-prn1/s75x225/320270_2401680039057_1762353547_s.jpg'
	),
	array(
		'id' => '1813463013999',
		'lat' => '17.05',
		'long' => '-61.8',
		'date' => '2011 2 9',
		'large' => 'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-snc6/s600x600/167793_1813463013999_92904_n.jpg',
		'thumb' => 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-snc6/s75x225/167793_1813463013999_92904_s.jpg'
	),
	array(
		'id' => '4155909173689',
		'lat' => '14.6095411',
		'long' => '-90.50556080000001',
		'date' => '2012 7 2',
		'large' => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-ash3/s600x600/182178_4155909173689_1586190383_n.jpg',
		'thumb' => 'https://fbcdn-photos-h-a.akamaihd.net/hphotos-ak-ash3/s75x225/182178_4155909173689_1586190383_s.jpg'
	),
	array(
		'id' => '10200652107562766',
		'lat' => '14.758330181162586',
		'long' => '-91.2087022',
		'date' => '2012 7 2',
		'large' => 'https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc1/s600x600/575763_10200652107562766_710758128_n.jpg',
		'thumb' => 'https://fbcdn-photos-a.akamaihd.net/hphotos-ak-frc1/s75x225/575763_10200652107562766_710758128_s.jpg'
	)
	
);

$json = json_encode($data);

echo isset($_GET['callback'])
    ? "{$_GET['callback']}($json)"
    : $json;

?>