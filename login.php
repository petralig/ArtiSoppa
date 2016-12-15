    
        <!-- <main class="main"> -->
        
        <?php
        require_once("includes/iheader.php");

        $_SESSION['registered'] = "";
        $_SESSION['message'] = "";
        // Tultiinko tälle sivulle lomakkeen submit-painikkeella?
        if (isset($_POST["login"])) {
            // Onnistuuko kirjautuminen?
            // Jos onnistuu, saadaan käyttäjän kaikki tiedot
            $user = login($_POST["givenEmail"], $_POST["givenPw"], $DBH);
            if ($user) { // Löydettiinkö
                // Talletetaan käyttäjän tiedot sessiomuuttujaan
                $_SESSION['loggedIn'] = 'yes';
                $_SESSION['name'] = $user->Username;
                $_SESSION['uid'] = $user->UserID;              // uid !!!!!!!!!!!!!!
                $_SESSION['email'] = $user->Email;
                unset($_SESSION['message']);                 // <------ unset message täällä
                redirect("login_view.php");
            } else {
                $_SESSION['message'] = "<p>wrong email or password!</p><br/>";
            }
        } //else if (isset($_POST["cancel"])) {
            // Tultiinko sivulle cancel-painikkeella?
            // Palataan etusivulle
            //redirect("index.php");
        //}
        ?>

          <form id="login" method="POST">
            <p>
            email <br /><input class="formfield" type="email" name="givenEmail"/><br /><br />
            password <br /><input class="formfield" type="password" name="givenPw"/><br /><br />
                
            <input class="formbutton" type="submit" name="login" value="log in" />
                
            <input class="formbutton" type="reset" value="reset" /></p>
        </form>
        
        <br />
            
        <nav class="login_back">
            <a href="index.php">back</a>
        </nav>
                    
        <?php
            require_once("includes/footer.php");
        ?>
        
