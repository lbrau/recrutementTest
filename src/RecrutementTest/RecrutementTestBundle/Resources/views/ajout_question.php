<?php
    require "../Model/CandidatManager.php";
    $aCandidats = CandidatManager::getAllCandidat();
    
    $aTest = array('toto', 'titi');
    $aResponseProposees = array('a','b','c','d');
    
    $aAllTest = TestManager::getTests();
    
    $nb_question = 0;
    if (isset($_POST['nb_btn'])) {
        
        $nb_question = $_POST['nb_questions'];
        
    }
    elseif (isset($_POST['validform'])) {
        
        TestManager::saveQuestionAboutTest($_POST);
//        $messageFlash = TestManager::addTestAndQuestions($_POST);
    }
    
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
<div class="flashMessage"><?php echo $messageFlash; ?></div>
<div id="wrapper_admin">
    <!-- nombre de questions a ajouter au formulaire -->
    

        <div>
            <!--Formulaire pour definir le nombre de quesiton a ajouter-->
            <form action="" method="post" >
                <select name="nb_questions" >
                    <?php for ($ind = 1; $ind <= 20; ++$ind) {?>
                    <option value="<?php echo $ind;?>"><?php echo $ind;?></option>
                    <?php } ?>
                </select>
                <input type="submit" name="nb_btn">
            </form>
        </div>
        <form action="" method="post" >
        
        <div>
            <select name="testid" >
                <?php foreach ($aAllTest as $oTest) {?>
                <option value="<?php echo $oTest->getId();?>"><?php echo $oTest->getNom();?></option>
                <?php } ?>
            </select>
        </div>
        <?php
        $i = 1;
        for ($ind = 1; $ind <= $nb_question; ++$ind) { ?>
        <div>
            <div>
                <label><?php echo "Question[$i]";?></label>
            </div>
            <textarea rows="4" cols="50" name="<?php echo "Question[$i]['consigne']";?>">
            </textarea>
                
            <?php             
            foreach ($aResponseProposees as $key => $y) {?>
            <div>
                    <label for="t"><?php echo "Reponse $y :: ";?></label>
                    <label>Bonne reponse</label>
                <input type="radio" name="<?php echo "Question[$i][bonne_reponse]"; ?>" value="<?php echo "$y"?>"/>
            </div>
            <!--<textarea rows="4" cols="50" name="<?php //echo 'Question['.$i.'][reponse['.$y.']]'; ?>">-->
            <textarea rows="4" cols="50" name="<?php echo 'Question['.$i.']['.$y.']'; ?>">
            </textarea>
                <?php
            }
            ?>
<!--            <div><label>Bonne réponse</label>
                <input type="text" name="<?php echo "Question[$i][bonne_reponse]" ?>" /></div>-->
        <?php 
            $i++;
        } ?>
        <input type="submit" name="validform" />
    </form>
   
</div>
<div id="footer"></div>

</body>
</html>