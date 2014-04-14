<?php
    require "../Model/CandidatManager.php";
    $aCandidats = CandidatManager::getAllCandidat();
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

   
</div>
<div id="footer"></div>

</body>
</html>