<?php 
    //use Applications\MAMP\htdocs\Projets\NovediaTests\Model;
    
    session_start();
    include_once "../Services/LogService.php";
    include_once "../Model/CandidatManager.php";
    include_once "../Model/QuestionManager.php";
    // le candidat est il deja connu
    $candidatManager = new CandidatManager();
    $oCandidat = $candidatManager->getCandidat($_SESSION['mail']);
    LogService::logConnexion($oCandidat, "connexion");
    
    // Recupere les questions pour un test données.
    $aQuestions = QuestionManager::getQuestions($_SESSION['testname']);
    //$aQuestions = array('question1', 'question2', 'question3');
    
    if (isset($_POST['validTest'])) {
//        var_dump($_POST);
    }
    
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <title>Formulaire de test</title>
        <meta http-equiv="Content-Type" content="text/html" charset=utf-8/>
        <link href="css/design.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="header">
            <div id="banniere">NOVEDIA GROUP</div>
            <div id="bonjour" class="righthead">
                Bienvenue <?php echo $oCandidat->getPrenom(); ?>
            </div>
        </div>
        <div id="menu"></div>
        <div id="wrapper_candidat">
            <form action="EndOfTest.php" method="post">
                <?php
                    foreach ($aQuestions as $iKey => $oQuestion) {
                        echo '<div class="question_label">Question '.($iKey+1).' / '.count($aQuestions).': '.$oQuestion->getLibelle().'</div>';
                        ?>
                        <div>
                            <input type="checkbox" id="repa" name="<?php echo $iKey+1 ?>" value="a" />
                            <label for="repa">a</label>
                        </div>
                        <div>
                            <input type="checkbox" id="repb" name="<?php echo $iKey+1 ?>" value="b"/>
                            <label for="repb">b</label>
                        </div>
                        <div>
                            <input type="checkbox" id="repc" name="<?php echo $iKey+1 ?>" value="c"/>
                            <label for="repc">c</label>
                        </div>
                        <div>
                            <input type="checkbox" id="repd" name="<?php echo $iKey+1 ?>" value="d"/>
                            <label for="repd">d</label>
                        </div>
                <?php
                    }
                    ?>
                
                <input type="submit" name="validTest" value="valider mon test" />
            </form>
        </div>
        <div id="footer"></div>
    </body>
</hml>