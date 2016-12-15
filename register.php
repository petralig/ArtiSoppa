
        <!-- <main class="main"> -->
            
        <?php
            require_once("includes/iheader.php");
        ?>
        
        <form id="register" method="POST" action="saveUser.php">
            <p>
                username <br/><input class="formfield" type="text" name="givenUsername" required /><br/><br/>

                email <br/><input class="formfield" type="email" name="givenEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required /><br/><br/>

                password <br/><input class="formfield" type="password" name="givenPw" pattern=".{6,}" required /><br/><br/>

                password again <br/><input class="formfield" type="password" name="givenPwAgain" required /><br/>
                
                <br/><input class="formbutton" type="submit" name="save" value="register" />
                
                <input class="formbutton" type="reset" value="reset"></p>
        </form>
            
        <br />
            
        <nav class="login_back">
            <a href="index.php">back</a>
        </nav>
            
        <script>
            var salasana = document.querySelector('input[name="givenPw"]');
            var varmistus = document.querySelector('input[name="givenPwAgain"]');

            var fillPattern = function() {
                varmistus.pattern = this.value; // = salasana.value
            };
            salasana.addEventListener('keyup', fillPattern);

            </script>
        </main>
        
        <?php
            require_once("includes/footer.php");
        ?>
        
