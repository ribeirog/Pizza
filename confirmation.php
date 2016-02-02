<?php
$tempFile = @fopen("temp.txt", "r");
if ($tempFile) {
    while (($buffer = fgets($tempFile, 4096)) !== false) {
        $newOrder = $buffer;
    }
    if (!feof($tempFile)) {
        echo "Error: unexpected fgets() fail";
    }
    fclose($tempFile);
}

$writingOrder = fopen("orders.txt", "a+") or die("Unable to open file!");
$writeOrder = $newOrder . "\n";
fwrite($writingOrder, $writeOrder);
fclose($writingOrder);

$cleaningTempFile = @fopen("temp.txt","r+");
@ftruncate($cleaningTempFile, 0);
fclose($cleaningTempFile);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Pizza! - Success!</title>

    <!-- Compressed Foundation CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css">

    <!-- Styled CSS -->
    <link rel="stylesheet" href="resources/stylesheet/style.css" />

    <!-- Including the fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- Including jquery -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

    <!-- Compressed Foundation JavaScript -->
    <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.reveal.js"></script>
    <script src="resources/js/jquery.card.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>

</head>
<body class="payment">
    <div class="row">
        <div class="small-12 large-2 columns">
            <br>
            <a href="index.html" >
                <img src="resources/img/logo-2.png" />
            </a>
        </div>
        <div class="small-12 large-10 columns">
            <h2 class="payment-header">Your order was placed with success!</h2>
        </div>
    </div>
    <div class="row">
        <div class="small-12 large-7 columns" style="margin-top: 40px;">
            <h3>Your order was placed with success.</h3>
            <p>Your pizza will be ready soon. =D</p>
            <br><br>
            <p>Want to buy another one?</p>
            <a href="index.html" class="alert button">Click here</a>
        </div>
        <div class="small-12 large-5 columns" style="margin-top: 40px;">
            <img src="resources/img/confirmation.png">
        </div>
    </div>
</body>
</html>