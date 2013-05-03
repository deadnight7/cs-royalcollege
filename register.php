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
        <div class="container">
            <?php
            if (isset($_REQUEST['useremail']) && isset($_REQUEST['userpassword']) && isset($_REQUEST['userpasswordagain'])) {
                $useremail = strtolower($_REQUEST['useremail']);
                $password = $_REQUEST['userpassword'];
                $passwordagain = $_REQUEST['userpasswordagain'];

                if (filter_var($useremail, FILTER_VALIDATE_EMAIL) && ($password == $passwordagain) && (strlen($password) >= 7)) {
                    // Details entered are valid
                    // enter the user in the database with email password
                    //enter the status as inactive

                    if (mysql_connect($mysql_host, $mysql_user, $mysql_password) && mysql_select_db($mysql_database)) {
                        
                        $registeruserquery = "INSERT INTO  `a1970345_csr`.`users` (
                                    `email` ,
                                    `password` ,
                                    `status`
                                    )
                                    VALUES (
                                    '$useremail', SHA1(  '$password' ) ,  'inactive'
                                    );
                                    ";

                        if (mysql_query($registeruserquery)) {
                            ?>
                            <div class="whitebox">
                                <h1>Confirm your registration</h1>
                                <p>An email has sent to the following mentioned email i.e <a href="confirmation.php?em=<?php echo $useremail; ?>&p=<?php echo sha1($password); ?>">Confirm your email</a> Please click the link in the sent email for the activation of your account, Post activation you may be activated to this </p>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="whitebox">
                                <h1>The user is already registered</h1>
                                <p>Try recovering your password by clicking here</p>
                            </div>
                            <?php
                        }
                    }
                } else {
                    header('Location: index.php');
                    //email not valid 
                    ?>
                    <div class="whitebox">
                        <h1>Incorrect Inputs</h1>
                        <p>Either the Email entered was incorrect or<br/> the passwords entered were not matching <br/>Passwords Length must be greater than 7 characters long>please, check again and <a href="#" class="loginclick">enter</a> your details once more</p>
                    </div>
                    <?php
                }
            } else {
                header('Location: index.php');
                ?>
                <div class="whitebox">
                    <h1>Required feilds empty</h1>
                    <p>The required feilds were not validated for the following registeration </p>
                </div>
                <?php
            }
            ?>
        </div>

        <script src="js/jq1.7.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('document').ready(function() {
                $('.carousel').carousel();
                $('.loginclick').click(function(e) {
                    e.preventDefault();
                    $('.loginbox').stop().slideToggle(700);
                });
            });
        </script>

    </body>
</html>

<?php
ob_end_flush();
?>

