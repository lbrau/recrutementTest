<?php
session_start();
    include_once '../Utils/Validate.php';
    include_once '../Services/LogService.php';
    include_once '../Model/CandidatManager.php';
    include_once '../Model/TestManager.php';
    
    
    $tauxReussite = TestManager::testIsGood($_POST, $_SESSION['testname']);
    
    
    
    // Recuperer le candidat pour le send avec le test pour persister la sauvegarde ************************************
    // recuperer l'id du candidat_test pour faire l'update car le nom candidat et test n'est pas fiable.
    $oCandidat = CandidatManager::getCandidat($_SESSION['mail']);
    $oTest = TestManager::getOneTest($_SESSION['testname']); // ######################################
    $oTest->setResultat($tauxReussite);

    TestManager::saveTestResult($oCandidat, $oTest);
    
    
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
            <form action="admin_home_page.php" method="post">
                <input type="text" name="passAdmin" placeholder="Pass admin" />
                <input type="submit" name="connection_admin" value="connexion"/>
            </form>
        </div>
    </div>
    <div id="menu"></div>
    <div id="wrapper">
        Votre test est terminé.
        Les resultats de vos tests vous seront communiqués.
        Votre réussite du test s'élève a <?php echo $tauxReussite." %";?>
    </div>
    <div id="footer"></div>

</body>
</html>