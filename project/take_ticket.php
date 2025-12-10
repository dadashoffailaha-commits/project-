<?php
include "config.php";

$fullname   = $_POST['fullname'];
$faculty    = $_POST['faculty'];
$specialty  = $_POST['specialty'];
$group      = $_POST['group'];
$service    = $_POST['service'];

$ticketNumber = rand(1000,9999);

$qrData = "Bilet:$ticketNumber | $fullname | $service";

$sql = "INSERT INTO tickets 
(fullname, faculty, specialty, group_name, service_type, ticket_number, qr_data)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssis",
  $fullname, $faculty, $specialty, $group, $service, $ticketNumber, $qrData
);

if($stmt->execute()) {
  echo json_encode([
    "ok" => true,
    "ticket" => [
      "id" => $conn->insert_id,
      "ticketNumber" => $ticketNumber
    ]
  ]);
} else {
  echo json_encode(["ok"=>false]);
}
?>
