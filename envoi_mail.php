<?php
/*
 *  SEND A MAIL TO SPIRALE CONTACT BOX
 */

$mail_status = FALSE;

// Get the last name of the contact
$nom_contact = trim(filter_input(INPUT_POST, "nom_contact"));

// Get the first Name of the contact
$prenom_contact = trim(filter_input(INPUT_POST, "prenom_contact"));

// Get the email Address of the contact
$email_contact = trim(filter_input(INPUT_POST, "email_contact", FILTER_VALIDATE_EMAIL));

// Get the message of the contact
$message_contact = trim(filter_input(INPUT_POST, "message_contact"));

if ($nom_contact && $prenom_contact && $email_contact && $message_contact) {
    /**
     * Configure the mail parameters
     */
    // The email Address of Spirale
    $spirale_contact_mail = "contact@spiralebenin.com";

    $message = str_replace("\n.", "\n..", $message_contact);

    // Les entets supplementaires du mail
    $headers = 'From: ' . $email_contact . "\r\n" .
            'Reply-To: ' . $email_contact . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    $mail_status = mail($spirale_contact_mail, $prenom_contact, $message,  $headers);
}


if($mail_status = TRUE){
    echo header("Location: contact.php");
} else {
    echo "Echec de l'envoi du mail";
}





//echo("nom : ".$nom_contact."<br/>");
//echo("prenom : ".$prenom_contact."<br/>");
//echo("Adresse email : ".$email_contact."<br/>");
//echo("Message : ".$message_contact."<br/>");
