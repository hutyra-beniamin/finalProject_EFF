<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once './dbconnect.php';
require "./mail/PHPMailer.php";
require "./mail/SMTP.php";

if (!isset($_POST['name']) || !isset($_POST['surname']) || !isset($_POST['message']) || !isset($_POST['email'])) {
  header('Content-Type: application/json; charset=UTF-8');
  die(json_encode([
    'message' => 'Bitte alle Felder ausfüllen!',
    'error' => true
  ]));
}

$inputs[] = $name = strip_tags(strip_tags(trim($_POST['name'])));
if (!preg_match("/^[-a-zA-ZÄ-ßÀ-ÿ ]+$/", $name) || (strlen($name) < 1)) {
  header('Content-Type: application/json; charset=UTF-8');
  die(json_encode([
    'message' => 'Der angegebene Name ist ungültig',
    'error' => true
  ]));
}

$inputs[] = $surname = strip_tags(strip_tags(trim($_POST['surname'])));
if (!preg_match("/^[-a-zA-ZÄ-ßÀ-ÿ ]+$/", $surname) || (strlen($surname) < 1)) {
  header('Content-Type: application/json; charset=UTF-8');
  die(json_encode([
    'message' => 'Der angegebene Name ist ungültig',
    'error' => true
  ]));
}

$inputs[] = $message = strip_tags(strip_tags(trim($_POST['message'])));

$inputs[] = $email = strip_tags(strip_tags(trim($_POST['email'])));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Content-Type: application/json; charset=UTF-8');
  die(json_encode([
    'message' => 'Die E-Mail-Adresse ' . $email . ' ist ungültig.',
    'error' => true
  ]));
}

$keys = join(", ", array_keys($_POST));
$values = join(", ", array_map(fn($v) => "'" . str_replace("'", "\'", $v) . "'", array_values($_POST))); //escapes quotation marks and adds prefix and suffix quotation marks
$sql = "INSERT INTO `contact_us` ($keys) VALUES ($values);";
if (!$connect->query($sql) === true) {
  header('Content-Type: application/json; charset=UTF-8');
  die(json_encode([
    'message' => 'Error while updating record : ' . $connect->error,
    'error' => true
  ]));
  die("Error while updating record : " . $connect->error);
}
$connect->close();

$mail = new PHPMailer;

$mail->CharSet = 'utf-8';

$mail->isSMTP();
$mail->Host = 'mail.elke.codefactory.live';
$mail->SMTPAuth = true;
$mail->Username = 'noreply@elke.codefactory.live';
$mail->Password = 'f7^Ja-y%M)pM';
$mail->SMTPSecure = 'tls';
$mail->Port = '587';

$mail->setFrom('noreply@elke.codefactory.live', 'Entrepreneurs For Future');

$mail->addAddress($email);

$mail->Subject = 'Test';

$mail->isHTML(true);

$placeholders = ['%name%', '%surname%', '%message%', '%email%'];
$mail->Body = str_replace($placeholders, $inputs, file_get_contents('mail/MailBody.html'));
$mail->send();
header('Location: ./contact.php');