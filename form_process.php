<?php
 
// define variables and set to empty values.
$name_error = $email_error = "";
$name = $email = $subject = $message = $success = "";
// form is submitted with POST method
if($_SERVER["REQUEST_METHOD"]== "POST"){
  if (empty($_POST['name'])) {
    $name_error = "Name is reguered!";
  }else{
    $name = test_input($_POST["name"]);
// check if name only contains letters and whitespase
      if(!preg_match("/^[a-zA-Z0-9\_]{2,20}/",$name)){
  $name_error = "Only letters and white space allowed";
      }
  }
  if (empty($_POST['email'])) {
    $email_error = "Email is reguered!";
  }else{
    $email = test_input($_POST["email"]);
// check if e-mail adress is will-formed
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $email_error = "Invalida email format";
       }  
  }
  if (empty($_POST['subject'])) {
    $subject = "";
  }else{
    $subject = test_input($_POST["subject"]);
  }
  if (empty($_POST['message'])) {
    $massage = "";
  }else{
    $message = test_input($_POST["message"]);
  }
  if($name_error == '' and $email_error == ''){
    $message_body = '';
    unset($_POST['submit']);
    foreach($_POST as $kye => $value){
      $message_body .= "$kye: $value\n";
    }
    $to = 'stanojevic.ninoslav@yahoo.com';
    $subject = 'Contact form submit';
    if(mail($to, $subject, $message)){
      $success = "Message send, thanks you for contacting me!";
      $name = $email = $subject = $message;
    }

  }
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>