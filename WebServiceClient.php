<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
		require_once("lib/nusoap.php");
        $client = new nusoap_client("http://203.157.177.121/nusoap/WebServiceServer.php?wsdl",true); 
        $params = array(
                   'strName' => "Weerachai Nukitram",
				   'strEmail' => "is_php@hotmail.com"
        );
       $data = $client->call("CustomerDetail",$params); 
       echo $data;
?>
</body>
</html>