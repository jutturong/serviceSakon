<?php
require_once("lib/nusoap.php");
require_once("connection/hdc.php");
require_once("connection/web.php");

ini_set('date.timezone', 'Asia/Bangkok');


        $server = new soap_server();

        $namespace = "http://203.157.177.121/nusoap/ServerSide.php";


		
		
		$server->wsdl->schemaTargetNamespace = $namespace;
		 
		//Configure our WSDL
		$server->configureWSDL("HelloWorld");
		$server->configureWSDL("bmi");
		$server->configureWSDL("bmi2");
                $server->configureWSDL("check_user");
                $server->configureWSDL("json_authen");
              //$server->register('user_type',$user_type_varname, array('return' => 'xsd:string'));  
		 
		// Register our method and argument parameters
        $varname = array(
                   'strName' => "xsd:string",
	 'strEmail' => "xsd:string"
        );



          $callbmi=array(
                  'txtWeight'=>"xsd:string",
                  'txtHeight'=>"xsd:string",
          	);


          $bmi_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
                   'strDatatype'=>"xsd:string",
                   'txtWeight' => "xsd:string",
	           'txtHeight'=>"xsd:string"
        ); 
          
          $check_user_varname=array(
              'strUsername'=>"xsd:string",
              'strPassword'=>"xsd:string"
          );
         
         //function user_type($strUsername,$strPassword,$strDatatype,$txtUsername,$txtPassword)
          $user_type_varname=array(
              'strUsername'=>"xsd:string",
              'strPassword'=>"xsd:string",
              'strDatatype'=>"xsd:string",
              'txtUsername'=>"xsd:string",
              'txtPassword'=>"xsd:string",
          );
          
                  
		$server->register('HelloWorld',$varname, array('return' => 'xsd:string'));
		$server->register('bmi',$callbmi, array('return' => 'xsd:string'));
                $server->register('bmi2',$bmi_varname, array('return' => 'xsd:string'));
                $server->register('check_user',$check_user_varname, array('return' => 'xsd:string'));
                $server->register('json_authen',$check_user_varname, array('return' => 'xsd:string'));
                $server->register('user_type',$user_type_varname, array('return' => 'xsd:string'));
                
                				 
        function HelloWorld($strName,$strEmail)
        {
	   return "Hello, World! Khun ($strName , Your email : $strEmail)";
	}
        
        function  bmi($txtWeight,$txtHeight)
         {
               /*
                   $objConnect = mysql_pconnect("localhost","root","64127427") or trigger_error(mysql_error(),E_USER_ERROR); 
                   mysql_query("SET NAMES UTF8",$personalHealth);
                   $objDB = mysql_select_db("personalHealth");
                */   
             
                  global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
                   
           
                   
                   $arr["txtWeight"]=$txtWeight;
                   $arr["txtHeight"]=$txtHeight;
                   header('Content-type: application/json');
                   return json_encode($arr);

         }
  
        function bmi2($strUsername,$strPassword,$strDatatype,$txtWeight,$txtHeight)
	{
			 global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
                        
                        
			 $user_level = check_user($strUsername,$strPassword);
			
			   if ($user_level>0)        //check form   `user_webservice`   user_level_id > 0               
                                                           {
                                                                $rows=array();
                                                                $bmi_result=$txtWeight/pow($txtHeight/100,2);
                                                                $rows["bmi_result"]= $bmi_result;
                                                                $bmi=number_format($bmi_result, 2, '.', '');
                                                                //	array_push($a_return,array("bmi"=>$bmi_result));	
                                                                mysql_select_db($database_personalHealth,$personalHealth);                                     
                                                                $sql_bmi="select b.bmi,($bmi)as bmi_result,b.level,b.risk,b.direction from bmi_risk b where $bmi_result BETWEEN b.min and b.max";
                                                                $rs_bmi=mysql_query($sql_bmi);
                                                              //  $row_bmi=mysql_fetch_assoc($rs_bmi);
                                                                
                                                                while($row=  mysql_fetch_assoc( $rs_bmi))
                                                                {
                                                                     
                                                                     $rows["bmi_risk_id"]=$row["bmi_risk_id"];
                                                                     $rows["bmi"]=$row["bmi"];
                                                                     $rows["min"]=$row["min"];
                                                                     $rows["max"]=$row["max"];
                                                                     $rows["level"]=$row["level"];
                                                                     $rows["risk"]=$row["risk"];
                                                                     $rows["direction"]=$row["direction"];
                                                                }
                                                                
                                                                    mysql_free_result($rs_bmi);
                                                                   header('Content-type: application/json');
                                                                   return json_encode($rows);
                                                         }
		}


                function check_user($strUsername,$strPassword) //check permission
                {
                     //request.addProperty("strUsername", "ict");
                     //request.addProperty("strPassword", "skko"); 
                    //SELECT * FROM `user_webservice`
                    //user_webservice_id,user_name,user_password,user_level_id
                     global $database_hdc,$hdc;
                     mysql_select_db($database_hdc,$hdc);
                     $rows=array();
		     $query_check_user="select * from user_webservice where user_name = '$strUsername' and user_password='$strPassword'";
		     $rs_check_user=mysql_query($query_check_user);
		     $rows_check_user = mysql_num_rows($rs_check_user);
		     $row_check_user=mysql_fetch_assoc($rs_check_user);
			if ($rows_check_user>0){
				  $_return = $row_check_user['user_level_id'];
                               // $rows["row_check_user"]=$row_check_user['user_level_id'];  //json success
			}else{
				  $_return = 0;
                              //  $rows["row_check_user"]=0;  //json success
			}
			mysql_free_result($rs_check_user);
		        return $_return;
                      //  header('Content-type: application/json');
                      //  return json_encode($rows);
                }
                
              function  json_authen($strUsername,$strPassword) //login  in system
              {
                     //request.addProperty("strUsername", "ict");
                     //request.addProperty("strPassword", "skko"); 
                     //SELECT * FROM `user_webservice`
                     global $database_hdc,$hdc;
                     mysql_select_db($database_hdc,$hdc);
                     $rows=array();
		     $query_check_user="select * from user_webservice where user_name = '$strUsername' and user_password='$strPassword'";
		     $rs_check_user=mysql_query($query_check_user);
		     $rows_check_user = mysql_num_rows($rs_check_user);
		     $row_check_user=mysql_fetch_assoc($rs_check_user);
			if ($rows_check_user>0){
				 // $_return = $row_check_user['user_level_id'];
                                $rows["row_check_user"]=$row_check_user['user_level_id'];  //json success
                                
			}else{
				//  $_return = 0;
                                $rows["row_check_user"]=0;  //json success
			}
			mysql_free_result($rs_check_user);
		       // return $_return;
                          header('Content-type: application/json');
                          return json_encode($rows);
                  
              }
              
              function user_type($strUsername,$strPassword,$strDatatype,$txtUsername,$txtPassword) //login หน้าแรก
		{
                                              //user_webservice_id=1,user_name=ict,user_password=skko,user_level_id=1
			global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array(); //old  code array
                        $rows=array();
			if ($user_level>0)
                        {
				$unsafe_username = $txtUsername;
				$safe_username = mysql_real_escape_string($unsafe_username);
				$unsafe_password = $txtPassword;
				$safe_password = mysql_real_escape_string($unsafe_password);
				mysql_select_db($database_personalHealth,$personalHealth);
				$query_user_type="SELECT
						  g.user_type_id
						  FROM
						  user u
						  LEFT JOIN user_group g ON u.user_id = g.user_id
						  WHERE
						  u.user_login = '$safe_username'
						  AND u.user_password = '$safe_password'";

				$rs_user_type=mysql_query($query_user_type);				
				while ($row_user_type=mysql_fetch_assoc($rs_user_type)){
                                    
                                                                      
                                     array_push($a_return,$row_user_type);
                                    // $rows[]=$row_user_type;   
                                    // array_push($rows, $row_user_type);
                                   //  $rows["user_type_id"]=$rs_user_type["user_type_id"];
                                       
				}
                                     $login_completed_id=0;
			        if (count($a_return)>0)
                               // if (count($rows)>0)    
                                {
					//if (!in_array(array("user_type_id"=>3), $a_return))
                                        if (!in_array(array("user_type_id"=>3), $rows))
                                       {
						                                       
                                               // array_push($a_return, array("user_type_id"=>3));
                                                 
                                               // array_push($rows,array("user_type_id"=>3));//#SELECT * FROM `user_group` LIMIT 0 , 30 
                                                $rows["user_type_id"]=3;
                                               
                                        
					}
                                        $login_completed_id=1;
					$_return=json_encode($a_return);
                                        
                                       
                                        //return json_encode($a_return);
                                        
                                      
                                        
                                        
				}else
                                                                        {
					if ($rs_user_type){
						$_return="No data<br>".$query_user_type;
					}else{
						$_return="Query Error<br>".$query_user_type;
					}
                                          $rows["user_type_id"]=0;  
                                        // array_push($rows,array("user_type_id"=>0));
                                        
				}
                                        mysql_select_db($database_personalHealth,$personalHealth);
                                        $sql="insert into personalHealth_login_log (user_login,login_completed_id,client_ip,code_status_id,last_user_update) values ('$txtUsername','$login_completed_id','','1','1')";
                                        mysql_query($sql);        
                                        mysql_free_result($rs_user_type);
                                                                                    
			}
			        #return $_return;   //code เดิ่ม
                                #return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
                        
                        
                        
                               header('Content-type: application/json');
                               return json_encode($rows);
                                                                                 
                                                                                        
		}




		// Get our posted data if the service is being consumed
		// otherwise leave this data blank.
		$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
		 
		// pass our posted data (or nothing) to the soap service
		$server->service($POST_DATA);
		exit(); 
?>