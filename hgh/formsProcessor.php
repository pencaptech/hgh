<?php
    $resp = array();
    $conn = new mysqli('localhost', 'pcmediap_hgh', 'Password@156#', 'pcmediap_hgh');
    
    //Save to Db
    function save($tbl,$data){
        $sql = "INSERT INTO ".$tbl." (";
        $fields = '';
        $values = '';
        $count = 0;
        foreach($data as $key => $value){
            $fields .= (++$count == 1)?",".$key:$key;
            $values .= (++$count == 1)?",'".$value."'":"'".$value."'";
        }
        $sql .= $fields.") VALUES (".$values.")";
        /*$sql = "INSERT INTO investor_req_tbl (name, mobile, email,property_type,location_pref,pin_code,land_size,budget_type,land_mark,alert_frequently,u_alert,type)
            VALUES ('$indvName', '$indvMobile', '$indvEmail','$indvPropType','$indvLocPref','$indvPincode','$indvLandsize','$indvBudgetType','$indvLandmark','$indvAlertFreq','$indvNameUAlert','$type')";*/
        if ($conn->query($sql) === TRUE) {
            $resp['status'] = true;
            $resp['message'] = 'Your Requirement has been posted successfully';
        }
        else {
            $resp['status'] = false;
            $resp['message'] = 'OOP! Something went wrong. Try again';
            $resp['error'] = "Error: " . $sql . "<br>" . $conn->error;;
        }
        $conn->close();
    }
    
    // Check connection
    if ($conn->connect_error) {
        $resp['status'] = false;
        $resp['message'] = "Connection failed: " . $conn->connect_error;
    }
    else{
        extract($_POST);
        //investor.html Individual Form Process
        if($indvName && $indvMobile && $indvEmail && $indvPropType && $indvLocPref 
            &&$indvPincode && $indvLandsize && $indvBudgetType && $indvLandmark
            && $indvAlertFreq && $indvNameUAlert){
            
            $indvPropType = is_array($indvPropType)?implode(",",$indvPropType):'';
            $indvAlertFreq = is_array($indvAlertFreq)?implode(",",$indvAlertFreq):'';
            
            $sql = "INSERT INTO investor_req_tbl (name, mobile, email,property_type,location_pref,pin_code,land_size,budget_type,land_mark,alert_frequently,u_alert,type)
                VALUES ('$indvName', '$indvMobile', '$indvEmail','$indvPropType','$indvLocPref','$indvPincode','$indvLandsize','$indvBudgetType','$indvLandmark','$indvAlertFreq','$indvNameUAlert','$type')";
            if ($conn->query($sql) === TRUE) {
                $resp['status'] = true;
                $resp['message'] = 'Your Requirement has been posted successfully';
            }
            else {
                $resp['status'] = false;
                $resp['message'] = 'OOP! Something went wrong. Try again';
                $resp['error'] = "Error: " . $sql . "<br>" . $conn->error;;
            }
            $conn->close();
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
            
            $resp['status'] = false;
            $resp['message'] = 'Please fill all required fields';
            // save('investor_req_tbl',$data);
        }
        else{
            $resp['status'] = false;
            $resp['message'] = 'Please fill all required fields';
        }
    }
    echo json_encode($resp);
?>