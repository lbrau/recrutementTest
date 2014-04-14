<?php
    require "../Model/CandidatManager.php";
    
    $flashBag = null;
    $aCandidats = CandidatManager::getAllCandidat();
    $oTest = TestManager::getOneTestById($_GET['test']);
    
    if (isset($_POST['valid_modif']) && $_POST['valid_modif']) {
        $testNameIsAlone = TestManager::checkTestNameUnique($oTest, $_POST);
        if ($testNameIsAlone) {
            TestManager::PersistAndFlush($_POST);
            $flashBag = "Modification effectuées";
        }
        else {
            $flashBag = "Le nom du test doit etre unique dans la base";
        }
    }
    // Ligne ajouté pour le rafraichissement.
    $oTest = TestManager::getOneTestById($_GET['test']);
    $aQuestions = TestManager::findQuestionByTestId($_GET['test']);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>Administration</title>
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8/>
    <link href="css/design.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
<div id="header">
    <div id="banniere">NOVEDIA GROUP</div>
    <div id="bonjour" class="righthead">
       Mode administrateur
    </div>
</div>
    
<?php    include_once 'menu.php';?>




<div><br /><br /></div>
<hr class="crlf" />
<div class="flashMessage"><?php echo $flashBag ?></div>
<div id="wrapper_admin">
    <form action="" method="post">
        <div>
            <label>Nom du test</label>
            <input type="text" name="nom" value="<?php echo $oTest->nom_test; ?>"/>
        </div>
        <div>
            <label>Libelle du test</label>
            <input type="text" name="libelle" value="<?php echo $oTest->libelle_test; ?>"/>
        </div>
        
        <?php
        $i = 1;
        foreach ($aQuestions as $oQuestion) {?>
        <div>
            <div>Question<?php echo $i; ?></div>
            <textarea name="<?php echo "question[$i]"; ?>">
                <?php echo $oQuestion->libelle;?>
            </textarea>
           <input type="radio" name="<?php echo "reponse[$i]" ?>" value="<?php echo $oQuestion->reponse ?>" />
           
           <input type="hidden" name="<?php echo "fk_question[$i]"?>" value="<?php echo $oQuestion->fk_question;?>" />
           <input type="hidden" name="fk_test" value="<?php echo $oQuestion->fk_test;?>" />
        </div>
        <?php
        $i++;
        }
        ?>
        
        <input type="submit" name="valid_modif" />
    </form>
   
</div>
<div id="footer"></div>

</body>
</html>
