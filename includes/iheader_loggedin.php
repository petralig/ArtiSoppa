<!DOCTYPE html>
<html>
    <head>
        <title>ArtiSoppa - logged in</title>
        <link href="styles/lightbox.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/lightbox.js"></script>
    </head>
    <body>
<?php
    require_once("config/config.php");
    // SSLon();

    // Näytetään rekisteröinti, kirjaudu tai kirjautuneen käyttäjätieto

    // Oletuksena nyt rekisteröinti(sivulle)
    ?>

        <main id="main_loggedin">
            <header>
                <a href="index.php">
                    <img src="images/artisoppa_logo1.png" id="logged_logo" />
                </a>

                <nav id="loggedin_nav">
                    <img src="images/search_icon.png" id="searchicon" />
                    <!-- Suurennuslasi -->
                    <form action="demo_form.asp">
                        <input id="searchbar" type="text" name="searchbar" placeholder="Search what thou like">
                        <!-- <br /> -->
                        <input id="searchbutton" type="submit" name="searchButton" value="search">
                    </form>
                </nav>
                
                
                <!-- TAUSTAGRAFIIKKA !!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                
                
                
                <nav id="menu">
                    <a href="javascript:void(0)" id="closebtn" onclick="closeNav()">&#9776;</a>
                    <figure id="profilepicture">
                        <figcaption id="username_menu">username</figcaption>
                        <a href="http://placekitten.com/g/90/90"><img src="http://placekitten.com/g/90/90"></a>
                    </figure>
                    <br/><br/>
                    <a href="upload_test.php">publish new content</a><br/>
                    <a href="gallery_test.php">my gallery</a><br/>
                    <a href="#">favorite users</a><br/><br/><br/><br/><br/><br/><br/>
                    <a href="logout.php">logout</a>
                </nav>

                <p id="openbtn" onclick="openNav()">&#9776;</p>
            </header>
        </main>

        <script>
            function openNav() {
                document.getElementById("menu").style.width = "400px";
            }

            function closeNav() {
                document.getElementById("menu").style.width = "0";
            }

        </script>

