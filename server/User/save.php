<?php
$body = json_decode(file_get_contents('php://input'), true);
$data = $body["data"];
$datenow = date('Y-m-d H:i:s');

$path = preg_replace('/wp-content.*$/', '', __DIR__);
include($path . 'wp-load.php');
global $wpdb;

if (
     !empty($data["nameUser"]) &&
     !empty($data["rutUser"]) &&
     !empty($data["address"]) &&
     !empty($data["comuna"]) &&
     !empty($data["phone"]) &&
     !empty($data["emailUser"]) &&
     !empty($data["isPacient"]) &&
     !empty($data["namePacient"]) &&
     !empty($data["rutPacient"]) &&
     !empty($data["typeReclamo"])
) {
     $result = $wpdb->insert('wp_form_contacto', array(
          'nameUser' => $data["nameUser"],
          'rutUser' => $data["rutUser"],
          'address' => $data["address"],
          'comuna' => $data["comuna"],
          'phone' => $data["phone"],
          'emailUser' => $data["emailUser"],
          'namePacient' => $data["namePacient"],
          'isPacient' => $data["isPacient"],
          'rutPacient' => $data["rutPacient"],
          'typeReclamo' => $data["typeReclamo"],
          'descriptionReclamo' => $data["descriptionReclamo"],
          'reclamoPeticion' => $data["reclamoPeticion"],
          'authorize' => $data["authorize"],
          'created' => $datenow,
     ));
     if ($result == true) {
          echo json_encode(["success" => "true"]);
     } else {
          echo '{"success": false}';
     }
} else {
     echo '{"success": false}';
}
