<?php 
$msg="";
if (isset($_POST['group'])) {
    extract($_POST);
$to="sanju.esp@gmail.com";
$subject='From contact form';
$emails=$email;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";
$text='<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	</head>
	<style>
table {
  
}

td, th {
  
  text-align: left;
  padding: 8px;
  width:50%;
}


</style>
        <body>
        <div align="center">
             <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px"> 
		 
        	    <div>
        	        <img  src="https://www.pcmedia.in/demo/hgh/assets/images/HGH 20V2-5.jpg" style="width:220px ; text-align:left" alt="Hyderabad Group Housing" border="0"  /></div>
        	       
        	   
			   
        	    <div  style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">
        	        <div style="margin: 30px;">
             	        <p>Enquiry for <b>Hyderabad Group Housing</b> </p>
						
						<div style="text-align:center">
						<h3 style="background-color: #014E7E;padding: 15px;color:#fff ; font-size: 24px;">Contact Details </h3>
             	        <table style="font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;">
             	            <tr >
             	                <th style="text-align: left;padding: 8px;  width:50%;">Group Name</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$group.'</td>
             	            </tr>
             	            <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Team Size</th>
             	               <td style="text-align: left;padding: 8px;  width:50%;">:'.$teamsize.'</td>

             	            </tr>
             	            <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Contact Person</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$contact.'</td>
             	            </tr>
             	            
             	            <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Contact Mobile Number</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$number.'</td>
             	            </tr>
             	            <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Contact Email Addressr</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$email.'</td>
             	            </tr>
             	            
             	          
             	            <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Property Type</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$checkbox.'</td>
             	            </tr>
             	            
             	              <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;"> Location Preference</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$location.'</td>
             	            </tr>
             	            
             	             <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Pin Code</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$pincode.'</td>
             	            </tr>
             	            
             	             <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Land Size</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$landsize.'</td>
             	            </tr>
             	            
             	             <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Budget Type</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$budget.'</td>
             	            </tr>
             	            
             	             <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Land Mark</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$landmark.'</td>
             	            </tr>
             	            <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Alert Frequency</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$time.'</td>
             	            </tr>
             	            
             	            <tr>
             	                <th style="text-align: left;padding: 8px;  width:50%;">Name You Alert</th>
             	                <td style="text-align: left;padding: 8px;  width:50%;">:'.$namealert.'</td>
             	            </tr>
             	            
             	           
             	        </table>
             	        <br>  <br>
             	       </div>
             	           
                        <center>Copyright © 2020 Hyderabad Group Housing.</center>
             	        
             	    </div>
        	    </div>   
        	</div>   
    	</div>
  	    
    	</body>

</html>';

if(mail($to,$subject,$text,$headers)){
    $msg.="Sent Successfully";
    header('Location: index.html');
}
}
    ?>
    