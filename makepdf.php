<?php
require_once 'vendor/autoload.php';

//grab the data from the form
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];

$mpdf = new mPDF();

$data ="";

$data.="<h1>Paradise and Paradise Care</h1>";

$data.="<strong>Name: </strong>" .$name . "<br>";
$data.="<strong>Email: </strong>" .$email . "<br>";
$data.="<strong>Phone: </strong>" .$phone . "<br>";
$data.="<strong>Message: </strong>" .$message . "<br>";

$mpdf->WriteHTML($data);


//output to the browser
$mpdf->Output('myPDF.pdf', 'D');