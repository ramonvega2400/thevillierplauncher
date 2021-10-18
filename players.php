<?php
/*-----------------------[ SETTING ]------------------------------*/
$server_settings['ip'] = "45.144.247.115"; //your server IP
$server_settings['port'] = "30120"; //your server port
$server_settings['max_slots'] = 64; //your max slots
/*----------------------------------------------------------------*/
$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
if($content):
    $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
	$content = json_decode($gta5_players, true);
	$pl_count = count($content);
	print "$pl_count/$server_settings[max_slots]";
endif;
?>
