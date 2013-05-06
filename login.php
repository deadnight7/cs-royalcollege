<?php
ob_start();
require 'scripts/requires/site_data.php';

// echo 'Hi '.$useremail. ' How are you! Pasword is '.$password;
?>

<?php ?>
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

        <?php require ('scripts/headers/navbar.php'); ?>
        <?php require ('scripts/headers/loginbox.php'); ?>

        <?php
        /*
         * To change this template, choose Tools | Templates
         * and open the template in the editor.
         */
        /* get the email id
         * fetch from db
         * if exists    -> check password 
         *                      if password hash matches -> log into the system
         *                                                  set the session variable
         *                      else -> throw back with password unmatching
         * else         -> not registered
         * 
         */
        require './scripts/requires/site_data.php';
        require './scripts/requires/db_conn.php';


        if (isset($_POST['loginemail']) && isset($_POST['loginpassword'])) {
            $loginemail = $_REQUEST['loginemail'];
            $loginpassword = $_REQUEST['loginpassword'];
            $loginpasswordhash = sha1($loginpassword);
            $doesuserexists = "SELECT * 
    FROM  `users` 
    WHERE `email` = '$loginemail';";
            $result = mysql_query($doesuserexists);
            if (mysql_num_rows($result) > 0 && mysql_num_rows($result) < 2) {
                //echo "Email exists";
                $dbemail = "";
                $dbpass = "";
                $dbstatus = "";
                while ($rows = mysql_fetch_assoc($result)) {
                    $dbemail = $rows['email'];
                    $dbpass = $rows['password'];
                    $dbstatus = $rows['status'];
                }
                if ($dbpass == $loginpasswordhash) {
                    if (!($dbstatus == 'inactive')) {
                        //login successful
                        //set the sessions variable
                        //echo 'you have successfully logged in!';
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="span12">
                                    <h1>
                                        Log in successful...!
                                    </h1>
                                    <p>
                                        You have now successfully logged in Please ensure to read FAQs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
                        //echo 'Dear user you are not allowed to log in, your Account is inactive';
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="span12">
                                    <h1>
                                        Account inactive.
                                    </h1>
                                    <p>
                                        Your account is right now disabled, Please check your email for activating your account
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    //login uncussful
                    //please try again
                    //echo 'Passwords do not match';
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <h1>
                                    Password incorrect.
                                </h1>
                                <p>
                                    Your account password does not matches with the password entered during registration, please ensure your password is correct.
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                //email does not exists
                //echo "Email does not exists";
                ?>
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <h1>
                                Email does not exists.
                            </h1>
                            <p>
                                please ensure your email is registered with us in the database.
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }else {
            header('Location: index.php');
        }
        ?>
        <script src="js/jq1.7.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('document').ready(function() {
                $('.carousel').carousel();
            });
        </script>

    </body>
</html>

<?php
ob_end_flush();
?>