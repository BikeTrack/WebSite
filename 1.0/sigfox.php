<?php
    $id = $_GET["id"];
    $time = (int)$_GET["time"];
    $snr = $_GET["snr"];
    $station = $_GET["station"];
    $data = $_GET["data"];
    $lat = $_GET["lat"];
    $lng = $_GET["lng"];
    $rssi = $_GET["rssi"];
    $seqNumber = $_GET["seqNumber"];
    $altitude = $_GET["alt"];
    $latitude = $_GET["lat"];
    $longitude = $_GET["lng"];
    $displayTime = date('d-m-Y', $time)  .'T'. date('H:i:s', $time) . "Z";

    if ( $fl = fopen('sigfoxData.json','a')) 
    {
        $s_file = 'sigfoxData.json';
        $s_fileData = file_get_contents($s_file);
         
        if (!$s_fileData || strlen($s_fileData) == 0){
          fwrite($fl,"{ \"id\" : \"". $id . "\", "
            ."\"time\" :\"" . $displayTime . "\", "
            ."\"snr\" :\"" . $snr . "\", "
            ."\"station\" :\"" . $station . "\", "
            ."\"data\" :\"" . $data . "\", "
            ."\"latitude\" :\"" . $latitude . "\", "
            ."\"longitude\" :\"" . $longitude . "\" ,"
            ."\"altitude\" :\"" . $altitude . "\" ,"
            ."\"rssi\" :\"" . $rssi . "\" ,"
            ."\"seqNumber\" :\"" . $seqNumber . "\" }" );
        }else{
            fwrite($fl,",\n{ \"id\" : \"". $id . "\", "
            ."\"time\" :\"" . $displayTime . "\", "
            ."\"snr\" :\"" . $snr . "\", "
            ."\"station\" :\"" . $station . "\", "
            ."\"data\" :\"" . $data . "\", "
            ."\"latitude\" :\"" . $latitude . "\", "
            ."\"longitude\" :\"" . $longitude . "\" ,"
            ."\"altitude\" :\"" . $altitude . "\" ,"
            ."\"rssi\" :\"" . $rssi . "\" ,"
            ."\"seqNumber\" :\"" . $seqNumber . "\" }" );
            
        }
        fclose($fl);

    }
?>