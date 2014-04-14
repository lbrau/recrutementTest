<?php
    require "../Model/CandidatManager.php";
    $aCandidats = CandidatManager::getAllCandidat();
    
    $aTest = array('toto', 'titi');
    $aResponseProposees = array('a','b','c','d');
    
    if (isset($_POST['validform'])) {
        
        echo "validation form ";
        //$messageFlash = TestManager::addTestAndQuestions($_POST);
        TestManager::addTest($_POST);
        
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
    <form action="" method="post" >
        
        <div>
            <label>Nom du test (doit etre unique)</label>
            <input name="nom" />
        </div>
        <div>
            <label>Libelle du test</label>
            <input name="libelle" />
        </div>
        
        <input type="submit" name="validform" />
    </form>
   
</div>
<div id="footer"></div>

</body>
</html>