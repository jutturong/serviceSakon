<?php
		require_once("connection/hdc.php");
		require_once("connection/web.php");
		require_once("lib/nusoap.php");
		 
		//Create a new soap server
		$server = new soap_server();
		 
		//Define our namespace
		$namespace = "http://203.157.177.121/nusoap/index.php";
		$server->wsdl->schemaTargetNamespace = $namespace;
		 
		//Configure our WSDL
		$server->configureWSDL("CustomerDetail");		 
		// Register our method and argument parameters
        $varname = array(
                   'strName' => "xsd:string",
        		   'strEmail' => "xsd:string"
        );

		$server->configureWSDL("person");	
		$person_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );


		$server->configureWSDL("appointment");		 
		// Register our method and argument parameters
        $appointment_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );

		$server->configureWSDL("chronic");		 
		// Register our method and argument parameters
        $chronic_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );

		$server->configureWSDL("drugallergy");		 
		// Register our method and argument parameters
        $drugallergy_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );
		$server->configureWSDL("vaccine");		 
		// Register our method and argument parameters
        $vaccine_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );

        $server->configureWSDL("opd");	

		// Register our method and argument parameters
        $opd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );

		  $server->configureWSDL("chiefcomp");	
	    $chiefcomp_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strSeq' => "xsd:string",
                   'strHospcode' => "xsd:string"
        );


        $server->configureWSDL("ncdsreen");	
		$ncdscreen_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );


		$server->configureWSDL("ipd");	
		$ipd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"
        );

      $server->configureWSDL("chiefcomp_ipd");	
	    $chiefcomp_ipd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strSeq' => "xsd:string",
                   'strHospcode' => "xsd:string"
        );

		$server->configureWSDL("diagnosis_ipd");	
		$diagnosis_ipd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				           'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strAn' => "xsd:string"

        );
		
		$server->configureWSDL("drug_ipd");	
		$drug_ipd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strAn' => "xsd:string"

        );
		
		$server->configureWSDL("proced_ipd");	
		$proced_ipd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strAn' => "xsd:string"

        );


        $server->configureWSDL("diagnosis_opd");	
		$diagnosis_opd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strSeq' => "xsd:string"

        ); 

        $server->configureWSDL("proced_opd");	
		$proced_opd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strSeq' => "xsd:string"

        ); 

		$server->configureWSDL("drug_opd");	
		$drug_opd_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'strSeq' => "xsd:string"

        ); 

		$server->configureWSDL("user_type");	
		$user_type_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtUsername' => "xsd:string",
				   'txtPassword'=>"xsd:string"

        ); 

        $server->configureWSDL("check_user");	
		$check_user_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtUsername' => "xsd:string",
				   'txtPassword'=>"xsd:string"

        ); 

        $server->configureWSDL("user_log");	
		$user_log_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtUsername' => "xsd:string"				   

        ); 

		$server->configureWSDL("bmi");	
		$bmi_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtWeight' => "xsd:string",
				   'txtHeight'=>"xsd:string"

        ); 

		$server->configureWSDL("bmi_save");	
		$bmi_save_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
				   'strCID' => "xsd:string",
                   'txtWeight' => "xsd:string",
				   'txtHeight'=>"xsd:string"
		   ); 

		$server->configureWSDL("bmi_graph");	
		$bmi_graph_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
				   'strCID' => "xsd:string"
        ); 

		$server->configureWSDL("that");	
		$that_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtBirthdate' => "xsd:string"

        ); 

		$server->configureWSDL("liver_fluke");	
		$liver_fluke_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtSex' => "xsd:string",
                   'txtAge' => "xsd:string",
                   'txtMaried' => "xsd:string",
                   'txtOccupation' => "xsd:string",
                   'txtEducation' => "xsd:string",
                   'txtQuestion1' => "xsd:string",
                   'txtQuestion2' => "xsd:string",
                   'txtQuestion3' => "xsd:string",
                   'txtQuestion4' => "xsd:string",
                   'txtQuestion5' => "xsd:string"

        ); 

        $server->configureWSDL("liver_fluke_graph");	
		$liver_fluke_graph_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"

        ); 


		$server->configureWSDL("liver_fluke_save");	
		$liver_fluke_save_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'txtSex' => "xsd:string",
                   'txtAge' => "xsd:string",
                   'txtMaried' => "xsd:string",
                   'txtOccupation' => "xsd:string",
                   'txtEducation' => "xsd:string",
                   'txtQuestion1' => "xsd:string",
                   'txtQuestion2' => "xsd:string",
                   'txtQuestion3' => "xsd:string",
                   'txtQuestion4' => "xsd:string",
                   'txtQuestion5' => "xsd:string"

        ); 

$server->configureWSDL("mental");	
		$mental_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtSex' => "xsd:string",
                   'txtAge' => "xsd:string",
                   'txtMaried' => "xsd:string",
                   'txtOccupation' => "xsd:string",
                   'txtEducation' => "xsd:string",
                   'txtQuestion1' => "xsd:string",
                   'txtQuestion2' => "xsd:string",
                   'txtQuestion3' => "xsd:string",
                   'txtQuestion4' => "xsd:string"                  
        ); 

        $server->configureWSDL("mental_graph");	
		$mental_graph_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string"                
        ); 

		$server->configureWSDL("mental_save");	
		$mental_save_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'txtSex' => "xsd:string",
                   'txtAge' => "xsd:string",
                   'txtMaried' => "xsd:string",
                   'txtOccupation' => "xsd:string",
                   'txtEducation' => "xsd:string",
                   'txtQuestion1' => "xsd:string",
                   'txtQuestion2' => "xsd:string",
                   'txtQuestion3' => "xsd:string",
                   'txtQuestion4' => "xsd:string"
        ); 

$server->configureWSDL("risk_stroke");	
		$risk_stroke_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtSex' => "xsd:string",
                   'txtAge' => "xsd:string",
                   'txtMaried' => "xsd:string",
                   'txtOccupation' => "xsd:string",
                   'txtEducation' => "xsd:string",
                   'txtQuestion1' => "xsd:string",
                   'txtQuestion2' => "xsd:string",
                   'txtQuestion3' => "xsd:string",
                   'txtQuestion4' => "xsd:string",
                   'txtQuestion5' => "xsd:string",
				   'txtQuestion6' => "xsd:string",				
                   'txtQuestion7' => "xsd:string"

        ); 

        $server->configureWSDL("risk_stroke_graph");	
		$risk_stroke_graph_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'txtSex' => "xsd:string",
                   'txtAge' => "xsd:string",
                   'txtMaried' => "xsd:string",
                   'txtOccupation' => "xsd:string",
                   'txtEducation' => "xsd:string",
                   'txtQuestion1' => "xsd:string",
                   'txtQuestion2' => "xsd:string",
                   'txtQuestion3' => "xsd:string",
                   'txtQuestion4' => "xsd:string",
                   'txtQuestion5' => "xsd:string",
				   'txtQuestion6' => "xsd:string",				
                   'txtQuestion7' => "xsd:string"

        ); 

		$server->configureWSDL("risk_stroke_save");	
		$risk_stroke_save_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'txtSex' => "xsd:string",
                   'txtAge' => "xsd:string",
                   'txtMaried' => "xsd:string",
                   'txtOccupation' => "xsd:string",
                   'txtEducation' => "xsd:string",
                   'txtQuestion1' => "xsd:string",
                   'txtQuestion2' => "xsd:string",
                   'txtQuestion3' => "xsd:string",
                   'txtQuestion4' => "xsd:string",
				   'txtQuestion5' => "xsd:string",
				   'txtQuestion6' => "xsd:string",				
                   'txtQuestion7' => "xsd:string"

        ); 

		$server->configureWSDL("change_password");	
		$change_password_varname = array(
                   'strUsername' => "xsd:string",
                   'strPassword' => "xsd:string",
				   'strDatatype'=>"xsd:string",
                   'strCID' => "xsd:string",
                   'txtOldpass' => "xsd:string",
                   'txtNewpass' => "xsd:string",
                   'txtConfirmpass' => "xsd:string"

        ); 




		$server->register('CustomerDetail',$varname, array('return' => 'xsd:string'));
		$server->register('person',$person_varname, array('return' => 'xsd:string'));
		$server->register('appointment',$appointment_varname, array('return' => 'xsd:string'));
		$server->register('chronic',$chronic_varname, array('return' => 'xsd:string'));
		$server->register('drugallergy',$drugallergy_varname, array('return' => 'xsd:string'));
		$server->register('vaccine',$vaccine_varname, array('return' => 'xsd:string'));
		$server->register('opd',$opd_varname, array('return' => 'xsd:string'));
		$server->register('diagnosis_opd',$diagnosis_opd_varname, array('return' => 'xsd:string'));
		$server->register('drug_opd',$drug_opd_varname, array('return' => 'xsd:string'));
		$server->register('proced_opd',$proced_opd_varname, array('return' => 'xsd:string'));
		$server->register('ncdscreen',$ncdscreen_varname, array('return' => 'xsd:string'));
		$server->register('ipd',$ipd_varname, array('return' => 'xsd:string'));
		$server->register('diagnosis_ipd',$diagnosis_ipd_varname, array('return' => 'xsd:string'));
		$server->register('drug_ipd',$drug_ipd_varname, array('return' => 'xsd:string'));
		$server->register('proced_ipd',$proced_ipd_varname, array('return' => 'xsd:string'));
		$server->register('user_type',$user_type_varname, array('return' => 'xsd:string'));
		$server->register('check_user',$check_user_varname, array('return' => 'xsd:string'));
		$server->register('user_log',$user_log_varname, array('return' => 'xsd:string'));
		$server->register('bmi',$bmi_varname, array('return' => 'xsd:string'));
		$server->register('bmi_save',$bmi_save_varname, array('return' => 'xsd:string'));
		$server->register('bmi_graph',$bmi_graph_varname, array('return' => 'xsd:string'));
		$server->register('that',$that_varname, array('return' => 'xsd:string'));
		$server->register('liver_fluke',$liver_fluke_varname, array('return' => 'xsd:string'));
		$server->register('liver_fluke_graph',$liver_fluke_graph_varname, array('return' => 'xsd:string'));
		$server->register('liver_fluke_save',$liver_fluke_save_varname, array('return' => 'xsd:string'));
		$server->register('mental',$mental_varname, array('return' => 'xsd:string'));
		$server->register('mental_graph',$mental_graph_varname, array('return' => 'xsd:string'));
		$server->register('mental_save',$mental_save_varname, array('return' => 'xsd:string'));
		$server->register('risk_stroke',$risk_stroke_varname, array('return' => 'xsd:string'));
		$server->register('risk_stroke_graph',$risk_stroke_graph_varname, array('return' => 'xsd:string'));
		$server->register('risk_stroke_save',$risk_stroke_save_varname, array('return' => 'xsd:string'));
		$server->register('change_password',$change_password_varname, array('return' => 'xsd:string'));
		$server->register('chiefcomp',$chiefcomp_varname, array('return' => 'xsd:string'));
		$server->register('chiefcomp_ipd',$chiefcomp_ipd_varname, array('return' => 'xsd:string'));

function change_password($strUsername,$strPassword,$strDatatype,$strCID,$txtOldpass,$txtNewpass,$txtConfirmpass)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$unsafe_username = $strCID;
		$safe_username = mysql_real_escape_string($unsafe_username);
		$unsafe_password = $txtOldpass;
		$safe_password = mysql_real_escape_string($unsafe_password);
		mysql_select_db($database_personalHealth,$personalHealth);
		$query_user_type="SELECT
							*
						FROM
						user u
						LEFT JOIN user_group g ON u.user_id = g.user_id
						WHERE
							u.user_login = '$safe_username'
						AND u.user_password = '$safe_password'";
array_push($a_return,array("sql"=>$query_user_type));
		$rs_user_type=mysql_query($query_user_type);
		$rows_user_type=mysql_num_rows($rs_user_type);
//array_push($a_return,array("rows"=>$rows_user_type));
		mysql_free_result($rs_user_type);
		$check_oldpassword=($rows_user_type>0)?true:false;
		if($check_oldpassword==true){
array_push($a_return,array("newpass"=>$txtNewpass));
array_push($a_return,array("confirm"=>$txtConfirmpass));

			if(($txtNewpass==$txtConfirmpass) and (!((is_null($txtNewpass)) or ($txtNewpass=="")))){
				mysql_select_db($database_personalHealth,$personalHealth);
				$sql_change_password="UPDATE `user` u SET user_password='$txtNewpass' WHERE user_cid='$strCID'";
//array_push($a_return,array("sql change password"=>$sql_change_password));
				mysql_query($sql_change_password);
				array_push($a_return,array("change_password"=>"OK"));
			}else{
				array_push($a_return,array("change_password"=>"ยืนยันรหัสผิด"));
			}
		}else{
			array_push($a_return,array("change_password"=>"Old password incorrect"));
		}
	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}


function mental($strUsername,$strPassword,$strDatatype,$txtSex,$txtAge,$txtMaried,$txtOccupation,$txtEducation,$txtQuestion1,$txtQuestion2,$txtQuestion3,$txtQuestion4)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$sum_q=$txtQuestion1+$txtQuestion2+$txtQuestion3+$txtQuestion4;
		mysql_select_db($database_personalHealth,$personalHealth);
		$sql_mental="select m.mental_level,m.mental_description from mental_detail m where $sum_q BETWEEN m.mental_score_min and m.mental_score_max";
		$rs_mental=mysql_query($sql_mental);
		$row_mental=mysql_fetch_assoc($rs_mental);
		mysql_free_result($rs_mental);
		array_push($a_return,$row_mental);				
	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}


function mental_graph($strUsername,$strPassword,$strDatatype,$txtSex,$txtAge,$txtMaried,$txtOccupation,$txtEducation,$txtQuestion1,$txtQuestion2,$txtQuestion3,$txtQuestion4)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$sum_q=$txtQuestion1+$txtQuestion2+$txtQuestion3+$txtQuestion4;
		mysql_select_db($database_personalHealth,$personalHealth);
		$sql_graph="SELECT
	b.cid,
	concat(	YEAR(b.last_date_update),MONTH (b.last_date_update)) years_month,
	AVG(b.mental_result_sum) liver_fluke_avg,
if(AVG(b.mental_result_sum)<=4,1,if(AVG(b.mental_result_sum) BETWEEN 5 AND 7.99,2,if(AVG(b.mental_result_sum) >=8,3,NULL))) mental_result_sum_avg_result
FROM
	mental b
GROUP BY
	concat(YEAR(b.last_date_update),MONTH (b.last_date_update))
ORDER BY
	b.last_date_update";
		$rs_graph=mysql_query($sql_graph);
		while ($row_graph=mysql_fetch_assoc($rs_graph)){
					array_push($a_return,$row_graph);
				}
      	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}

function mental_save($strUsername,$strPassword,$strDatatype,$strCID,$txtSex,$txtAge,$txtMaried,$txtOccupation,$txtEducation,$txtQuestion1,$txtQuestion2,$txtQuestion3,$txtQuestion4)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$sum_q=$txtQuestion1+$txtQuestion2+$txtQuestion3+$txtQuestion4;			
		mysql_select_db($database_personalHealth,$personalHealth);//เลือกฐานข้อมูล
		$sql="INSERT INTO mental (cid,sex,age,maried,occupation,education,question1,question2,question3,question4,mental_result_sum,mental_result,code_status_id,last_user_update) values ('$strCID','$txtSex','$txtAge','$txtMaried','$txtOccupation','$txtEducation','$txtQuestion1','$txtQuestion2','$txtQuestion3','$txtQuestion4',$sum_q,'$mental_result','1','1')";
		mysql_query($sql);
		array_push($a_return,array("mental_save"));
	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}

function liver_fluke($strUsername,$strPassword,$strDatatype,$txtSex,$txtAge,$txtMaried,$txtOccupation,$txtEducation,$txtQuestion1,$txtQuestion2,$txtQuestion3,$txtQuestion4,$txtQuestion5)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$numQ1=($txtQuestion1>1)?1:0;
		$numQ2=($txtQuestion2>1)?1:0;
		$numQ3=($txtQuestion3>1)?1:0;
		$numQ4=($txtQuestion4>1)?1:0;
		$numQ5=($txtQuestion5>1)?1:0;
		// array_push($a_return,array("liver_fluke"=>(($numQ1+$numQ2+$numQ3+$numQ4+$numQ5)>=3)?1:0));	
    $liver=$numQ1+$numQ2+$numQ3+$numQ4+$numQ5;	
    $liver_fluke_sum=$txtQuestion1+$txtQuestion2+$txtQuestion3+$txtQuestion4+$txtQuestion5;
    mysql_select_db($database_personalHealth,$personalHealth);
    $sql_liver="select l.liver_fluke_level,l.liver_fluke_description from liver_fluke_detail l where $liver BETWEEN l.liver_fluke_score_min and l.liver_fluke_score_max";
    $rs_liver=mysql_query($sql_liver);
    $row_liver=mysql_fetch_assoc($rs_liver);
    mysql_free_result($rs_liver);
    array_push($a_return,$row_liver);		
	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}

function liver_fluke_graph($strUsername,$strPassword,$strDatatype,$CID)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		// $numQ1=($txtQuestion1>1)?1:0;
		// $numQ2=($txtQuestion2>1)?1:0;
		// $numQ3=($txtQuestion3>1)?1:0;
		// $numQ4=($txtQuestion4>1)?1:0;
		// $numQ5=($txtQuestion5>1)?1:0;
		// // array_push($a_return,array("liver_fluke"=>(($numQ1+$numQ2+$numQ3+$numQ4+$numQ5)>=3)?1:0));	
  //   $liver=$numQ1+$numQ2+$numQ3+$numQ4+$numQ5;	
    mysql_select_db($database_personalHealth,$personalHealth);
    $sql_graph="SELECT
	b.cid,
	concat(	YEAR(b.last_date_update),MONTH (b.last_date_update)) years_month,
	AVG(b.liver_fluke_sum) liver_fluke_avg,
if(AVG(b.liver_fluke_sum)<=2,0,if(AVG(b.liver_fluke_sum)>=3,1,NULL)) liver_fluke_avg_result
FROM
	liver_fluke b
GROUP BY
	concat(YEAR(b.last_date_update),MONTH (b.last_date_update))
ORDER BY
	b.last_date_update";
    $rs_graph=mysql_query($sql_graph);
		while ($row_graph=mysql_fetch_assoc($rs_graph)){
					array_push($a_return,$row_graph);
				}
      	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}

function liver_fluke_save($strUsername,$strPassword,$strDatatype,$strCID,$txtSex,$txtAge,$txtMaried,$txtOccupation,$txtEducation,$txtQuestion1,$txtQuestion2,$txtQuestion3,$txtQuestion4,$txtQuestion5)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$numQ1=($txtQuestion1>1)?1:0;
		$numQ2=($txtQuestion2>1)?1:0;
		$numQ3=($txtQuestion3>1)?1:0;
		$numQ4=($txtQuestion4>1)?1:0;
		$numQ5=($txtQuestion5>1)?1:0;
		$liver_fluke_result=(($numQ1+$numQ2+$numQ3+$numQ4+$numQ5)>=3)?1:0;				
		$liver_fluke_sum=$txtQuestion1+$txtQuestion2+$txtQuestion3+$txtQuestion4+$txtQuestion5;
		mysql_select_db($database_personalHealth,$personalHealth);//เลือกฐานข้อมูล
		$sql="INSERT INTO liver_fluke (cid,sex,age,maried,occupation,education,question1,question2,question3,question4,question5,liver_fluke_sum,liver_fluke_result,code_status_id,last_user_update) values ('$strCID','$txtSex','$txtAge','$txtMaried','$txtOccupation','$txtEducation','$txtQuestion1','$txtQuestion2','$txtQuestion3','$txtQuestion4','$txtQuestion5',$liver_fluke_sum,'$liver_fluke_result','1','1')";
		mysql_query($sql);
		array_push($a_return,array("liver_fluke_save"=>1));
	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}
		
function that($strUsername,$strPassword,$strDatatype,$txtBirthdate)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$_return='';
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){	
		$yyyy=substr($txtBirthdate,0,4);
		$mm=substr($txtBirthdate,5,2);
		$dd=substr($txtBirthdate,8,2);
		mysql_select_db($database_personalHealth,$personalHealth);//เลือกฐานข้อมูล
		$query_that_year = "select * from that_year where year(startdate)='".$yyyy."'"; //สร้างคิวรี่
		$rs_that_year = mysql_query($query_that_year, $personalHealth) or die(mysql_error());//รันคิวรี่เก็บไว้เป็นเร็คคอร์ดเซ็ต
		$row_that_year=mysql_fetch_assoc($rs_that_year);//ตัดเร็คคอร์ดเซ็ตออกเป็นเป็นแถว
		$startdate=$row_that_year['startdate'];//ดึงข้อมูลออกจากฟิว
		mysql_free_result($rs_that_year);

		$datediff=mktime(0,0,0,$mm+0,$dd+0,$yyyy+0)-mktime(0,0,0,substr($startdate,5,2)+0,substr($startdate,-2)+0,substr($startdate,0,4)+0);
		$datediff=$datediff/86400;
		$degree=$datediff*360/365.2587;
		$b_degree=$degree+85;
		$b0_degree=get_tab($b_degree,0);
		$a_b0_degree=array();
		foreach($b0_degree as $k=>$v){
			if ($v>0){
				array_push($a_b0_degree,$k+1);
			}
		}
		mysql_select_db($database_personalHealth,$personalHealth);//เลือกฐานข้อมูล
		$sql_b0_degree="select * from that_detail where that_id in (".implode(",",$a_b0_degree).")";
//array_push($a_return,$sql_b0_degree);
		$rs_b0_degree=mysql_query($sql_b0_degree);
		$a_that_id=array();
		$a_main_sector=array(0,0);
		$a_main_sector_color=array("FFFFFF","FFFFFF");
		$a_main_sector_i=0;
		while ($row_b0_degree=mysql_fetch_assoc($rs_b0_degree)){
			$that_id=$row_b0_degree['that_id'];
			array_push($a_that_id,$b0_degree[$that_id-1]."-".$that_id);
			$a_main_sector[$a_main_sector_i]=$b0_degree[$that_id-1];
			$a_main_sector_color[$a_main_sector_i]=$row_b0_degree['that_color'];
			++$a_main_sector_i;
		}
		mysql_free_result($rs_b0_degree);
		sort($a_that_id);

		$a_main=array("ธาตุหลัก","ธาตุแทรก");
		$a_main_i=0;
		for ($a_that_id_i=count($a_that_id)-1;$a_that_id_i>=0;--$a_that_id_i){
			$that_id=explode("-", $a_that_id[$a_that_id_i]);
			mysql_select_db($database_personalHealth,$personalHealth);//เลือกฐานข้อมูล
			$sql_that_detail="select * from that_detail where that_id=".$that_id[1];
			$rs_that_detail=mysql_query($sql_that_detail);
			$row_that_detail=mysql_fetch_assoc($rs_that_detail);
			mysql_free_result($rs_that_detail);
array_push($a_return,$row_that_detail);


			++$a_main_i;
//			print_r($row_that_detail);
		}


		$b0_degree=get_tab($b_degree,0);
//array_push($a_return,$b0_degree);
		$b1_degree=get_tab($b_degree,1);
//($a_return,$b1_degree);
		$b2_degree=get_tab($b_degree,2);
//array_push($a_return,$b2_degree);
		$b3_degree=get_tab($b_degree,3);
//array_push($a_return,$b3_degree);


		$tempDate = $yyyy."-".$mm."-".$dd;
		$dayofweek=date('w', strtotime( $tempDate))+1;
				
		$a_zodiacs=array("ชวด","ฉลู","ขาล","เถาะ","มะโรง","มะเส็ง","มะเมีย","มะแม","วอก","ระกา","จอ","กุน");
//array_push($a_return,"ปี ".$a_zodiacs[(($yyyy-4)%12)]);
		mysql_select_db($database_personalHealth,$personalHealth);//เลือกฐานข้อมูล
		$sql_age="select getAgeYear('".$yyyy."-".$mm."-".$dd."',now()) as age_year,getAgeMonth('".$yyyy."-".$mm."-".$dd."',now()) as age_month,getAgeDay('".$yyyy."-".$mm."-".$dd."',now()) as age_day";
		$rs_age=mysql_query($sql_age);
		$row_age=mysql_fetch_assoc($rs_age);
//array_push($a_return,"อายุ : ".$row_age['age_year']."  ปี"." ".$row_age['age_month']." เดือน"." ".$row_age['age_day']." วัน");
		$age_year=(($row_age['age_month']>=6) and ($row_age['age_day']>0))?$row_age['age_year']+1:$row_age['age_year'];
		mysql_free_result($rs_age);

		$sum=($dayofweek+$mm+(($yyyy-3)%12)+$age_year+9)*3;
		$a_sum[0]=($sum+20)%4;
		$a_sum[1]=($sum+12)%4;
		$a_sum[2]=($sum+6)%4;
		$a_sum[3]=($sum+4)%4;
//array_push($a_return,"dddd=".(($yyyy-3)%12));
//array_push($a_return,$a_sum);






//		array_push($a_return,$b_degree);
	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}

function get_tab($b_degree,$tab){
	$a_tab=array();
	array_push($a_tab,array(92,180,267.5,364));
	array_push($a_tab,array(42,80,118,156,195,233,271,310,360));
	array_push($a_tab,array(24,44,63,80,98,118,137,156,178,196,215,234,253,272,291,312,333,360));
	array_push($a_tab,array(118,230,360));
	$a_space=array(22,20,17,13);
	$b_degree_min=$b_degree-($a_space[$tab]/2);
	$b_degree_max=$b_degree+($a_space[$tab]/2);
	$this_min=0;
	$min_diff=0;
	$max_diff=0;
	foreach ($a_tab[$tab] as $key => $value) {
		if (($b_degree_min<=4) and ($tab==0)){
			if ($b_degree_min<=$value){
				$this_min=3;
				$min_diff=4-$b_degree_min;
				$max_diff=$a_space[$tab]-$min_diff;
				break;
			}
		}else{
			if ($b_degree_min<=$value){
				$this_min=$key;
				$min_diff=$value-$b_degree_min;
				$max_diff=$a_space[$tab]-$min_diff;
				break;
			}
		}
	}
	$this_max=0;
	foreach ($a_tab[$tab] as $key => $value) {
		if ($b_degree_max<=$value){
			$this_max=$key;
			break;
		}
	}
//	echo "<br>b_degree_min=".$b_degree_min;
//	echo "<br>b_degree_max=".$b_degree_max;

//	echo "<br>this_min=".$this_min;
//	echo "<br>this_max=".$this_max;
//	echo "<br>min_diff=".$min_diff;
//	echo "<br>max_diff=".$max_diff;
	$my_main=array();
	if ($this_min==$this_max){
		foreach ($a_tab[$tab] as $key => $value) {
			if ($this_min==$key){
				array_push($my_main, 100);
			}else{
				array_push($my_main, 0);
			}
		}
	}else{
		foreach ($a_tab[$tab] as $key => $value) {
			if ($this_min==$key){
				array_push($my_main, $min_diff*100/$a_space[$tab]);
			}else{
				array_push($my_main, 0);
			}
		}
		foreach ($a_tab[$tab] as $key => $value) {
			if ($this_max==$key){
				$my_main[$key]=$max_diff*100/$a_space[$tab];
			}
		}
	}
	return $my_main;
}



		function bmi($strUsername,$strPassword,$strDatatype,$txtWeight,$txtHeight)
		{
			global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				$bmi_result=$txtWeight/pow($txtHeight/100,2);
				$bmi=number_format($bmi_result, 2, '.', '');
			//	array_push($a_return,array("bmi"=>$bmi_result));	
        mysql_select_db($database_personalHealth,$personalHealth);
        $sql_bmi="select b.bmi,($bmi)as bmi_result,b.level,b.risk,b.direction from bmi_risk b where $bmi_result BETWEEN b.min and b.max";
        $rs_bmi=mysql_query($sql_bmi);
        $row_bmi=mysql_fetch_assoc($rs_bmi);
        mysql_free_result($rs_bmi);
        array_push($a_return,$row_bmi);  	

			}
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}

		function bmi_graph($strUsername,$strPassword,$strDatatype,$CID)
		{
			global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
			//	$bmi_result=$txtWeight/pow($txtHeight/100,2);
			//	array_push($a_return,array("bmi"=>$bmi_result));	
        mysql_select_db($database_personalHealth,$personalHealth);
        $sql_graph="SELECT b.cid,b.weight,b.height,concat(YEAR(b.last_date_update),MONTH(b.last_date_update)) years_month,AVG(b.bmi_result) bmi_result_avg FROM bmi b GROUP BY concat(YEAR(b.last_date_update),MONTH(b.last_date_update)) ORDER BY b.last_date_update";
        $rs_graph=mysql_query($sql_graph);
		while ($row_graph=mysql_fetch_assoc($rs_graph)){
					array_push($a_return,$row_graph);
				}
      		}
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


		function bmi_save($strUsername,$strPassword,$strDatatype,$strCID,$txtWeight,$txtHeight)
		{
			global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				$bmi_result=$txtWeight/pow($txtHeight/100,2);
					
					$sql="INSERT INTO bmi (cid,weight,height,bmi_result,bmi_risk_id,code_status_id,last_user_update) values ('$strCID','$txtWeight','$txtHeight','$bmi_result','1','1','1')";
					array_push($a_return,$sql);
					mysql_query($sql);
					array_push($a_return,array("bmi_save"));
			}
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


function risk_stroke($strUsername,$strPassword,$strDatatype,$txtSex,$txtAge,$txtMaried,$txtOccupation,$txtEducation,$txtQuestion1,$txtQuestion2,$txtQuestion3,$txtQuestion4,$txtQuestion5,$txtQuestion6,$txtQuestion7)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$numQ1=($txtQuestion1>=1)?1:0;
		$numQ2=($txtQuestion2>=1)?1:0;
		$numQ3=($txtQuestion3>=1)?1:0;
		$numQ4=($txtQuestion4>=1)?1:0;
		$numQ5=($txtQuestion5>=1)?1:0;
		$numQ6=($txtQuestion6>=1)?1:0;
		$numQ7=($txtQuestion7>=1)?1:0;
	// 	array_push($a_return,array("risk_stroke"=>($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)<=2?1:($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)>=4?2:($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)>=5?3:0));

		$sum_q=$numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7;
		mysql_select_db($database_personalHealth,$personalHealth);
		$sql_stroke="select ($sum_q)as sum_q,r.risk_stroke_level,r.risk_stroke_description,r.risk_direction from risk_stroke_detail r where $sum_q BETWEEN r.risk_stroke_score_min and r.risk_stroke_score_max ";
		$rs_stroke=mysql_query($sql_stroke);
		$row_stroke=mysql_fetch_assoc($rs_stroke);
		mysql_free_result($rs_stroke);
		array_push($a_return,$row_stroke);		

	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}


function risk_stroke_graph($strUsername,$strPassword,$strDatatype,$CID)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		/*$numQ1=($txtQuestion1>1)?1:0;
		$numQ2=($txtQuestion2>1)?1:0;
		$numQ3=($txtQuestion3>1)?1:0;
		$numQ4=($txtQuestion4>1)?1:0;
		$numQ5=($txtQuestion5>1)?1:0;
		$numQ6=($txtQuestion6>1)?1:0;
		$numQ7=($txtQuestion7>1)?1:0;*/
	// 	array_push($a_return,array("risk_stroke"=>($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)<=2?1:($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)>=4?2:($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)>=5?3:0));
		//$sum_q=$numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7;
		mysql_select_db($database_personalHealth,$personalHealth);
		$sql_graph="SELECT
	b.cid,
	concat(	YEAR(b.last_date_update),MONTH (b.last_date_update)) years_month,
	AVG(b.risk_stroke_result_sum) risk_stroke_result_sum,
if(AVG(b.risk_stroke_result_sum)=0,0,if(AVG(b.risk_stroke_result_sum) BETWEEN 1 AND 2.99,1,if(AVG(b.risk_stroke_result_sum) BETWEEN 3 AND 4.99,2,if(AVG(b.risk_stroke_result_sum) >=5,3,NULL)))) risk_stroke_avg_result
FROM
	risk_stroke b
GROUP BY
	concat(YEAR(b.last_date_update),MONTH (b.last_date_update))
ORDER BY
	b.last_date_update ";
		$rs_graph=mysql_query($sql_graph);
		while ($row_graph=mysql_fetch_assoc($rs_graph)){
					array_push($a_return,$row_graph);
				}
      		}
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}



function risk_stroke_save($strUsername,$strPassword,$strDatatype,$strCID,$txtSex,$txtAge,$txtMaried,$txtOccupation,$txtEducation,$txtQuestion1,$txtQuestion2,$txtQuestion3,$txtQuestion4,$txtQuestion5,$txtQuestion6,$txtQuestion7)
{
	global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
	$user_level = check_user($strUsername,$strPassword);
	$a_return=array();
	if ($user_level>0){
		$numQ1=($txtQuestion1>1)?1:0;
		$numQ2=($txtQuestion2>1)?1:0;
		$numQ3=($txtQuestion3>1)?1:0;
		$numQ4=($txtQuestion4>1)?1:0;
		$numQ5=($txtQuestion5>1)?1:0;
		$numQ6=($txtQuestion6>1)?1:0;
		$numQ7=($txtQuestion7>1)?1:0;
		$risk_stroke_result=(($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)<=2?1:($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)<=4?2:($numQ1+$numQ2+$numQ3+$numQ4+$numQ5+$numQ6+$numQ7)>=5?3:0);				
		$risk_stroke_result_sum=$txtQuestion1+$txtQuestion2+$txtQuestion3+$txtQuestion4+$txtQuestion5+$txtQuestion6+$txtQuestion7;
		mysql_select_db($database_personalHealth,$personalHealth);//เลือกฐานข้อมูล
		$sql="INSERT INTO risk_stroke (cid,sex,age,maried,occupation,education,question1,question2,question3,question4,question5,question6,question7,risk_stroke_result_sum,risk_stroke_result,code_status_id,last_user_update) values ('$strCID','$txtSex','$txtAge','$txtMaried','$txtOccupation','$txtEducation','$txtQuestion1','$txtQuestion2','$txtQuestion3','$txtQuestion4','$txtQuestion5','$txtQuestion6','$txtQuestion7',$risk_stroke_result_sum,'$risk_stroke_result','1','1')";
		mysql_query($sql);
		array_push($a_return,array("risk_stroke_save"=>1));
	}
	return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
}

		function CustomerDetail($strName,$strEmail)
		{
			return "Hello, World! Khun ($strName , Your email : $strEmail)";
		}

		function person($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_person="SELECT distinct(p.cid),concat(pname.PRENAME,p.NAME)as name, p.LNAME,p.BIRTH, p.ABOGROUP,concat(h.HOUSE,' ','หมู่','  ',h.VILLAGE,' ','บ้าน',v2.villagename,' ','ต.',cs.subdistname,' ','อ.',c.distname,' ','จ. ',cc.changwatname)as address ,if(SEX=1,'ชาย','หญิง') as SEX, (year(CURDATE())-year(p.BIRTH)) as AGE
					FROM hdc.person p 
					 left JOIN hdc.cprename pname on p.PRENAME=pname.id_prename  
					LEFT JOIN hdc.home h on h.HID=p.HID  and h.HOSPCODE=p.HOSPCODE  
					LEFT JOIN hdc.cvillage v2 on v2.villagecodefull=CONCAT(h.CHANGWAT,h.AMPUR,h.TAMBON,h.VILLAGE)  
					LEFT JOIN hdc.co_district c on c.distid=v2.ampurcode
					LEFT JOIN hdc.co_subdistrict cs on cs.subdistid=v2.tamboncode
					LEFT JOIN hdc.cchangwat cc on cc.changwatcode=v2.changwatcode
					where p.TYPEAREA In('1','3') and p.HID not in('1','00000') and p.cid='$strCID'";
				$rs_person=mysql_query($query_person);
				while ($row_person=mysql_fetch_assoc($rs_person)){
					array_push($a_return,$row_person);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_person){
						$_return="No data<br>".$query_person;
					}else{
						$_return="Query Error<br>".$query_person;
					}
				}
				mysql_free_result($rs_person);
			}
//			return $_return;
			//return (strtolower($strDatatype)=="json")?$_return:arrayToXML($a_return);

// หา hospcode,pid ใน person ที่ตรงกับ cid 
// $sql="select weight,height from service where concat(hospcode,pid) in (".$a_hospcode_pid.") order by date_serv desc limit 1";

// $row_service = mysql_fetch_assoc($rs_service);
// array_push("weight"=>$row_service['weight'],$a_return);
// array_push("height"=>$row_service['height'],$a_return);

// or $a_return["weight"] = $row_service['weight'];


			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


		 
		function appointment($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_appointment="SELECT appointment.hospcode, person.cid, appointment.date_serv, appointment.apdate, capptype.thapptype, co_office.off_name FROM ((appointment INNER JOIN capptype ON appointment.APTYPE = capptype.id_apptype) INNER JOIN person ON (appointment.HOSPCODE = person.HOSPCODE) AND (appointment.PID = person.PID)) INNER JOIN co_office ON appointment.HOSPCODE = co_office.off_id WHERE person.cid='$strCID' ORDER BY appointment.APDATE DESC";
				$rs_appointment=mysql_query($query_appointment);
				while ($row_appointment=mysql_fetch_assoc($rs_appointment)){
					array_push($a_return,$row_appointment);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_appointment){
						$_return="No data<br>".$query_appointment;
					}else{
						$_return="Query Error<br>".$query_appointment;
					}
				}
				mysql_free_result($rs_appointment);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


		function chronic($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_chronic="SELECT  co.off_name,cc.tchronic from person p
					INNER JOIN chronic c on p.pid=c.pid and p.HOSPCODE=c.hospcode
					INNER JOIN cchronic cc ON c.CHRONIC = cc.id_chronic
					LEFT JOIN co_office co on co.off_id=c.HOSPCODE
					where p.cid='$strCID'
					GROUP BY c.HOSPCODE, c.PID, cc.tchronic";
				$rs_chronic=mysql_query($query_chronic);
				while ($row_chronic=mysql_fetch_assoc($rs_chronic)){
					array_push($a_return,$row_chronic);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_chronic){
						$_return="No data<br>".$query_chronic;
					}else{
						$_return="Query Error<br>".$query_chronic;
					}
				}
				mysql_free_result($rs_chronic);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}

			function drugallergy($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_drugallergy="SELECT drugallergy.HOSPCODE, drugallergy.DNAME,calevel.ALEVEL, co_office.off_name FROM (drugallergy INNER JOIN person ON (drugallergy.PID = person.PID) AND (drugallergy.HOSPCODE = person.HOSPCODE)) INNER JOIN co_office ON drugallergy.HOSPCODE = co_office.off_id INNER JOIN calevel ON calevel.id_alevel=drugallergy.ALEVEL WHERE person.cid='$strCID' ORDER BY drugallergy.DATERECORD DESC";
				$rs_drugallergy=mysql_query($query_drugallergy);
				while ($row_drugallergy=mysql_fetch_assoc($rs_drugallergy)){
					array_push($a_return,$row_drugallergy);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_drugallergy){
						$_return="No data<br>".$query_drugallergy;
					}else{
						$_return="Query Error<br>".$query_drugallergy;
					}
				}
				mysql_free_result($rs_drugallergy);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}

			function vaccine($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
						$query_vaccine="SELECT * from (SELECT e.date_serv,co.off_name, e.vaccinetype,cv.thvaccine from epi  e LEFT JOIN person p ON e.pid=p.pid AND e.HOSPCODE=p.HOSPCODE 
							LEFT JOIN co_office co ON e.VACCINEPLACE=co.off_id LEFT JOIN cvaccinetype cv ON e.VACCINETYPE=cv.vaccinecode WHERE  p.CID='$strCID' 
							ORDER BY if(e.hospcode=e.VACCINEPLACE,0,1)) as p  GROUP BY  p.DATE_SERV,p.vaccinetype ";
				$rs_vaccine=mysql_query($query_vaccine);
				while ($row_vaccine=mysql_fetch_assoc($rs_vaccine)){
					array_push($a_return,$row_vaccine);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_vaccine){
						$_return="No data<br>".$query_vaccine;
					}else{
						$_return="Query Error<br>".$query_vaccine;
					}
				}
				mysql_free_result($rs_vaccine);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


		function check_user($strUsername,$strPassword)
		{
			global $database_hdc,$hdc;
			
			mysql_select_db($database_hdc,$hdc);
			$query_check_user="select * from user_webservice where user_name = '$strUsername' and user_password='$strPassword'";
			$rs_check_user=mysql_query($query_check_user);
			$rows_check_user = mysql_num_rows($rs_check_user);
			$row_check_user=mysql_fetch_assoc($rs_check_user);
			if ($rows_check_user>0){
				$_return = $row_check_user['user_level_id'];
			}else{
				$_return = 0;
			}
			mysql_free_result($rs_check_user);
			return $_return;
		}

		function user_log($strUsername,$strPassword,$strDatatype,$txtUsername)
		{
			global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
		    mysql_select_db($database_personalHealth,$personalHealth);
		 	$query_log="SELECT user_login,login_completed_id,last_date_update FROM `personalHealth_login_log` p where user_login='$txtUsername' ";
			$rs_log=mysql_query($query_log);
		while ($row_log=mysql_fetch_assoc($rs_log)){
					array_push($a_return,$row_log);
				}
      		}
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


		function chiefcomp($strUsername,$strPassword,$strDatatype,$strCID,$strSeq)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_chiefcomp="SELECT s.hospcode,co.off_name,s.date_serv,s.seq,s.chiefcomp,s.btemp,s.sbp,s.dbp,s.pr,s.rr  FROM service s LEFT JOIN person p ON s.pid=p.pid AND s.HOSPCODE=p.HOSPCODE LEFT JOIN co_office co ON s.HOSPCODE=co.off_id WHERE cid='$strCID'  and s.SEQ='$strSeq'  ";
				$rs_chiefcomp=mysql_query($query_chiefcomp);
				while ($row_chiefcomp=mysql_fetch_assoc($rs_chiefcomp)){
					array_push($a_return,$row_chiefcomp);

				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_chiefcomp){
						$_return="No data<br>".$query_chiefcomp;
					}else{
						$_return="Query Error<br>".$query_chiefcomp;
					}
				}
				mysql_free_result($rs_chiefcomp);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


		function opd($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_opd="SELECT s.hospcode,co.off_name,s.date_serv,s.seq,s.chiefcomp,s.btemp,s.sbp,s.dbp,s.pr,s.rr  FROM service s LEFT JOIN person p ON s.pid=p.pid AND s.HOSPCODE=p.HOSPCODE LEFT JOIN co_office co ON s.HOSPCODE=co.off_id WHERE cid='$strCID'  ORDER BY s.DATE_SERV DESC ";
				$rs_opd=mysql_query($query_opd);
				while ($row_opd=mysql_fetch_assoc($rs_opd)){
					array_push($a_return,$row_opd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_opd){
						$_return="No data<br>".$query_opd;
					}else{
						$_return="Query Error<br>".$query_opd;
					}
				}
				mysql_free_result($rs_opd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}
 
		function ncdscreen($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_ncdscreen="SELECT p.cid,n.DATE_SERV,n.HOSPCODE,co.off_name,n.WEIGHT,n.HEIGHT,n.SBP_1,n.DBP_1,n.BSLEVEL FROM ncdscreen n  LEFT JOIN person p ON n.pid=p.pid AND n.HOSPCODE=p.HOSPCODE LEFT JOIN co_office co ON n.HOSPCODE=co.off_id WHERE  p.CID='$strCID' AND p.typearea In('1','3') ORDER BY n.DATE_SERV DESC";
				$rs_ncdscreen=mysql_query($query_ncdscreen);
				while ($row_ncdscreen=mysql_fetch_assoc($rs_ncdscreen)){
					array_push($a_return,$row_ncdscreen);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_ncdscreen){
						$_return="No data<br>".$query_ncdscreen;
					}else{
						$_return="Query Error<br>".$query_ncdscreen;
					}
				}
				mysql_free_result($rs_ncdscreen);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


		function ipd($strUsername,$strPassword,$strDatatype,$strCID)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_ipd="SELECT admit.hospcode,co_office.off_name,admit.seq,admit.an,left(admit.datetime_admit,10)as date_admit,left(admit.datetime_disch,10)as date_disch,DATEDIFF(admit.datetime_disch,admit.datetime_admit)AS admit_all
					FROM `admission` admit 
          LEFT OUTER JOIN person p on p.pid=admit.pid and p.hospcode=admit.hospcode
					LEFT join co_office on co_office.off_id=admit.HOSPCODE
					WHERE p.cid='$strCID' 
					GROUP BY admit.datetime_admit
					ORDER BY  admit.datetime_admit DESC";
				$rs_ipd=mysql_query($query_ipd);
				while ($row_ipd=mysql_fetch_assoc($rs_ipd)){
					array_push($a_return,$row_ipd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_ipd){
						$_return="No data<br>".$query_ipd;
					}else{
						$_return="Query Error<br>".$query_ipd;
					}
				}
				mysql_free_result($rs_ipd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


function chiefcomp_ipd($strUsername,$strPassword,$strDatatype,$strCID,$strSeq,$strHospcode)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_chiefcomp_ipd="SELECT admit.hospcode,co_office.off_name,admit.seq,s.CHIEFCOMP,admit.an,left(admit.datetime_admit,10)as date_admit,left(admit.datetime_disch,10)as date_disch,DATEDIFF(admit.datetime_disch,admit.datetime_admit)AS admit_all
					FROM `admission` admit 
          LEFT OUTER JOIN person p on p.pid=admit.pid and p.hospcode=admit.hospcode
					LEFT join co_office on co_office.off_id=admit.HOSPCODE
					LEFT JOIN hdc.service s on s.SEQ=admit.SEQ
					WHERE p.cid='$strCID' and s.seq='$strSeq' and admit.HOSPCODE='$strHospcode'
					GROUP BY admit.datetime_admit
					ORDER BY  admit.datetime_admit DESC";
				$rs_chiefcomp_ipd=mysql_query($query_chiefcomp_ipd);
				while ($row_chiefcomp_ipd=mysql_fetch_assoc($rs_chiefcomp_ipd)){
					array_push($a_return,$row_chiefcomp_ipd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_chiefcomp_ipd){
						$_return="No data<br>".$query_chiefcomp_ipd;
					}else{
						$_return="Query Error<br>".$query_chiefcomp_ipd;
					}
				}
				mysql_free_result($rs_chiefcomp_ipd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}



function diagnosis_ipd($strUsername,$strPassword,$strDatatype,$strCID,$strAn)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_diagnosis_ipd="SELECT idiag.diagcode,icd.`disease`,icd.`diseasethai`,cd.diagtypedesc
					FROM `admission` admit 
					LEFT OUTER JOIN `diagnosis_ipd` idiag ON idiag.an=admit.an AND idiag.hospcode=admit.`HOSPCODE` 
					LEFT OUTER JOIN `cdisease` icd ON REPLACE(icd.diseasecode,'.','')=idiag.`DIAGCODE` 
					LEFT OUTER JOIN person p on p.pid=admit.pid and p.hospcode=admit.hospcode 
					LEFT JOIN cdiagtype cd on cd.diagtype=idiag.DIAGTYPE
					WHERE p.cid='$strCID' and idiag.an='$strAn'";
				$rs_diagnosis_ipd=mysql_query($query_diagnosis_ipd);
				while ($row_diagnosis_ipd=mysql_fetch_assoc($rs_diagnosis_ipd)){
					array_push($a_return,$row_diagnosis_ipd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_diagnosis_ipd){
						$_return="No data<br>".$query_diagnosis_ipd;
					}else{
						$_return="Query Error<br>".$query_diagnosis_ipd;
					}
				}
				mysql_free_result($rs_diagnosis_ipd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}



function drug_ipd($strUsername,$strPassword,$strDatatype,$strCID,$strAn)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_drug_ipd="SELECT dru_ipd.dname,dru_ipd.amount,c.unit  
					FROM `admission` admit 
					LEFT OUTER JOIN `drug_ipd` dru_ipd ON dru_ipd.an= admit.an and dru_ipd.hospcode=admit.hospcode 
					LEFT OUTER JOIN person p on p.pid=admit.pid and p.hospcode=admit.hospcode
					LEFT JOIN cunit c on c.id_unit=dru_ipd.UNIT
					WHERE p.cid='$strCID' and admit.an='$strAn'";
				$rs_drug_ipd=mysql_query($query_drug_ipd);
				while ($row_drug_ipd=mysql_fetch_assoc($rs_drug_ipd)){
					array_push($a_return,$row_drug_ipd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_drug_ipd){
						$_return="No data<br>".$query_drug_ipd;
					}else{
						$_return="Query Error<br>".$query_drug_ipd;
					}
				}
				mysql_free_result($rs_drug_ipd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}



function proced_ipd($strUsername,$strPassword,$strDatatype,$strCID,$strAn)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_proced_ipd="SELECT c.th_desc,pro_ipd.timestart
					FROM `admission` admit 
					LEFT OUTER JOIN `procedure_ipd` pro_ipd ON pro_ipd.an= admit.an and pro_ipd.hospcode=admit.hospcode 
					LEFT OUTER JOIN person p on p.pid=admit.pid and p.hospcode=admit.hospcode
					LEFT JOIN cproced c on c.procedcode=pro_ipd.PROCEDCODE
					WHERE p.cid='$strCID' and admit.an='$strAn'";
				$rs_proced_ipd=mysql_query($query_proced_ipd);
				while ($row_proced_ipd=mysql_fetch_assoc($rs_proced_ipd)){
					array_push($a_return,$row_proced_ipd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_proced_ipd){
						$_return="No data<br>".$query_proced_ipd;
					}else{
						$_return="Query Error<br>".$query_proced_ipd;
					}
				}
				mysql_free_result($rs_proced_ipd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}



function drug_opd($strUsername,$strPassword,$strDatatype,$strCID,$strSeq)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_drug_opd="SELECT dru_opd.dname,dru_opd.amount,c.unit  
					FROM service s
					LEFT OUTER JOIN `drug_opd` dru_opd on dru_opd.SEQ=s.seq and dru_opd.pid=s.pid and dru_opd.HOSPCODE=s.HOSPCODE
					LEFT OUTER JOIN person p  ON s.pid=p.pid AND s.HOSPCODE=p.HOSPCODE 
					LEFT JOIN cunit c on c.id_unit=dru_opd.UNIT
					WHERE p.cid='$strCID' and s.seq='$strSeq'";
;
				$rs_drug_opd=mysql_query($query_drug_opd);				
				while ($row_drug_opd=mysql_fetch_assoc($rs_drug_opd)){
					array_push($a_return,$row_drug_opd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_drug_opd){
						$_return="No data<br>".$query_drug_opd;
					}else{
						$_return="Query Error<br>".$query_drug_opd;
					}
				}
				mysql_free_result($rs_drug_opd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}


function proced_opd($strUsername,$strPassword,$strDatatype,$strCID,$strSeq)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_proced_opd="SELECT c.th_desc
					FROM service s 
					LEFT OUTER JOIN `procedure_opd` pro_opd ON pro_opd.seq= s.seq and pro_opd.hospcode=s.hospcode 
					LEFT OUTER JOIN person p on p.pid=s.pid and p.hospcode=s.hospcode
					LEFT JOIN cproced c on c.procedcode=pro_opd.PROCEDCODE
					WHERE p.cid='$strCID' and s.seq='$strSeq'";
;
				$rs_proced_opd=mysql_query($query_proced_opd);				
				while ($row_proced_opd=mysql_fetch_assoc($rs_proced_opd)){
					array_push($a_return,$row_proced_opd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_proced_opd){
						$_return="No data<br>".$query_proced_opd;
					}else{
						$_return="Query Error<br>".$query_proced_opd;
					}
				}
				mysql_free_result($rs_proced_opd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}



function diagnosis_opd($strUsername,$strPassword,$strDatatype,$strCID,$strSeq)
		{
			global $database_hdc,$hdc;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
				mysql_select_db($database_hdc,$hdc);
				$query_diagnosis_opd="SELECT dio.DIAGCODE,icd.disease,icd.`diseasethai`,cd.diagtypedesc
				FROM service s 
				LEFT JOIN person p ON s.pid=p.pid AND s.HOSPCODE=p.HOSPCODE 
				left JOIN diagnosis_opd dio on dio.SEQ=s.seq and dio.pid=s.pid and dio.HOSPCODE=s.HOSPCODE
				LEFT OUTER JOIN `cdisease` icd ON REPLACE(icd.diseasecode,'.','')=dio.`DIAGCODE` 
				LEFT JOIN cdiagtype cd on cd.diagtype=dio.DIAGTYPE
				WHERE p.cid='$strCID'  and s.seq='$strSeq'";

				$rs_diagnosis_opd=mysql_query($query_diagnosis_opd);				
				while ($row_diagnosis_opd=mysql_fetch_assoc($rs_diagnosis_opd)){
					array_push($a_return,$row_diagnosis_opd);
				}
				if (count($a_return)>0){
					$_return=json_encode($a_return);
				}else{
					if ($rs_diagnosis_opd){
						$_return="No data<br>".$query_diagnosis_opd;
					}else{
						$_return="Query Error<br>".$query_diagnosis_opd;
					}
				}
				mysql_free_result($rs_diagnosis_opd);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}

function user_type($strUsername,$strPassword,$strDatatype,$txtUsername,$txtPassword)
		{
			global $database_hdc,$hdc,$database_personalHealth,$personalHealth;
			$_return='Error incorrect username or password';
			$user_level = check_user($strUsername,$strPassword);
			$a_return=array();
			if ($user_level>0){
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
				}
        $login_completed_id=0;
				if (count($a_return)>0){
					if (!in_array(array("user_type_id"=>3), $a_return)){
						array_push($a_return, array("user_type_id"=>3));
					}
          $login_completed_id=1;
					$_return=json_encode($a_return);
				}else{
					if ($rs_user_type){
						$_return="No data<br>".$query_user_type;
					}else{
						$_return="Query Error<br>".$query_user_type;
					}
				}
        mysql_select_db($database_personalHealth,$personalHealth);
        $sql="insert into personalHealth_login_log (user_login,login_completed_id,client_ip,code_status_id,last_user_update) values ('$txtUsername','$login_completed_id','','1','1')";
        mysql_query($sql);        
				mysql_free_result($rs_user_type);
			}
			//			return $_return;
			return (strtolower($strDatatype)=="json")?json_encode($a_return):arrayToXML($a_return);
		}





function generateXML($tag_in,$value_in="",$attribute_in=""){
    $return = "";
    $attributes_out = "";
    if (is_array($attribute_in)){
        if (count($attribute_in) != 0){
            foreach($attribute_in as $k=>$v):
                $attributes_out .= " ".$k."=\"".$v."\"";
            endforeach;
        }
    }
    return "<".$tag_in."".$attributes_out.((trim($value_in) == "") ? "/>" : ">".$value_in."</".$tag_in.">" );
}

function arrayToXML($array_in){
    $return = "";
    $attributes = array();
    foreach($array_in as $k=>$v):
        if ($k[0] == "@"){
            // attribute...
            $attributes[str_replace("@","",$k)] = $v;
        } else {
            if (is_array($v)){
                $return .= generateXML($k,arrayToXML($v),$attributes);
                $attributes = array();
            } else if (is_bool($v)) {
                $return .= generateXML($k,(($v==true)? "true" : "false"),$attributes);
                $attributes = array();
            } else {
                $return .= generateXML($k,$v,$attributes);
                $attributes = array();
            }
        }
    endforeach;
    return $return;
}   



		// Get our posted data if the service is being consumed
		// otherwise leave this data blank.
		$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
		 
		// pass our posted data (or nothing) to the soap service
		$server->service($POST_DATA);
		exit(); 
?>