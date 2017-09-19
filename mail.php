<?php
// Pour le champ $to, séparer par une virgule s'il y a plusieurs adresses
if(isset($_POST['c_submit']) && strlen($_POST["c_email"]) > 0 && strlen($_POST["c_name"]) > 0 && strlen($_POST["c_message"]) > 0){
    $to = "email@example.com"; 		// TODO : Changer le mail
    $from = $_POST["c_email"]; 
    $name = $_POST["c_name"];
    $subject = "TABLES DU BAN";		// TODO : Changer le sujet
    $message = $name . " wrote the following:" . "\n\n" . $_POST['c_message'];

    $headers = "From:" . $from;
   
	if (mail($to,$subject,$message,$headers))
	{
	    echo "<script>alert(" .  $message . ");</script>";
	}
	else
	{
	    echo "<script>alert('Votre message n'a pas pu être envoyé'');</script>";
	}
} else {
   echo "<script>
	 		alert('Le formulaire n\'est pas complet, veuillez réessayer.');
			window.location.replace('./index.html#contact');
	 	</script>";
}

?>