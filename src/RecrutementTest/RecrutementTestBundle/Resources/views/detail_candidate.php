<?php

    //namespace Applications\MAMP\htdocs\Projets\NovediaTests\View;
    
    //use Applications\MAMP\htdocs\Projets\NovediaTests\Services\LogService;
    
    include "../Services/LogService.php";
    
    echo "ici commence le test <br>";
    
    
    $log = new LogService();
    
    
    
    $log->logConnexion("toot", "eve");
    $log->logConnexion("toto", "coucou", "admin");
    
    
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>Connectez vous</title>
    <meta http-equiv="Content-Type" content="text/html"; charset=utf-8/>
    <link href="css/design.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="banniere">NOVEDIA GROUP</div>
    <div id="bonjour" class="righthead">
       Bienvenue [candidat]
    </div>
</div>
<div id="menu"></div>
<div id="wrapper_candidat">
   
    <h3>Liste des mauvaises réponses</h3>
    <table>
        <tr>
            <th>Question</th>
            <th>réponse</th>
            <th>temps de réponse</th>
        </tr>
          <?php
            $aQuestions = array('toto', 'tutu', 'titi');
            foreach ($aQuestions as $iKey => $sQuestion) {
                ?>
                <tr>
                    <td><?php echo $sQuestion; ?></td>
                    <td><?php echo $sQuestion; ?></td>
                    <td><?php echo $sQuestion; ?></td>
                </tr>
                <?php 
            }
        ?>
        
    </table>
</div>
<div id="footer"></div>

</body>
</html>