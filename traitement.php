<?php 
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "barbara.mida22@gmail.com";
    $subject = "Nouveau message de $name";
    $headers = " From : $email";
    $messageBody = " nom : $name\n email: $email \n $message";
    //envoyer le mail en utilisant la fonction mail()
    $success = mail($to, $subject, $messageBody, $headers);

    if($success){
        echo "votre message a bien été envoyé!";
    }else{
        echo "une erreur s'est produite lors de l'envoi du message.";
    }
}
?>