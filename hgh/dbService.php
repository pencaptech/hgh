<?php
    require_once 'DB.class.php';
    $db = new DB();
    
    //Buy Now Popup process
    $res = array();
    extract($_POST);
    if(!empty($indvName && $indvMobile && $indvEmail && $indvPropType && $indvLocPref 
            &&$indvPincode && $indvLandsize && $indvBudgetType && $indvLandmark
            && $indvAlertFreq && $indvNameUAlert)){
                
        $indvPropType = is_array($indvPropType)?implode(",",$indvPropType):'';
        $indvAlertFreq = is_array($indvAlertFreq)?implode(",",$indvAlertFreq):'';
        
        $data = array();
        $data['name'] = $indvName;
        $data['mobile'] = $indvMobile;
        $data['email'] = $indvEmail;
        $data['property_type'] = $indvPropType;
        $data['location_pref'] = $indvLocPref;
        $data['pin_code'] = $indvPincode;
        $data['land_size'] = $indvLandsize;
        $data['budget_type'] = $indvBudgetType;
        $data['land_mark'] = $indvLandmark;
        $data['alert_frequently'] = $indvAlertFreq;
        $data['u_alert'] = $indvNameUAlert;
        $data['type'] = $type;
        
        $insert = $db->insert('investor_req_tbl', $data);
        if($insert){
            $res['status'] = true;
            $res['msg'] = 'Requirement has been posted successfully';
        }
        else{
            $res['status'] = false;
            $res['msg'] = 'OOP Error! Unable to post your requirement now';
        }
    }
    else if(!empty($groupName && $groupTeamsize && $groupContactPerson && $groupMobile && $groupEmail && $groupPropType && $groupLocPref 
            && $groupPincode && $groupLandsize && $groupBudgetType && $groupLandmark && $groupAlertFreq && $groupNameUAlert)){
                
        $groupPropType = is_array($groupPropType)?implode(",",$groupPropType):'';
        $groupAlertFreq = is_array($groupAlertFreq)?implode(",",$groupAlertFreq):'';
        
        $data = array();
            $data['name'] = $groupName;
            $data['team_size'] = $groupTeamsize;
            $data['contact_persion'] = $groupContactPerson;
            $data['mobile'] = $groupMobile;
            $data['email'] = $groupEmail;
            $data['property_type'] = $groupPropType;
            $data['location_pref'] = $groupLocPref;
            $data['pin_code'] = $groupPincode;
            $data['land_size'] = $groupLandsize;
            $data['budget_type'] = $groupBudgetType;
            $data['land_mark'] = $groupLandmark;
            $data['alert_frequently'] = $groupAlertFreq;
            $data['u_alert'] = $groupNameUAlert;
            $data['type'] = $type;
        
        $insert = $db->insert('investor_req_tbl', $data);
        if($insert){
            $res['status'] = true;
            $res['msg'] = 'Requirement has been posted successfully';
        }
        else{
            $res['status'] = false;
            $res['msg'] = 'OOP Error! Unable to post your requirement now';
        }
    }
    else if(!empty($cntName && $cntEmail && $cntMobile && $cntMessage)){
        require_once 'SendMail.php';
        
        $sm = new SendMail();
        $user = ['name'=>$cntName,'fromMail'=>'pencaptech.networking@gmail.com','toMail'=>'pencaptech.networking@gmail.com'];
        $body = '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    	    </head>
    	    <style>
                table {}
                td, th {
                    text-align: left;
                    padding: 8px;
                    width:50%;
                }
            </style>
            <body>
                <div align="center">
                    <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px"> 
        	            <div  style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">
                	        <div style="margin: 30px;">
        						<div style="text-align:center">
        						    <h3 style="background-color: #014E7E;padding: 15px;color:#fff ; font-size: 24px;">Contact Form Details </h3>
                     	            <table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">
                         	            <tr >
                         	                <th style="text-align: left;padding: 8px;  width:50%;">Name</th>
                         	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$cntName.'</td>
                         	            </tr>
                         	            <tr>
                         	                <th style="text-align: left;padding: 8px;  width:50%;">Email</th>
                         	               <td style="text-align: left;padding: 8px;  width:50%;">:'.$cntEmail.'</td>
            
                         	            </tr>
                         	            <tr>
                         	                <th style="text-align: left;padding: 8px;  width:50%;">Phone</th>
                         	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$cntMobile.'</td>
                         	            </tr>
                         	            <tr>
                     	                    <th style="text-align: left;padding: 8px;  width:50%;">Message</th>
                         	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$cntMessage.'</td>
                         	            </tr>
                     	            </table>
                     	            <br><br>
                     	        </div>
                                <center>Copyright © '.date("Y").' Unit24/7.</center>
                 	        </div>
        	            </div>   
    	            </div>   
    	        </div>
	        </body>
        </html>';
        $mailState = $sm->send($user,'HGH Contact Form',$body,[]);
        if($mailState['status'] === true){
            $res['status'] = true;
            $res['msg'] = 'Form has been submitted successfully';
        }
        else{
            $res['status'] = false;
            $res['msg'] = 'OOP Error! Unable submit the form please try againg later';
        }
        
    }
    else if(!empty($view_type && $view_id)){
        $data = $db->getRows('investor_req_tbl',['return_type'=>'single','where'=>"type='".$view_type."' and id='".$view_id."'"]);
        if(!empty($data)){
            $res['status'] = true;
            $res['msg'] = 'Data found';
            $res['data'] = $data;
        }
        else{
            $res['status'] = false;
            $res['msg'] = 'No Data found for this for this request';
        }
    }
    else if(!empty($builderName && $builderMobile && $builderEmail && $builderAddress)){
        $data = array();
        $data['name'] = $builderName;
        $data['mobile'] = $builderMobile;
        $data['email'] = $builderEmail;
        $data['address'] = $builderAddress;
        $insert = $db->insert('builder_tbl', $data);
        if($insert){
            $res['status'] = true;
            $res['msg'] = 'Form has been submitted successfully';
        }
        else{
            $res['status'] = false;
            $res['msg'] = 'OOP Error! Unable to submit the form now';
        }
    }
    else if(!empty($investorName && $investorMobile && $investorEmail && $investorAddress)){
        $data = array();
        $data['name'] = $investorName;
        $data['mobile'] = $investorMobile;
        $data['email'] = $investorEmail;
        $data['address'] = $investorAddress;
        $insert = $db->insert('investor_tbl', $data);
        if($insert){
            $res['status'] = true;
            $res['msg'] = 'Form has been submitted successfully';
        }
        else{
            $res['status'] = false;
            $res['msg'] = 'OOP Error! Unable to submit the form now';
        }
    }
    else if(!empty($nriName && $nriMobile && $nriEmail && $nriAddress)){
        $data = array();
        $data['name'] = $nriName;
        $data['mobile'] = $nriMobile;
        $data['email'] = $nriEmail;
        $data['address'] = $nriAddress;
        $insert = $db->insert('nri_tbl', $data);
        if($insert){
            $res['status'] = true;
            $res['msg'] = 'Form has been submitted successfully';
        }
        else{
            $res['status'] = false;
            $res['msg'] = 'OOP Error! Unable to submit the form now';
        }
    }
    else{
        $res['status'] = false;
        $res['msg'] = 'Please fill all required fields';
    }
    echo json_encode($res);
?>