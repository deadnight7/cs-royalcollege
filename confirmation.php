<?php
ob_start();
require './scripts/requires/site_data.php';
require './scripts/requires/db_conn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Royal College - Computer Science</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/fonts/bebas/stylesheet.css"/>
        <link rel="stylesheet" href="css/fonts/caviar/stylesheet.css"/>
        <link rel="shortcut icon" href="res/assets/logo.png"/>
        <style type="text/css">
            h1, h3 {
                font-family: CaviarDreamsBold;
                text-shadow: 1px 1px 1px rgb(153, 153, 153);
            }
            .royallogo {
                height: 57px;
            }
            .navbar {
                position: absolute ;
            }
            .menustrip {
                margin:17px;
            }
            .menustrip ul li a:hover {
                box-shadow:inset 0px 0px  12px 3px #CCC;
                -webkit-transition: 0.3s;
                border-radius: 10px;
                border:1px solid #AAA;
            }
            .menustrip ul li a {
                -webkit-transition: 0.3s; 
                border-radius: 10px;
            }
            .menustrip ul li {
                margin-left: 3px;
            }
            .menustrip {
                margin:17px;
            }
            .loginbox {
                margin-top: 70px;
                display:none;
                background: linear-gradient(rgb(211, 211, 211), white);
                margin: 0px auto;
                padding: 0px;
                border-radius:0px 0px 17px 17px;
                border: 1px solid #AAA;
                box-shadow: inset 0px 0px 23px -5px #777;
            }
            
            .loginbox-inner {
                margin-top: 25px;
            }

            .bebas {
                font-family:'BebasRegular';
            }
            .caviar {
                font-family: 'CaviarDreamsRegular';
            }
            .caviarBold {
                font-family: 'CaviarDreamsBold';
            }
        </style>

    </head>
    <body>
        <?php require ('./scripts/headers/navbar.php'); ?>
        <?php require ('scripts/headers/loginbox.php'); ?>

        <?php
        if (isset($_REQUEST['p']) && isset($_REQUEST['em'])) {
            if (strlen($_REQUEST['p'] > 0) && strlen($_REQUEST['em']) > 0) {
                /* Grab the email 
                 * check into database and get the corresponding hash
                 * match the hashes
                 * register the user
                 */

                $email = $_REQUEST['em'];
                $password = $_REQUEST['p'];
                // echo 'Hi user : email = ' . $email . 'Password = ' . $password;

                $registerationconfirm_query =
                        "SELECT * 
                        FROM  `users` 
                        WHERE  `email` =  '$email'";

                $result = mysql_query($registerationconfirm_query);
                $db_email = "";
                $db_password = "";
                $db_status = "";
                while ($row = mysql_fetch_array($result)) {
                    $db_email = $row['email'];
                    $db_password = $row['password'];
                    $db_status = $row['status'];
                    //echo "<br/>$db_email $db_status $db_password";
                }
                if (($db_email == $email) && ( $db_password == $password)) {
                    // change the status to active
                    $changestatus_query = "UPDATE  `users` SET  `status` =  'active' WHERE  `users`.`email` =  '$email' ";
                    if (mysql_query($changestatus_query)) {
                        //echo "Thank you for confirming your email..!";
                        ?>
                        <div class="whitebox container">
                            <h1>You have successfully registered, Welcome!</h1>
                            <p>You have successfully completed your activation  process, thank you for joining! You can now <a href="#" class="loginclick">log in</a>.</p>
                        </div>
                        <?php
                    } else {
                        //echo "you still not have confirmed your email";
                    }
                }
            } else {
                header('Location: index.php');
            }
        } else {
            header('Location: index.php');
        }
        ?>
    </body>
</html>
<?php ob_end_flush(); ?>
