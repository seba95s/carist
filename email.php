<?php
//vars

if(isset($_POST['submit'])){
$subject = $_POST['subject'];

$to = "siba.saad95@gmail.com";

$from = $_POST['email'];

//data
$msg ="New Message From:"  .$_POST['name']    ."<br>\n";
$msg .= "E-mail: "  .$_POST['email']    ."<br>\n";
$msg .= " Message: "  .$_POST['web']    ."<br>\n";
// $msg .= "Message: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;

mail ($to, $subject,$msg, $headers);
if(mail($to, $subject, $body, $headers)) {
 
    $message = 'Message sent succefully';
} else {
    $message = '  Error';
}
}
echo $message; 
?>