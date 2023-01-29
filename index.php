<?php
//Allow the config
!defined('__CONFIG__', TRUE);
//reguire the config
require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<HTML lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" constent="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="follow">

        <title>Login</title>

        <base href="/" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
    </head>

<body>

<div class="uk-section uk-container">
    <?php
    echo "Hello Helen, Today is ";
    eacho date("Y m d");
    ?>
</div>









<?php
//define footer
 required_once "inc/footer.php";

?>


</body>
</html>