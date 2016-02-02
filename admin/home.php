<?php
date_default_timezone_set('America/Chicago');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pizza! - Admin</title>

    <!-- Compressed Foundation CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css">

    <!-- Styled CSS -->
    <link rel="stylesheet" href="../resources/stylesheet/style.css" />

    <!-- Including the fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- Including jquery -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

    <!-- Compressed Foundation JavaScript -->
    <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.reveal.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>

</head>
<body>

    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">Welcome!</li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="logout.php" class="button">Log Out</a></li>
            </ul>
        </div>
    </div>
<br><br>
    <div class="row">
        <table>
            <thead>
            <tr>
                <th>Order #</th>
                <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 0;
            $handle = @fopen("../orders.txt", "r");
            $timeToFinish = 0;

            if ($handle) {
                while (($buffer = fgets($handle, 4096)) !== false) {
                    $count++;
                    echo "<tr style='border-bottom: 1px solid #f8f8f8;'><td>$count</td><td>" . $buffer . "</td></tr>";
                    $timeToFinish += 15;
                }
                if (!feof($handle)) {
                    echo "<tr><td colspan='2'>" . "Error: unexpected fgets() fail" . "</td></tr>";
                }
                fclose($handle);
            }
            ?>
            </tbody>
            <tr style="background: #f8f8f8;">
                <td colspan="2">
                    <?php
                        function convertToHoursMins($time, $format = '%02d:%02d') {
                            if ($time < 1) {
                                return;
                            }
                            $hours = floor($time / 60);
                            $minutes = ($time % 60);
                            return sprintf($format, $hours, $minutes);
}
                        echo "Approximate time to bake all the pizzas: <b>" . convertToHoursMins($timeToFinish, '%02d hours %02d minutes</b> <small> (Each pizza takes about 15 minutes to be ready)</small>');
                    ?>
                </td>
            </tr>
        </table>

    </div>

</body>
</html>