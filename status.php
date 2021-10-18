<?php
/*-----------------------[ SETTING ]------------------------------*/
$server_settings['ip'] = "45.144.247.115"; //your server IP
$server_settings['port'] = "30120"; //your server port
/*----------------------------------------------------------------*/
$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
if($content):
$SRV_STATUS = "Online";
else:
$SRV_STATUS = "Offline";
endif;
echo "$SRV_STATUS";
?>
