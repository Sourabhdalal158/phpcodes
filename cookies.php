<?php
$cookie_name="user";
$cookie_value="[google]";
setcookie($cookie_name,$cookie_value,time()+(86400),"/");
echo "cookie is set";
?>
<html>
    <body>
        <?php
        if(isset($COOKIE[$cookie_name]))
        {
            echo "cookie is not set";
        }
        else
        echo $COOKIE[$cookie_name];
        ?>
        </body>
        </html>