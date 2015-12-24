<html>
<head>
<title></title>
</head>
<body>
<?php
		require_once("lib/nusoap.php");
		require_once("includes/description.php");
		
        $client = new nusoap_client("http://203.157.177.121/nusoap/WebServiceServer.php?wsdl",true); 
        $params = array(
                   'strUsername' => "ict",
                   'strPassword' => "skko",
				   'strDatatype'=>$_GET['strDatatype'],
                   'strCID' => $_GET['strCID'],
                   'strAn' => $_GET['strAn'],
                   'strSeq' => $_GET['strSeq'],
				   'txtUsername'=>$_GET['txtUsername'],
				   'txtPassword'=>$_GET['txtPassword'],
				   'txtWeight'=>$_GET['txtWeight'],
				   'txtHeight'=>$_GET['txtHeight'],
				   'strName'=>$_GET['strName'],
				   'strEmail'=>$_GET['strEmail'],
				   'txtBirthdate'=>$_GET['txtBirthdate'],
                   'txtSex' => $_GET['txtSex'],
                   'txtAge' => $_GET['txtAge'],
                   'txtMaried' => $_GET['txtMaried'],
                   'txtOccupation' => $_GET['txtOccupation'],
                   'txtEducation' => $_GET['txtEducation'],
                   'txtQuestion1' => $_GET['txtQuestion1'],
                   'txtQuestion2' => $_GET['txtQuestion2'],
                   'txtQuestion3' => $_GET['txtQuestion3'],
                   'txtQuestion4' => $_GET['txtQuestion4'],
                   'txtQuestion5' => $_GET['txtQuestion5'],
				   'txtQuestion6' => $_GET['txtQuestion6'],
				   'txtQuestion7' => $_GET['txtQuestion7'],
				   'txtOldpass' => $_GET['txtOldpass'],
				   'txtNewpass' => $_GET['txtNewpass'],
				   'txtConfirmpass' => $_GET['txtConfirmpass'],
				   'strHospcode' => $_GET['strHospcode']



        );
		
       	$data = $client->call($_GET['function'],$params);

		if ($client->fault) {
		    echo "<h2>Fault</h2><pre>";
		    //echo $data;
		    echo "</pre>";
		} else {
		    $error = $client->getError();
		    if ($error) {
		        echo "<h2>Error</h2><pre>" . $error . "</pre>";
		    } else {
		       	if ((substr($data,0,7)=="No data") or (substr($data,0,11)=='Query Error')){
					echo $data;       	
				}else{
					$foo = json_decode($data, true); 
			//		echo($data);
					if(strtolower($_GET['strDatatype'])=='json'){
						echo "<table border='1' cellspacing='0' cellpadding='0' style='padding-left:10px;padding-right:15px;'>";
						foreach($foo as $key=>$value){
							if ($key==0){
								echo "<tr><td>record</td>";
								foreach($value as $k=>$v){
									echo "<td>".$k."</td>";
								}
								echo "</tr>";
							}
							echo "<tr><td>".$key." </td>";
							foreach($value as $k=>$v){
								echo "<td>".$v."</td>";
							}
							echo "</tr>";
						}
						echo "</table>";
					}else{
						echo $data;
					}
				}
			}
		}

		
				
foreach($foo as $key=>$value){
	if ($key==0){
		echo "<tr><td>record</td><br>";
		foreach($value as $k=>$v){
			echo "<td>".$k."</td>"." = "."<td>".$a_description[strtolower($k)]."</td><br>";
		}
		echo "</tr>";	
	}
	break;
}	

?>
</body>
</html>
