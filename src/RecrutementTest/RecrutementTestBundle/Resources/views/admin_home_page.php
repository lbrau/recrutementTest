

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>Administration</title>
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8/>
    <link href="css/design.css" rel="stylesheet" type="text/css" />
    
    {% stylesheets '@NetMediaBundle/Resources/public/css/design.css'%}
        <link rel="stylesheet" href="{{ asset_url }}" type="text/css" media="screen" />
    {% endstylesheets %}
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

    <table>

        <caption>
            <h1>Liste des candidats passés</h1>
        </caption>

        <thead>
            <tr>
            <td rowspan="2"></td>
            <th scope="col" rowspan="2">Nom</th>
            <th scope="col" rowspan="2">Prénom</th>
            <th scope="colgroup" rowspan="2">Adresse e-mail</th>
            <th scope="col" rowspan="2">Nom du test</th>
            <th scope="col" rowspan="2">Résultat</th>
            <th scope="col" rowspan="2">Durée (minutes)</th>
            </tr>
            
        </thead>

        <tbody>
        <?php
          foreach ($aCandidats as $iKey => $oCandidat) {?>
                <tr>
                    <th scope="row"><?php echo $oCandidat->getTest()->getDate(); ?></th>
                        <td><?php echo $oCandidat->getNom() ?></td>
                        <td><?php echo $oCandidat->getPrenom(); ?></td>
                        <td><?php echo $oCandidat->getMail(); ?></td>
                        <td><?php echo $oCandidat->getTest()->getLibelle(); ?></td>
                        <td><?php echo $oCandidat->getTest()->getResultat(); ?> %</td>
                        <td><?php echo $oCandidat->getTest()->getDureeTest(); ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<div id="footer"></div>

</body>
</html>