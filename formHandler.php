<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $eventType = $_POST["eventType"];
  $guestNo = $_POST["guestNo"];
  $date = $_POST["date"];
  $start = $_POST["start"];
  $finish = $_POST["finish"];
  $email = $_POST["email"];
  $emailable = isset($_POST["emailable"]) ? "Yes" : "No";

  $to = "danielhealyhosting3@gmail.com"; 
  $subject = "New Form Submission";
  $headers = "From: $email";

  $message = "Event Type: $eventType\n";
  $message .= "Number of Guests: $guestNo\n";
  $message .= "Date: $date\n";
  $message .= "Start Time: $start\n";
  $message .= "Finish Time: $finish\n";
  $message .= "Email: $email\n";
  $message .= "Emailable: $emailable\n";

  mail($to, $subject, $message, $headers);
}
?>