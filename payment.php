<?php
if (isset($_POST['submit'])) {
    $cardNumber = $_POST['cardNumber'];
    $cardHolder = $_POST['cardHolder'];
    $cardExpiry = $_POST['cardExpiry'];
    $cardCVV = $_POST['cardCVV'];
    $amount = $_POST['amount'];

    // validate the card details
    if (strlen($cardNumber) != 16) {
        // card number is not valid
        // display error message
    } elseif (strlen($cardHolder) == 0) {
        // card holder name is not valid
        // display error message
    } elseif (strlen($cardExpiry) != 5) {
        // card expiry is not valid
        // display error message
    } elseif (strlen($cardCVV) != 3) {
        // card cvv is not valid
        // display error message
    } elseif ($amount <= 0) {
        // amount is not valid
        // display error message
    } else {
        // all card details are valid
        // simulate a payment processing
        $transaction_id = rand(100000, 999999); // generate a random transaction id
        $status = "success"; // simulate a successful transaction
        // store the transaction details in a database
        // display success message
    }
}
?>