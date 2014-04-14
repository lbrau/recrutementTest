<?php
    session_start();
    include_once '../Utils/Validate.php';
    include_once '../Services/LogService.php';
    include_once '../Model/CandidatManager.php';
    include_once '../Model/TestManager.php';
    
    // recupere tous les tests de la base.
//    $aTestsToBegin = array("toto","titi","tutu");
    $aTestToBegin = TestManager::loadAllTestName();
    
    $validation = new Validate();
    
    $return = $validation->validateForm($_POST);

    if (null != $return) {
        
        if ("candidate" == $return) {
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['testname'] = $_POST['begintest'];
            CandidatManager::saveCandidat($_POST);
            
            header("Location: candidat_form.php");
        }
        elseif ("admin" == $return) {
            header("Location: admin_home_page.php");
        }
        elseif ("ErrorFieldCandidat" == $return) {
            echo "flash bag candidat";
        }
        elseif ("ErrorFieldAdmin" == $return) {
            echo "FB admin<br>";
        }
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>Bienvenue chez novedia</title>
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8/>
    <link href="css/design.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="header">
        <div id="banniere">NOVEDIA GROUP</div>
        <div id="adminForm">
            <form action="" method="post">
                <input type="text" name="passAdmin" placeholder="Pass admin" />
                <input type="submit" name="connection_admin" value="connexion"/>
            </form>
        </div>
    </div>
    <div id="menu"></div>
    <div id="wrapper">
        <form action="" method="post">
            <input type="text" name="nom" placeholder="nom" />
            <input type="text" name="prenom" placeholder="prenom" />
            <input type="text" name="mail" placeholder="e-mail" />
            <div>    
                <label for="begintest">test</label>
                <select name="begintest" id="begintest">
                    <?php foreach ($aTestToBegin as $sTest) {?>
                    <option value="<?php echo  $sTest ?>"><?php echo $sTest ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input type="submit" name="start_test" value="demarrer le test"/>
        </form>
    </div>
    <div id="footer"></div>

</body>
</html>