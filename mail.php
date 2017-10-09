<?php $name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$formcontent="From: $name \n tel: $tel \n Message: $message";
$recipient = "gr@kitconcept.pt";
$subject = "Contacto Via Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Obrigado! A sua mensagem foi enviada com sucesso, e entraremos em contacto consigo em breve.";
?>
