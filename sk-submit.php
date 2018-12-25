<?php 

print_r($_POST);

$mysqli = new mysqli("localhost", "root", "admin","sk");


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

     


$name = $_POST['name']; 				 
$phone = $_POST['phone']; 			 
$device = $_POST['device']; 			 
$interested = $_POST['interested'];	 
$appointment_date = $_POST['appointment_date_mm'] . $_POST['appointment_date_dd'] . $_POST['appointment_date_yyyy']; 
$appointment_time = $_POST['appointment_time_hh'] . $_POST['appointment_time_mm'] . $_POST['appointment_time_ampm'];
$whatsapp = ('whatsapp' == $_POST['sharing-details']) ? 'sent' : 'notsent';
$sms = ('sms' == $_POST['sharing-details']) ? 'sent' : 'notsent';
$address = $_POST['remarks']; 
$formId = $_POST['form_id']; 

$sql = 'INSERT INTO `pc_healthcheck_campaing` '.
      '(name,phone, device, interested, appointment_date, appointment_time, whatsapp_message_sent, sms_message_sent, address)'. "VALUES('$name','$phone','$device', '$interested','$appointment_date','$appointment_time','$whatsapp','$sms','$address')";


if (!$mysqli->query($sql)) {
    echo "Failed to insert data : (" . $mysqli->errno . ") " . $mysqli->error;
}else{
    echo "Entered data successfully\n";
}
            
mysqli_close($mysqli);
//    if(isset($_POST['add'])) {
//            $dbhost = 'localhost:3036';
//            $dbuser = 'root';
//            $dbpass = 'admin';
//            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
//            
//            if(! $conn ) {
//               die('Could not connect: ' . mysql_error());
//            }
//            
//            if(! get_magic_quotes_gpc() ) {
//               $name = addslashes ($_POST['name']);
//               $phone = addslashes ($_POST['phone']);
//                $device = addslashes ($_POST['device']);
//                $interested = addslashes ($_POST['interested']);
//                $appointment_date = addslashes ($_POST['appointment_date']);
//                $appointment_time = addslashes ($_POST['appointment_time']);
//                $whatsapp = addslashes ($_POST['whatsapp']);
//                $sms = addslashes ($_POST['sms']);
//                $address = addslashes ($_POST['address']);
//                
//            }else {
//               $name = $_POST['name'];
//               $phone = $_POST['phone'];
//               $device = $_POST['device'];
//               $interested =$_POST['interested'];
//               $appointment_date =$_POST['appointment_date'];
//               $appointment_time = $_POST['appointment_time'];
//               $whatsapp = ($_POST['whatsapp'];
//               $sms = $_POST['sms'];
//               $address = $_POST['address'];
//            }
//                        
//            $sql = 'INSERT INTO pc_healthcheck_campaing '.
//      '(name,phone, device, interested, appointment_date, appointment_time, whatsapp_message_sent, sms_message_sent, address)'. "VALUES('$name','$phone','$device', '$interested','$appointment_date','$appointment_time','$whatsapp','$sms','$address')";
//               
//            mysql_select_db('pc_healthcheck_campaing');
//            $retval = mysql_query( $sql, $conn );
//            
//            if(! $retval ) {
//               die('Could not enter data: ' . mysql_error());
//            }
//            
//            
//         }

?>
