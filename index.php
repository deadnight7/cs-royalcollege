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
        <?php  require ('./scripts/headers/navbar.php'); ?>
        <?php require ('scripts/headers/loginbox.php');?>
        
        <div class="container">
            <div class="row">
                <div class="span6">
                    <h1>Announcements</h1>
                    <hr/>
                    <h3>Announcement1</h3>
                    <p>
                        usmod tempor in enim ad minim veniam, quis noiquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr/>
                    <h3>Announcement1</h3>
                    <p>
                        Curabitur pretium  com felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>
                    <hr/>
                    <h3>Announcement1</h3>
                    <p>
                        risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                    </p>
                </div>
                <div class="span6">
                    <h1 class="">Top Discussions</h1>
                    <hr/>
                    <p>
                    <h3>Discussion1</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectete et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr/>
                    <h3>Discussion1</h3>
                    <p>
                        Curabitur pretium tincidunt lacus. Nulla gravida orci a bibendum elit, nec luctus magna felmod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>
                    <hr/>
                    <h3>Discussion1</h3>
                    <p>
                        Fusce convallis, mauris imperdiet graac hasis diammolestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                    </p>
                    <hr/>
                    <h3>Discussion1</h3>
                    <p>
                        Proin nonummy, lacus eget  dignit odsed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                    </p>
                </div>

                <div class="span12">
                    <h1>Top Articles</h1>
                    <hr/>
                    <h3>Article1</h3>
                    <p>
                        usmod tempor in enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr/>
                    <h3>Article1</h3>
                    <p>
                        Curabitur pretium  commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>
                    <hr/>
                    <h3>Article1</h3>
                    <p>
                        Fusce convallis, mauris imperdiet graipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                    </p>
                </div>
            </div>
        </div>


        <!--
        <div class="container header">
            <div class="row-fluid">
                <h1 class="span5 caviarBold cs">Computer Science</h1>
                <img  class="span2" src="res/assets/logo.jpg"/>
                <h1 class="span5  caviar rc ">Royal College</h1>
            </div>
        </div>
                <div class="container">
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/banner/penbanner.jpg" alt="">
                                <div class="carousel-caption">
                                    <h4>First Thumbnail label</h4>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/banner/sebanner.jpg" alt="">
                                <div class="carousel-caption">
                                    <h4>Software Engineering</h4>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/banner/mbanner.jpg" alt="">
                                <div class="carousel-caption">
                                    <h4>Third Thumbnail label</h4>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                        </div>
        
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                </div>
        -->

            <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }
      #footer p{
        padding:17px;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
    </style>
    <div id="footer">
      <div class="container">
          <p class="muted credit pagination-centered">Copyrights &copy; 2013 - <a href="index.php">Royal College</a>, Mira Road (E). </p>
      </div>
    </div>
    

        <script src="js/jq1.7.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('document').ready(function() {
                $('.carousel').carousel();
            });
        </script>

    </body>
</html>