<?php

require_once ("Mail.php");

$nome = $_POST['name'];
$email = $_POST['email'];
$unidade = $_POST['unidade'];
$message = $_POST['message'];

if (isset($email = $_POST['email'])){

$de = 'iltonk.si@gmail.com';
$titulo = 'Inscrições TechNabuco <'. $nome.' >';
$body ="Prezado ".$nome.", \r\n";
$body .= " Informamos que sua inscrição foi realizada com sucesso, porém para confirmar sua inscrição você deverá comparecer na unidade Joaquim Nabuco Recife com 1KG de alimento não parecível.";


$headers = array(
    'From' => $de,
    'To' => $email,
    'Subject' => $titulo
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'iltonk.si@gmail.com',
        'password' => '<senha>'
    ));

$mail = $smtp->send($email, $headers, $body);

if (PEAR::isError($mail)) {
    header("location:index.html");
} else {
    header("location:index.html");
}

}else{
	header("location:index.html");
}