<?php
include_once("includes/iheader.php");
if(isset($_POST["save"])) {// Testaa onko painettu submit-painiketta
    // Talletetaan annetut arvot assosiatiiviseen taulukkoon
    $data['name'] = $_POST['givenUsername'];
    $data['email'] = $_POST['givenEmail'];
    $data['password'] = hash('sha256', $_POST['givenPw']."qwer"); // qwer on suola
    //$data['password'] = md5($_POST['givenPw'].'!!');
    // Talletetaan kantaan $DBH (database handle)
    /*print_r($data);*/
        

    if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        
        // Onko annettu email jo käytössä? (ks. lab note sivu 8 (6?))
            
        try {
            $stm = $DBH->prepare("INSERT into AS_User (Username, Password, Email) VALUES(:name, :password, :email);");
             if ($stm->execute($data)) {
                //$_SESSION['name'] = $data['name'];
                //$_SESSIN['email'] = $data['email'];
                $_SESSION['message'] = "<br/><p>registered - now you may log in!</p><br/>" . $_SESSION['email'];
                $_SESSION['registered'] = 'yes';
                // $_SESSION['loggedIn] = 'yes'; // jos rekisteröinti onnistunut -> kirjautunut suoraan sisään
                redirect("login.php");
            } else {
                $_SESSION['message'] = "<p>unable to register</p><br/>";
                redirect("index.php");
            }
        } catch(PDOException $e) {
            $_SESSION['message'] = "<p>username or email already taken!</p><br/>"; //$e.getMessage()
            redirect("login.php");
        }
    } else {
        // Annettu email hylättiin palvelimella, tieto sessiomuuttujaan
        $_SESSION['message'] = "<p>invalid email</p><br/>";
        redirect("index.php");
    }
}
?>