<?php
    ob_start();
    session_start();
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
<body class="payment admin-login">
    <div class="row">
        <div class="small-12 large-6 columns">
            <div class="small-12 large-centered large-6 columns" style="margin-top: 200px;">
                <div class="callout">
                    <center><img src="../resources/img/logo-2.png" /></center><br>

                    <?php
                    $msg = '';

                    if (isset($_POST['login']) && !empty($_POST['user'])
                        && !empty($_POST['password'])) {

                        if ($_POST['user'] == 'admin' &&
                            $_POST['password'] == 'admin') {
                            $_SESSION['valid'] = true;
                            $_SESSION['timeout'] = time();
                            $_SESSION['user'] = 'admin';

                            header("location: home.php");
                        }else {
                            $msg = 'Wrong username or password';
                        }
                    }
                    ?>

                    <form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
                          ?>" method = "post">
                        <label>User:
                            <input type="text" name="user" class="user" required autofocus>
                        </label>
                        <label>Password:
                            <input type="password" name="password" class="pswd" required>
                        </label>
                        <button type="submit" name="login" class="expanded button">Log in</button>
                        <span class="error"><?php echo $msg; ?></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>