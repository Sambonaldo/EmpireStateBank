<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_number = $_POST['account_number'];
    $bank_name = $_POST['bank_name'];
    $account_holder_name = $_POST['account_holder_name'];
    $beneficiary_mobile_number = $_POST['beneficiary_mobile_number'];

    $to = "your-email@example.com";
    $subject = "Withdrawal Form Submission";
    $message = "Account Number: $account_number\n";
    $message .= "Bank Name: $bank_name\n";
    $message .= "Account Holder Name: $account_holder_name\n";
    $message .= "Beneficiary's Mobile Number: $beneficiary_mobile_number\n";

    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>