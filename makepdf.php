<?php
require_once 'vendor/autoload.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    
    // Do something with the data (for demonstration, just echoing)
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "Message: $message <br>";
    
    $mpdf = new \Mpdf\Mpdf();
    
    $data ="";
    
    $data.="<h1>Paradise and Paradise Care</h1>";
    
    $data.="<strong>Name: </strong>" .$name . "<br>";
    $data.="<strong>Email: </strong>" .$email . "<br>";
    $data.="<strong>Phone: </strong>" .$phone . "<br>";
    $data.="<strong>Message: </strong>" .$message . "<br>";
    
    $mpdf->WriteHTML($data);
    
    
    //output to the browser
    $mpdf->Output('myPDF.pdf', 'D');    
    
    
    
    
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit;
}
?>