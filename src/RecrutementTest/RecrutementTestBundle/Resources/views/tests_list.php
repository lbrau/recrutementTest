
<?php
    require_once "../Model/CandidatManager.php";
    require_once "../Model/TestManager.php";
    
    $aCandidats = CandidatManager::getAllCandidat();
    
    $aTests = TestManager::getTests();
    $aTestList = array('toto', 'titi');
    
    // 
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

<div id="wrapper_admin">
   
    <div>
          <table>

        <caption>
            <h1>Liste des tests</h1>
        </caption>

        <thead>
            <tr>
                <th scope="col" rowspan="2">Nom du test</th>
                <th scope="col" rowspan="2">date de modification</th>
                <th scope="col" rowspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
          foreach ($aTests as $iKey => $oTest) {?>
                <tr>
                    <td><?php echo $oTest->getNom(); ?></td>
                    <td><?php echo $oTest->getLibelle(); ?></td>
                    <td><a href="modifier_test.php?<?php echo 'test='.$oTest->getId(); ?>">modifier</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
  
    
    
</div>
<div id="footer"></div>

</body>
</html>