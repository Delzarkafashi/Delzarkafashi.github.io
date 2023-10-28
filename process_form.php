<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $namn = $_POST["namn"];
  $nummer = $_POST["nummer"];
  $email = $_POST["email"];
  $meddelande = $_POST["meddelande"];

  // Skapa e-postmeddelande
  $to = "delzarkafashi@gmail.com"; 
  $subject = "Nytt meddelande från $namn";
  $message = "Namn: $namn\nMobilnummer: $nummer\nE-post: $email\nMeddelande:\n$meddelande";

  // Skicka e-post
  mail($to, $subject, $message);

  // Omdirigera användaren till en bekräftelsesida eller annan relevant sida
  header("Location: tack.php"); // Skapa en "tack.php"-sida för att visa efter att meddelandet har skickats
}
?>
