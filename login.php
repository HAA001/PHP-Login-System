<?php
//Allow the config
define('__CONFIG__', TRUE);
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
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">

        <form class="uk-form-stacked js-login">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="Email" required='required' placeholder="email@yahoo.com">
        </div>
    </div>


    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="Password" required='required'  placeholder="Your Password">
        </div>
    </div>

    <div class="uk-margin">
        <button class="uk-button uk-button-default" type="Submit">Login</button>
    </div>

          </form>
    </div>
</div>









<?php
//define footer
 require_once "inc/footer.php";

?>


</body>
</html>