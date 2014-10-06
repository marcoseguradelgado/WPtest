<?php 

try{
	$client = new SoapClient("http://airbox.com.pa/wsAirbox/wstrack.asmx?WSDL", array('login'=>"TEMia",'password'=>"3t2ASbUZfAIRBOX"));

	$params = array(
	  "prmTrack" => 123456,
	  "User" => "TEMia",
	  "Pass" => "3t2ASbUZfAIRBOX"
    );

    $soapXMLResult = $client->__soapCall("GetPackbyTrack", array($params));

	var_dump($soapXMLResult->GetPackbyTrackResult->any);

}catch (Exception $e){
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}


echo "<h2>Bienvenido</h2>";

?>