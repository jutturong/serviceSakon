<html>
<head>
<title>Client test</title>
</head>
<body>
<?php
      require_once("lib/nusoap.php");
		//WebServiceClient.php
      //$client = new nusoap_client("http://203.157.177.121/nusoap/WebServiceServer.php?wsdl",true); 
        $client = new nusoap_client("http://203.157.177.121/nusoap/ServerSide.php?wsdl",true);
        //http://203.157.177.121/nusoap/ServerSide.php?wsdl

     
        /*
        $params = array(
                   'strName' => "Weerachai Nukitram",
	 'strEmail' => "is_php@hotmail.com"
        );
       $data = $client->call("HelloWorld",$params); 
       echo $data;
        echo "<hr>";
         * 
         */

  
      
      $call2=array(
          'txtWeight'=>"74",
          'txtHeight'=>"172"
      );

   $data2=$client->call("bmi",$call2);
   echo $data2;
   
   
   
   
   echo "<hr>";
   
   
   echo  "BMI=>  http://203.157.177.121/nusoap/testClientJSON.php?function=bmi&strDatatype=json&strCID=3460700834681&txtWeight=80&txtHeight=150";
   echo "<br>";
         $bmi_varname = array(
                   'strUsername' => "ict",
                   'strPassword' => "skko",
                   'strDatatype'=>"json",
                   'txtWeight' => "80",
	 'txtHeight'=>"150"
        ); 

         $data3=$client->call("bmi2",$bmi_varname);
          echo $data3;

   echo "<hr>";
   echo  "Call test => check_user";
   echo "<br>";
        $ck_varname=array(
            'strUsername'=>'ict',
            'strPassword'=>'skko'
        );
        $data4=$client->call("check_user",$ck_varname);
        echo  $data4; 
  echo "<hr>";
  // $server->configureWSDL("json_authen");
  echo "**Call json_authen test**";
  echo "<br>";
  $data5=$client->call("json_authen",$ck_varname);
  echo $data5;
  echo "<hr>";
  /*
    //function user_type($strUsername,$strPassword,$strDatatype,$txtUsername,$txtPassword)
          $user_type_varname=array(
              'strUsername'=>"xsd:string",
              'strPassword'=>"xsd:string",
              'strDatatype'=>"xsd:string",
              'txtUsername'=>"xsd:string",
              'txtPassword'=>"xsd:string",
          );
   */
  //http://203.157.177.121/nusoap/testClientJSON.php?function=user_type&strDatatype=json&txtUsername=poomjit&txtPassword=123456
  //   'strUsername' => "ict",
  //                 'strPassword' => "skko",
   $user_type_varname=array(
              'strUsername'=>"ict",
              'strPassword'=>"skko",
              'strDatatype'=>"json",
              'txtUsername'=>"poomjit",
              'txtPassword'=>"123456",
          );
   $data6=$client->call("user_type",$user_type_varname);
   echo $data6;

   #http://203.157.177.121/nusoap/testClientJSON.php?function=person&strDatatype=json&strCID=3471201545502 
   $person_type_varname=array(
             'strUsername' => "ict",
             'strPassword' => "skko",
             'strDatatype'=>"json",
             'strCID'=>"3471201545502",
    );
   echo "<hr>";
   echo  "ข้อมูลส่วนตัว";
   echo "<br>";
  $data7=$client->call("person",$person_type_varname);
  echo $data7;
?>
</body>
</html>