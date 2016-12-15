
<!DOCTYPE html>
<html>
    <head>
        <title>ArtiSoppa - visitor view</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link href="styles/lightbox.css" rel="stylesheet">
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/lightbox.js"></script>
        
    </head>
    <body>
    
    <?php
    /*error_reporting(E_ALL);*/

    require_once("config/config.php");
    // SSLon();

    // Näytetään rekisteröinti, kirjaudu tai kirjautuneen käyttäjätieto
    // Oletuksena nyt rekisteröinti(sivulle)
    ?>
    
        <main class="main">
            <section>
                <a href="index.php">
                    <img src="images/artisoppa_logo1.png" id="main_logo" />
                </a>
                
                        <?php
                            //echo($_SESSION['message']);
                            if($_SESSION['loggedIn'] == "yes") {
                                echo("<p>logged in as: " . $_SESSION['name']. " (" . $_SESSION['email'].")</p>");
                                echo("<a href='login_view.php'>feed</a><br /><br />");
                        ?>      
                            <a href="logout.php" id="logout">log out</a>
                        <?php
                            } else {
                        ?>
                            <?php
                            if($_SESSION['registered'] != "yes") {
                        ?>
                
                
                            <nav class="links">
                                <ul>
                                    <li>
                                        <a class="iheader_buttons" id="register_button" href="register.php">register</a>
                                    </li>
                        <?php
                            }
                            ?>
                            <br />
                                    <li>    
                                        <a class="iheader_buttons" id="login_button" href="login.php">log in</a>
                                    </li>
                                </ul>
                            </nav>
                
                            <br />
                            <hr />
                
                        <?php
                            }
                        ?>
                <br /><br />
                
            </section>
        </main>
<?php



?>